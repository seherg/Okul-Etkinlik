<?php

namespace App\Http\Controllers;

use App\Models\katilim;
use Illuminate\Http\Request;
use App\Models\etkinlik;
use App\Models\gorsel;

class EtkinliklerController extends Controller
{
    public function etkinlik(){
        $etk=new etkinlik();
        $resim=new gorsel();

        $tumetkinlikler=[];
        $i=0;


        $etkinlikler=$etk->query()->get();
        foreach ( $etkinlikler as $etkinlik)
        {
            $gorsel=$resim->query()->where("etkinlik_id",$etkinlik->id)->get();
            $tumetkinlikler[$i]=[
                "etkinlik_adi"=>"$etkinlik->etkinlik_adi",
                "bilgi"=>"$etkinlik->bilgi",
                "kota"=>$etkinlik->kota,
                "baslangic_zamani"=>$etkinlik->baslangic_zamani,
                "bitis_zamani"=>$etkinlik->bitis_zamani,
                "kalkis_noktasi"=>$etkinlik->kalkis_noktasi,
                "resim"=>$gorsel[0]->gorsel_adi,
                "etkinlik_id"=>$etkinlik->id,
            ];
            //$tumetkinlikler[$i]=$i;
            $i++;
        }
        return view("etkinlik")->with("etkinlikler",$tumetkinlikler);
    }
    public function adminetk(){
        $etk=new etkinlik();
        $resim=new gorsel();

        $tumetkinlikler=[];
        $i=0;


        $etkinlikler=$etk->query()->get();
        foreach ( $etkinlikler as $etkinlik)
        {
            $gorsel=$resim->query()->where("etkinlik_id",$etkinlik->id)->get();
            $tumetkinlikler[$i]=[
                "etkinlik_adi"=>"$etkinlik->etkinlik_adi",
                "bilgi"=>"$etkinlik->bilgi",
                "kota"=>$etkinlik->kota,
                "baslangic_zamani"=>$etkinlik->baslangic_zamani,
                "bitis_zamani"=>$etkinlik->bitis_zamani,
                "kalkis_noktasi"=>$etkinlik->kalkis_noktasi,
                "resim"=>$gorsel[0]->gorsel_adi,
                "etkinlik_id"=>$etkinlik->id,
            ];
            //$tumetkinlikler[$i]=$i;
            $i++;
        }
        return view("admin/aktifetkinlikler")->with("etkinlikler",$tumetkinlikler);
    }
    public function etksil($id){
        $a=new etkinlik();
        $a->where("id",$id)->delete();
        header("Refresh:0.1;url=/adminetkinlik");
    }
}
