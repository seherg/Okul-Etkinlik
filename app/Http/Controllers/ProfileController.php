<?php

namespace App\Http\Controllers;

use App\Models\ogrenci;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\bolum;


if(!isset($_SESSION)){
    session_start();
}
class ProfileController extends Controller
{
    public function profil(){
        if(isset($_SESSION["login"])){
            $user=new User();
            $ogrenci=new ogrenci();
            $bolum=new bolum();

            $userdata=$user->query()->where("id",$_SESSION["user_id"])->get();
            $userdata2=$ogrenci->query()->where("user_id",$_SESSION["user_id"])->get();
            $userdata=$userdata[0];
            $userdata2=$userdata2[0];
            $bolumal=$bolum->query()->where("id",$userdata2->bolum_ID)->get();
            $bolumal=$bolumal[0];

            $profilbilgilerim=[
                'id'=>$userdata->id,
                'ad'=>$userdata->name,
                'soyad'=>$userdata->surname,
                'mail'=>$userdata->email,
                'sifre'=>$userdata->password,
                'tel'=>$userdata->tel,
                'ogrenci_no'=>$userdata2->ogrenci_no,
                'bolum'=>$bolumal->bolum_adi,
                'sinif'=>$userdata2->sinif,
                'resim'=>$userdata2->resim,
            ];

            return view("profile")->with("bilgilerim",$profilbilgilerim);

        }else{
            return header("Refresh:0.1;url=/login");
        }

    }
    public function guncelle(Request $guncel){
        $guncelleme= new User();
        $guncelleme2= new ogrenci();
        if(($guncel->password)==($guncel->password2)) {
            $guncelleme->where("id", $guncel->id)->update([
                'name' => $guncel->first_name,
                'surname' => $guncel->last_name,
                'email' => $guncel->email,
                'password' => $guncel->password,
                'tel' => $guncel->phone,

            ]);
            $guncelleme2->where("user_id",$guncel->id)->update([
                'sinif'=>$guncel->sinif,
            ]);
        }
        return view("welcome");


    }
    public function resimguncelle(Request $rguncelle){

        $fotograf=new ogrenci();
        $resim=$rguncelle->resim;
        $resim_adi='ogrenci'.$rguncelle->id.date("Ymdhis").".".$resim->getClientOriginalExtension();
        $resim->move(public_path('image'),$resim_adi);
        $fotograf->where("id",$rguncelle->id)->update(['resim'=>$resim_adi]);


    }
}
