<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_news')->insert([
            'news_id' => 1,
            'categorie_id' => 1,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 1,
            'categorie_id' => 2,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 1,
            'categorie_id' => 3,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 1,
            'categorie_id' => 4,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 1,
            'categorie_id' => 5,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 1,
            'categorie_id' => 6,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 2,
            'categorie_id' => 1,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 2,
            'categorie_id' => 2,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 2,
            'categorie_id' => 3,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 2,
            'categorie_id' => 4,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 2,
            'categorie_id' => 5,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 2,
            'categorie_id' => 6,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 3,
            'categorie_id' => 1,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 3,
            'categorie_id' => 2,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 3,
            'categorie_id' => 3,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 3,
            'categorie_id' => 4,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 3,
            'categorie_id' => 5,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 3,
            'categorie_id' => 6,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 4,
            'categorie_id' => 1,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 4,
            'categorie_id' => 2,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 4,
            'categorie_id' => 3,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 4,
            'categorie_id' => 4,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 4,
            'categorie_id' => 5,
            "created_at" => now(),
        ]);
        DB::table('categorie_news')->insert([
            'news_id' => 4,
            'categorie_id' => 6,
            "created_at" => now(),
        ]);
    }
}
