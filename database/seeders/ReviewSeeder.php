<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('reviews')->insert([
                'id' => 1,
                'review' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
             DB::table('reviews')->insert([
                'id' => 2,
                'review' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('reviews')->insert([
                'id' => 3,
                'review' => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('reviews')->insert([
                'id' => 4,
                'review' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('reviews')->insert([
                'id' => 5,
                'review' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);

        
    }
}
