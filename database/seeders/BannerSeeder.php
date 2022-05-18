<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'bg' => 'slidebg-1.jpg',
            'title'=> 'Are you ready to study ?<br>We have the',
            'dropbox' => 'Solution',
            'description' => 'Nunc eget tempor neque. Aenean non ex sed nibh euismod<br>ornare. Nam congue nisi purus, sed luctus risus.',
            'url'=> '#',
            'url_text' => 'Buy now',
            'created_at' =>now(),

        ]);
        DB::table('banners')->insert([
            'bg' => 'slidebg-2.jpg',
            'title' => 'Next year more intresting!<br>Check next',
            'dropbox' => 'Features',
            'description' => 'Nunc eget tempor neque. Aenean non ex sed nibh euismod<br>ornare. Nam congue nisi purus, sed luctus risus.',
            'url'=> '#',
            'url_text' => 'Buy now',
            'created_at' =>now(),
        ]);
    }
}
