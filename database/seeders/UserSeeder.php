<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'name' => 'PersonA',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('molengeek'),
            'profile_pic' => '',
            'user_id'=> 1,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'PersonB',
            'email' => 'professor@gmail.com',
            'password' => Hash::make('molengeek'),
            'profile_pic' => '',
            'user_id'=> 2,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'PersonC',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('molengeek'),
            'profile_pic' => '',
            'user_id'=> 3,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'PersonD',
            'email' => 'member@gmail.com',
            'password' => Hash::make('molengeek'),
            'profile_pic' => '',
            'user_id'=> 4,
            'created_at' => now(),
        ]);
    }
}
