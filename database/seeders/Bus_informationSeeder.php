<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Bus_informationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bus_informations')->insert([
            'time' => '14:30:00',
            'destination' => '千本鞍馬口',
            'busnumber' => 205,
            'review_id' => 5,
        ]);
        DB::table('bus_informations')->insert([
            'time' => '13:30:00',
            'destination' => '大徳寺前',
            'busnumber' => 204,
            'review_id' => 4,
        ]);
        DB::table('bus_informations')->insert([
            'time' => '12:30:00',
            'destination' => '下京区総合庁舎前',
            'busnumber' => 12,
            'review_id' => 3,
        ]);
        DB::table('bus_informations')->insert([
            'time' => '11:30:00',
            'destination' => '四条高倉',
            'busnumber' => 9,
            'review_id' => 2,
        ]);
        DB::table('bus_informations')->insert([
            'time' => '10:30:00',
            'destination' => '金閣寺道',
            'busnumber' => 203,
            'review_id' => 1,
        ]);
    }
}
