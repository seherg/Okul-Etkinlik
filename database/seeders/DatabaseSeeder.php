<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            AdminSeeder::class,
            CalisanSeeder::class,
            EtkinlikSeeder::class,
            GorselSeeder::class,
            KatilimSeeder::class,
            FakulteSeeder::class,
            BolumSeeder::class,
            OgrenciSeeder::class,



        ]);
    }
}
