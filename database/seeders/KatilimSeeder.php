<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KatilimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('katilim')->insert([
            'katilimci_id' => "1",
            'etkinlik_id' => "1",
            'katilimci_pozisyon' => "1",
        ]);
        DB::table('katilim')->insert([
            'katilimci_id' => "2",
            'etkinlik_id' => "1",
            'katilimci_pozisyon' => "1",
        ]);
        DB::table('katilim')->insert([
            'katilimci_id' => "5",
            'etkinlik_id' => "1",
            'katilimci_pozisyon' => "2",
        ]);
        DB::table('katilim')->insert([
            'katilimci_id' => "7",
            'etkinlik_id' => "1",
            'katilimci_pozisyon' => "2",
        ]);

        //diger etkinlik

        DB::table('katilim')->insert([
            'katilimci_id' => "2",
            'etkinlik_id' => "2",
            'katilimci_pozisyon' => "1",
        ]);
        DB::table('katilim')->insert([
            'katilimci_id' => "3",
            'etkinlik_id' => "2",
            'katilimci_pozisyon' => "1",
        ]);
        DB::table('katilim')->insert([
            'katilimci_id' => "6",
            'etkinlik_id' => "2",
            'katilimci_pozisyon' => "2",
        ]);
        DB::table('katilim')->insert([
            'katilimci_id' => "4",
            'etkinlik_id' => "2",
            'katilimci_pozisyon' => "2",
        ]);
    }
}
