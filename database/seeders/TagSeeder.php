<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'tag_desc' => "Photography",
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tag_desc' => "Design",
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tag_desc' => "Evanto",
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tag_desc' => "Course",
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tag_desc' => "Education",
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tag_desc' => "College",
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tag_desc' => "Teachers",
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tag_desc' => "Read",
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'tag_desc' => "Excursions",
            'created_at' => now(),
        ]);
    }
}


