<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => 'test',
                'email' => 'test@icloud.com',
                'password' => Hash::make('qwer1234'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
                'name' => 'test',
                'email' => 'test2@icloud.com',
                'password' => Hash::make('qwer1234'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('users')->insert([
                'name' => 'test',
                'email' => 'test3@icloud.com',
                'password' => Hash::make('qwer1234'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
    }
}