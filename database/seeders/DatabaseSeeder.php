<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(Bus_informationSeeder::class);
        $this->call(Bus_stopSeeder::class);
        $this->call(FavoriteSeeder::class);
    }
}
