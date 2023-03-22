<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OgrenciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ogrenci')->insert([
            'user_id' => "1",
            'ogrenci_no' => "200290008",
            'bolum_id' => "1",
            'sinif' => "3",
            'resim'=>'ogrenci.jpg',
        ]);
        DB::table('ogrenci')->insert([
            'user_id' => "2",
            'ogrenci_no' => "200290009",
            'bolum_id' => "1",
            'sinif' => "2",
            'resim'=>'ogrenci2.jpg',
        ]);
        DB::table('ogrenci')->insert([
            'user_id' => "3",
            'ogrenci_no' => "200295010",
            'bolum_id' => "2",
            'sinif' => "1",
            'resim'=>'ogrenci3.jpg',
        ]);
    }
}
