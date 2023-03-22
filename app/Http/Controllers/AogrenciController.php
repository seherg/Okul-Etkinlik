<?php

namespace App\Http\Controllers;

use App\Models\bolum;
use App\Models\ogrenci;
use App\Models\User;
use Illuminate\Http\Request;

class AogrenciController extends Controller
{
    public function asd(){
        $a= new ogrenci();
        $b=new User();
        $bolum=new bolum();

        $sorgu=$b->query()->where("pozisyon",1)->get();
        $i=0;
        $array=[];

        foreach ($sorgu as $ogrenci){

            $sorgu2=$a->query()->where("user_id",$ogrenci->id)->get();
            $bolumal=$bolum->query()->where("id",$sorgu2[0]->bolum_ID)->get();
            $bolumal=$bolumal[0];
            $array[$i]=[
                'id'=>$ogrenci->id,
                'name'=>$ogrenci->name,
                'surname'=>$ogrenci->surname,
                'email'=>$ogrenci->email,
                'telefon'=>$ogrenci->tel,
                'resim'=>$sorgu2[0]->resim,
                'ogrenci_no'=>$sorgu2[0]->ogrenci_no,
                'sinif'=>$sorgu2[0]->sinif,
                'bolum'=>$bolumal->bolum_adi,
                ];

            $i++;
        }
        return view("admin/ogrenci",compact("array"));

    }

    public function ogrencisil($id){
        $c=new User();
        $c->where("id",$id)->delete();
        return header("Refresh:0.1;url=/ogrenciler");
    }
}
