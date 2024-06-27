<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Bus_stopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bus_stops')->insert([
       'place' => '京都駅前',
       'up_or_down' => '上り',
       'bus_information_id' => 1,
    ]);
        DB::table('bus_stops')->insert([
           'place' => '京都駅前',
           'up_or_down' => '下り',
           'bus_information_id' => 2,
    ]);
        DB::table('bus_stops')->insert([
            'place' => '京都駅前',
            'up_or_down' =>'上り',
            'bus_information_id' => 3,
    ]);
        DB::table('bus_stops')->insert([
            'place' => '京都駅前',
            'up_or_down' => '下り',
            'bus_information_id' => 4,
    ]);
        DB::table('bus_stops')->insert([
            'place' => '京都駅前',
            'up_or_down' => '上り',
            'bus_information_id' => 5,
         ]);
    }
}
