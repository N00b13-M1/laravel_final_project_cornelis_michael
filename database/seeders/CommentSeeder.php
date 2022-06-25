<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'comment' => 'Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90\'s letterpress vinyl megging',
            'newspost_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, sed.',
            'newspost_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' => 'Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90\'s letterpress vinyl megging',
            'newspost_id' => 2,
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, recusandae.',
            'newspost_id' => 2,
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' => 'Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90\'s letterpress vinyl megging',
            'newspost_id' => 3,
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, illo?',
            'newspost_id' => 3,
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' => 'Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90\'s letterpress vinyl megging',
            'newspost_id' => 4,
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, ducimus!',
            'newspost_id' => 4,
            'created_at' => now(),
        ]);
    }
}

