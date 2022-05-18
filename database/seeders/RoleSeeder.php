<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role'=> 'admin',
            'created_at' =>now()
        ]);
        DB::table('roles')->insert([
            'role'=> 'professor',
            'created_at' =>now()
        ]);
        DB::table('roles')->insert([
            'role'=> 'editor',
            'created_at' =>now()
        ]);
        DB::table('roles')->insert([
            'role'=> 'member',
            'created_at' =>now()
        ]);
    }
}
