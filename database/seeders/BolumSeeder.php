<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BolumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bolum')->insert([
            'bolum_adi' => "Yazılım Mühendisliği",
            'fakulte_id' => "1",
        ]);
        DB::table('bolum')->insert([
            'bolum_adi' => "Psikoloji",
            'fakulte_id' => "2",
        ]);
    }
}
