<?php
namespace App\Http\Controllers;

use App\Models\gorsel;
use Illuminate\Http\Request;
use App\Models\etkinlik;
class HomeController extends Controller
{

    public function etkinlik()
    {
        $ilan= new etkinlik();
        $etknlk=$ilan->query()->where("etkin",1)->get();
        $etknlkarray=[

        ];
        $i=0;
        foreach ($etknlk as $ilanresmi){

            $ilanresim=new gorsel();
            $sorgu=$ilanresim->query()->where("etkinlik_id",$ilanresmi->id)->get();
            $etknlkarray[$i]=[
                'etkinlik_ad'=>$ilanresmi->etkinlik_adi,
                'etkinlik_resmi'=>$sorgu[0]->gorsel_adi,
            ];


            $i++;
        }





        return view("welcome")->with("ilan",$etknlkarray);


    }
}
