<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorites')->insert([
           'user_id' => 1,
           'bus_stop_id' => 1,
        ]);
    
                DB::table('favorites')->insert([
           'user_id' => 2,
           'bus_stop_id' => 2,
        ]);

        DB::table('favorites')->insert([
           'user_id' => 3,
           'bus_stop_id' => 3,
        ]);

    }
}