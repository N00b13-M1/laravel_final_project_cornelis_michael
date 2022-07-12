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
            'role_id'=> 1,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'PersonB',
            'email' => 'professor@gmail.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 2,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'PersonC',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 3,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'PersonD',
            'email' => 'member@gmail.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 4,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'NICK SMITH',
            'email' => 'nick@smith.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 2,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'JOHN ROSADO',
            'email' => 'john@rosado.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 2,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'SAMUEL DELOSSANTOS',
            'email' => 'samuel@delossantos.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 2,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'JOHN SMITH            ',
            'email' => 'john@smith.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 2,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'ENDRIS FLENDERNO',
            'email' => 'endris@flenderno.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 2,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'MARCOS MARRISON',
            'email' => 'marcos@marrison.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 2,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'ROBERT LANDERSON',
            'email' => 'robert@landerson.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 2,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'ROBERT LANDERSON',
            'email' => 'robert2@landerson.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 2,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'ROBERT LANDERSON',
            'email' => 'robert3@landerson.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 2,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'ROBERT LANDERSON',
            'email' => 'robert4@landerson.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 2,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'ROBERT LANDERSON',
            'email' => 'robert5@landerson.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 2,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'ROBERT LANDERSON',
            'email' => 'robert6@landerson.com',
            'password' => Hash::make('molengeek'),
            'role_id'=> 2,
            'created_at' => now(),
        ]);
    }
}




