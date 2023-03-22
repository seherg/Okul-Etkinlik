<?php

namespace App\Http\Controllers;

use App\Models\katilim;
use App\Models\User;
use Illuminate\Http\Request;

class KatilimController extends Controller
{
    public function katilimsagla($id,$katilimci_id){
        $kayitol= new katilim();
        $pozisyon=new User();
        $sorgu=$pozisyon->query()->where("id",$katilimci_id)->get();

        $kayitol->katilimci_id=$katilimci_id;
        $kayitol->etkinlik_id=$id;
        $kayitol->katilimci_pozisyon=$sorgu[0]->pozisyon;
        $kayitol->save();
        return header("Refresh:0.1;url=/");


    }
}
