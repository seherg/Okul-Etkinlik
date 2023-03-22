<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ogrenciler
        DB::table('users')->insert([
            'name' => "Firat",
            'surname' => "Arikkan",
            'email' => "firat13@gmail.com",
            'password' => "bitlis13",
            'pozisyon' => "1",
            'tel' => "05252522520",
            ]);
        DB::table('users')->insert([
                'name' => "Omer",
                'surname' => "Aldanma",
                'email' => "omer01@gmail.com",
                'password' => "adana01",
                'pozisyon' => "1",
                'tel' => "05252522521",
            ]);
        DB::table('users')->insert([
            'name' => "Rojin",
            'surname' => "Ipek",
            'email' => "mersin33@gmail.com",
            'password' => "mersin33",
            'pozisyon' => "1",
            'tel' => "05252522522",
        ]);

        //calisanlar
        DB::table('users')->insert([
            'name' => "Ahmet",
            'surname' => "Al",
            'email' => "ahmet15@gmail.com",
            'password' => "burdur15",
            'pozisyon' => "2",
            'tel' => "05252522530",
        ]);
        DB::table('users')->insert([
            'name' => "Mustafa",
            'surname' => "Soy",
            'email' => "ahmet27@gmail.com",
            'password' => "antep27",
            'pozisyon' => "2",
            'tel' => "05252522531",
        ]);
        DB::table('users')->insert([
            'name' => "Ali",
            'surname' => "Gumus",
            'email' => "ali44@gmail.com",
            'password' => "malatya44",
            'pozisyon' => "2",
            'tel' => "05252522532",
        ]);
        DB::table('users')->insert([
            'name' => "Beyza",
            'surname' => "Ata",
            'email' => "beyza29@gmail.com",
            'password' => "gumushane29",
            'pozisyon' => "2",
            'tel' => "05252522533",
        ]);
        DB::table('users')->insert([
            'name' => "Merve",
            'surname' => "Uzun",
            'email' => "merve52@gmail.com",
            'password' => "ordu52",
            'pozisyon' => "2",
            'tel' => "05252522534",
        ]);
        DB::table('users')->insert([
            'name' => "Ayca",
            'surname' => "Teki",
            'email' => "ayca66@gmail.com",
            'password' => "yozgat66",
            'pozisyon' => "2",
            'tel' => "05252522535",
        ]);

        //admin
        DB::table('users')->insert([
            'name' => "Seher",
            'surname' => "Gumusay",
            'email' => "seher44@gmail.com",
            'password' => "malatya44",
            'pozisyon' => "0",
            'tel' => "05555555555",
        ]);
    }
}
