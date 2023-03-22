<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FakulteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fakulte')->insert([
            'id' => "1",
            'fakulte_adi' => "Mühendislik",
        ]);
        DB::table('fakulte')->insert([
            'id' => "2",
            'fakulte_adi' => "İnsani ve Sosyal Bilimler",
        ]);
    }
}
