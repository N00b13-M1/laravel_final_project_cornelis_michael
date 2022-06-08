<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return vodesc
     */
    public function run()
    {
        DB::table('categories')->insert([
            "category_desc" => "Design",
            'created_at' => now(),
        ]);
        DB::table('categories')->insert([
            "category_desc" => "International",
            'created_at' => now(),
        ]);
        DB::table('categories')->insert([
            "category_desc" => "Learning",
            'created_at' => now(),

        ]);
        DB::table('categories')->insert([
            "category_desc" => "Read",
            'created_at' => now(),
        ]);
        DB::table('categories')->insert([
            "category_desc" => "Education",
            'created_at' => now(),
        ]);
        DB::table('categories')->insert([
            "category_desc" => "Finance",
            'created_at' => now(),
        ]);
    }
}
