<?php

namespace App\Http\Controllers;

use App\Models\bolum;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\fakulte;
use App\Models\ogrenci;



if (!isset($_SESSION)) {
    session_start();
}

class LoginController extends Controller
{
    public function create(Request $kayitVeri)
    {
        $kayit=new User();

        $kayit->name=$kayitVeri->ad;
        $kayit->surname=$kayitVeri->soyad;
        $kayit->pozisyon=$kayitVeri->pozisyon;
        $kayit->tel=$kayitVeri->iletisim;
        $kayit->email=$kayitVeri->email;
        $kayit->password=$kayitVeri->password;
        $kayit->save();
        $verilerim=$kayit->query()->where("email",$kayitVeri->email)->where("password",$kayitVeri->password)->get();
        $_SESSION["login"]=true;
        $_SESSION["username"]=$kayitVeri->ad;
        $_SESSION["usersurname"]=$kayitVeri->soyad;
        $_SESSION["user_id"]= $verilerim[0]->id;

        $kayitogrenci=new ogrenci();

        $kayitogrenci->ogrenci_no=$kayitVeri->no;
        $verilerim=$verilerim[0];
        $kayitogrenci->user_id=$verilerim->id;
        $kayitogrenci->bolum_ID=$kayitVeri->bolum;
        $kayitogrenci->sinif=$kayitVeri->sinif;
        $kayitogrenci->save();



        return header("Refresh:0.1;url=/");
    }
    public function logout()
    {
        session_destroy();
        return header("Refresh:0.1;url=/");
    }
    public function login(Request $giris)
    {
        $login=new User();

        $veri=$login->query()->where("email",$giris->mail)->where("password",$giris->sifre)->get();
        if($veri[0]->id){
            $_SESSION["login"]=true;
            $_SESSION["username"]=$veri[0]->name;
            $_SESSION["usersurname"]=$veri[0]->surname;
            $_SESSION["user_id"]= $veri[0]->id;
            return header("Refresh:0.1;url=/");
        }
        else{

        }
    }
    public function fakultegetir(){
        $fakultee=new fakulte();

        $fakultelerim=$fakultee->query()->get();
        return view("login")->with("fakulteler",$fakultelerim);

    }
    public function bolumgetir($fakulte_id){
        $bolumm=new bolum();
        $bolumlerim=$bolumm->query()->where("fakulte_id",$fakulte_id)->get();
        return $bolumlerim;
        //aynı sayfada oldugu için view ve with kullanmyaız.

    }
}
