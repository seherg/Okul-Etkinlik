<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calisan;
use App\Models\User;
class EmployeeController extends Controller
{
    public function calisan(){
        $calis= new calisan();

        $calisanlar=$calis->query()->get();
        $tumcalisanlar=[];
        $i=0;

        foreach ($calisanlar as $calisan){
            $kullanici= new User();
            $calisanimiz=$kullanici->query()->where("id",$calisan->user_id)->get();
            $calisanimiz=$calisanimiz[0];
            $tumcalisanlar[$i]=[
                'calisan_adi'=>$calisanimiz->name,
                'calisan_soyadi'=>$calisanimiz->surname,
                'resim'=>$calisan->resim,
                'gorevi'=>$calisan->gorevi,
                'sorumluluk'=>$calisan->sorumluluk,
            ];
            $i++;
        }
        return view("employee")->with("calisanlar",$tumcalisanlar);
    }
}
