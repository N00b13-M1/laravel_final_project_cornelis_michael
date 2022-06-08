<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_tags')->insert([
            'news_id' => 1,
            'tag_id' => 5,
            "created_at" => now(),
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 1,
            'tag_id' => 6,
            "created_at" => now(),
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 1,
            'tag_id' => 7,
            "created_at" => now(),
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 1,
            'tag_id' => 8,
            "created_at" => now(),
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 2,
            'tag_id' => 5,
            "created_at" => now(),
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 2,
            'tag_id' => 6,
            "created_at" => now(),
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 2,
            'tag_id' => 7,
            "created_at" => now(),
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 2,
            'tag_id' => 8,
            "created_at" => now(),
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 3,
            'tag_id' => 1,
            "created_at" => now(),

        ]);
        DB::table('news_tags')->insert([
            'news_id' => 3,
            'tag_id' => 3,
            "created_at" => now(),
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 3,
            'tag_id' => 8,
            "created_at" => now(),
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 3,
            'tag_id' => 9,
            "created_at" => now(),

        ]);
        DB::table('news_tags')->insert([
            'news_id' => 4,
            'tag_id' => 1,
            "created_at" => now(),
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 4,
            'tag_id' => 2,
            "created_at" => now(),
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 4,
            'tag_id' => 5,
            "created_at" => now(),
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 4,
            'tag_id' => 9,
            "created_at" => now(),
        ]);
    }
}
