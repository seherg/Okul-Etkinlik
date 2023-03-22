<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CalisanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calisan')->insert([
            'user_id' => "4",
            'gorevi' => "muavin",
            'resim' => "calisan5.jpg",
            'sorumluluk'=>"Gerektiğinde yolculara yolculuk esnasında bilgi vermek,Her sefer sonunda aracın temizliğini yapmak, ve sefere hazır duruma getirmekYolculara ikram edilecek malzemeleri hazırlamak."
        ]);
        DB::table('calisan')->insert([
            'user_id' => "5",
            'gorevi' => "muavin",
            'resim' => "calisan3.jpg",
            'sorumluluk'=>"Gerektiğinde yolculara yolculuk esnasında bilgi vermek,Her sefer sonunda aracın temizliğini yapmak, ve sefere hazır duruma getirmekYolculara ikram edilecek malzemeleri hazırlamak."

        ]);
        DB::table('calisan')->insert([
            'user_id' => "6",
            'gorevi' => "şoför",
            'resim' => "calisan4.jpg",
            'sorumluluk'=>"Varılması gereken lokasyona güvenli bir şekilde belirlenen rota üzerinden ulaşım sağlar."
        ]);
        DB::table('calisan')->insert([
            'user_id' => "7",
            'gorevi' => "şoför",
            'resim' => "calisan2.jpg",
            'sorumluluk'=>"Varılması gereken lokasyona güvenli bir şekilde belirlenen rota üzerinden ulaşım sağlar."

        ]);
        DB::table('calisan')->insert([
            'user_id' => "9",
            'gorevi' => "rehber",
            'resim' => "calisan1.jpg",
            'sorumluluk'=>"Seyahat organizasyonlarında gidilecek gezi alanı ile ilgili tura katılanlara eşlik edip, onlara doğru bilgi vermekle yükümlüdür. "
        ]);
        DB::table('calisan')->insert([
            'user_id' => "8",
            'gorevi' => "rehber",
            'resim' => "calisan6.jpg",
            'sorumluluk'=>"Seyahat organizasyonlarında gidilecek gezi alanı ile ilgili tura katılanlara eşlik edip, onlara doğru bilgi vermekle yükümlüdür. "

        ]);
    }
}
