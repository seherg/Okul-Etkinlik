<?php

namespace App\Http\Controllers;
use App\Models\bolum;
use App\Models\calisan;
use App\Models\ogrenci;
use App\Models\User;

use Illuminate\Http\Request;

class AcalisanController extends Controller
{
    public function asd(){
        $a= new calisan();
        $b=new User();

        $sorgu=$b->query()->where("pozisyon",2)->get();
        $i=0;
        $array=[];
        foreach ($sorgu as $calisan){
            $sorgu2=$a->query()->where("user_id",$calisan->id)->get();
            $array[$i]=[
                'id'=>$calisan->id,
                'name'=>$calisan->name,
                'surname'=>$calisan->surname,
                'email'=>$calisan->email,
                'telefon'=>$calisan->tel,
                'gorevi'=>$sorgu2[0]->gorevi,
                'resim'=>$sorgu2[0]->resim,
                'sorumluluk'=>$sorgu2[0]->sorumluluk,
            ];
            $i++;
        }
        return view("admin/calisan",compact("array"));

    }
    public function qwe(Request $calisan){
        $c=new User();
        $d=new calisan();

        $c->name=$calisan->name;
        $c->surname=$calisan->surname;
        $c->email=$calisan->email;
        $c->pozisyon=2;
        $c->tel=$calisan->tel;
        $c->save();
        $sorgu=$c->query()->where("email",$calisan->email)->get();

        $d->user_id=$sorgu[0]->id;
        $d->gorevi=$calisan->gorev;
        $d->sorumluluk=$calisan->sorumluluk;
        $d->resim=$calisan->resim;
        $d->save();
        return header("Refresh:0.1;url=/acalisan");
    }
    public function calisansil($id){
        $c=new User();
        $c->where("id",$id)->delete();
        return header("Refresh:0.1;url=/acalisan");
    }

    public function calisanguncellebilgi($id){

            $user=new User();
            $e=new calisan();

            $userdata=$user->query()->where("id",$id)->get();
            $userdata2=$e->query()->where("user_id",$id)->get();
            $userdata=$userdata[0];
            $userdata2=$userdata2[0];

            $calisanbilgileri=[
                'id'=>$userdata->id,
                'ad'=>$userdata->name,
                'soyad'=>$userdata->surname,
                'mail'=>$userdata->email,
                'tel'=>$userdata->tel,
                'resim'=>$userdata2->resim,
                'gorev'=>$userdata2->gorevi,
                'sorumluluk'=>$userdata2->sorumluluk,
            ];

            return view("admin/calisanguncelle")->with("bilgilerim",$calisanbilgileri);

    }
    public function guncelle(Request $guncel){
        $guncelleme= new User();
        $guncelleme2= new calisan();
        if(($guncel->password)==($guncel->password2)) {
            $guncelleme->where("id", $guncel->id)->update([
                'name' => $guncel->first_name,
                'surname' => $guncel->last_name,
                'email' => $guncel->email,
                'tel' => $guncel->phone,

            ]);
            $guncelleme2->where("user_id",$guncel->id)->update([
                'gorevi'=>$guncel->gorevi,
                'sorumluluk'=>$guncel->sorumluluk,
            ]);
        }
        return header("Refresh:0.1;url=/acalisan");


    }
    public function resimguncelle(Request $rguncelle){

        $fotograf=new ogrenci();
        $resim=$rguncelle->resim;
        $resim_adi='ogrenci'.$rguncelle->id.date("Ymdhis").".".$resim->getClientOriginalExtension();
        $resim->move(public_path('image'),$resim_adi);
        $fotograf->where("id",$rguncelle->id)->update(['resim'=>$resim_adi]);


    }

}
