<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GorselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gorsel')->insert([
            'gorsel_adi' => "somuncubaba7.jpg",
            'etkinlik_id' => "1",
        ]);
        DB::table('gorsel')->insert([
            'gorsel_adi' => "ulucami.jpg",
            'etkinlik_id' => "2",
        ]);
    }
}
