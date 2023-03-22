<?php

namespace App\Http\Controllers;

use App\Models\calisan;
use App\Models\etkinlik;
use App\Models\ogrenci;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    public function adminlogin(){
        return view("admin/adminlogin");
    }
    public function admingirisyap(Request $admingiris){
        $admingirisi= new User();

        $verilerim=$admingirisi->query()->where("email",$admingiris->mail)->where("password",$admingiris->sifre)->get();
      // return $admingiris;
        if(count($verilerim)>0) {


            $admincontrol= new admin();
            $sorgu=$admincontrol->query()->where("user_id",$verilerim[0]->id)->get();
            if(count($sorgu)>0){
                $_SESSION["login"] = true;
                $_SESSION["username"] = $verilerim[0]->name;
                $_SESSION["usersurname"] = $verilerim[0]->surname;
                $_SESSION["user_id"] = $verilerim[0]->id;
                $_SESSION["yetki"]=true;

                return $this->adminsayfa();

            }
        }

    }
    public function  adminsayfa(){
        $a=new ogrenci();
        $b=new etkinlik();
        $c=new calisan();

        $sayogrenci=count($a->query()->get());
        $saycalisan=count($c->query()->get());
        $aktifetkinlik=count($b->query()->where("etkin",1)->get());

        $gecmisetkinlik=count($b->query()->where("etkin",0)->get());

        return view("admin/admin",compact("sayogrenci","saycalisan","aktifetkinlik","gecmisetkinlik"));
    }
}
