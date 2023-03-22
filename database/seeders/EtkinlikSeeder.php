<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EtkinlikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etkinlik')->insert([
            'etkinlik_adi' => "Somuncu Baba",
            'bilgi' => "Somuncu Baba kimdir? Anadolu’nun manevi mimarlarındandır. Hacı Bayram-ı Veli Hazretleri başta olmak üzere bir çok talebe yetiştirerek Osmanlı Devleti’nin manevi anlamda büyümesinde ve gelişmesinde büyük katkısı olmuş bir Allah dostudur. “Somuncu Baba“ lakâbıdır. İsmi kaynaklarda; Hamid-i Veli, Şeyh Hamidi Veli, Hamidüddün-i Veli, Hamid Hamideddin-i Veli gibi şekillerde geçmektedir.

Şeyh Hamid-i Veli Somuncu Baba 1331 yılında Kayseri’nin Akçakaya köyünde dünyaya gelmiştir. Babası Anadolu’ya manevi fetih için gelen Horasan erenlerinden Şemsettin Musa Efendi’dir. Osmanlı Padişahlarından Yıldırım Beyazıt Han zamanında yaşayan Hamidi Veli, Peygamber Efendimiz(sav)’in 24. kuşak soyundan asil bir seyyid’dir.",
            'kota' => "35",
            'baslangic_zamani' => "2022-12-31 10:00:00",
            'bitis_zamani' => "2022-12-31 20:00:00",
            'kalkis_noktasi' => "öğretmen evi durağı",
            'etkin'=> "1",

        ]);
        DB::table('etkinlik')->insert([
            'etkinlik_adi' => "Diyarbakır ulu Camii",
            'bilgi' => "Diyarbakır Ulu Camii şehrin merkezinde yer alır. Yapım tarihi kesin olarak bilinmemektedir. MS 639 yılında Müslümanlar tarafından Diyarbakır feth edilmiş ve kentin en büyük kilisesi olan Mar Toma Kilisesi camiye çevrilmiştir. Anadolu’nun en eski camilerindendir. Müslümanlar tarafından 5. Harem-i Şerif (Mukaddes Mabed) olarak bilinir. 1091 yılında esaslı bir onarım geçirmiştir. Plan itibariyle Şam Emeviye Cami’nin Anadolu’ya yansıması olarak yorumlanır. Camiye Diyarbakır’da hüküm sürmüş bütün devletler büyük önem vermiş ve onarmışlardır. Büyük Selçuklu Hükümdarı Melikşah, İnal ve Nisanoğulları, Anadolu Selçuklu Hükümdarı Gıyaseddin Keyhüsrev, Artuklular, Akkoyunlu Hükümdarı Uzun Hasan ve Osmanlı Padişahlarından bir çoğuna ait kitabe ve fermanlar camiinin muhtelif yerlerinde görülmektedir.",
            'kota' => "32",
            'baslangic_zamani' => "2022-01-01 08:00:00",
            'bitis_zamani' => "2022-01-01 22:00:00",
            'kalkis_noktasi' => "üniversite evi önü",
            'etkin'=> "1",
        ]);

    }
}
