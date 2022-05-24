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
        DB::table('banners')->insert([
            'bg' => 'page-heading-bg.jpg',
            'title' => 'ALL COURSES',
            'dropbox' => '',
            'description' => 'Salvia next level crucifix pickled heirloom synth',
            'url'=> 'courses-grid.html',
            'url_text' => 'Courses Categories',
            'created_at' =>now(),
        ]);
        DB::table('banners')->insert([
            'bg' => 'events-heading-bg.jpg',
            'title' => 'EVENTS',
            'dropbox' => '',
            'description' => 'Salvia next level crucifix pickled heirloom synth',
            'url'=> 'events-grid.html',
            'url_text' => 'News',
            'created_at' =>now(),
        ]);
        DB::table('banners')->insert([
            'bg' => 'teachers-heading-bg.jpg',
            'title' => 'OUR TEACHERS',
            'dropbox' => '',
            'description' => 'Salvia next level crucifix pickled heirloom synth',
            'url'=> 'our-teachers.html',
            'url_text' => 'Our Teachers',
            'created_at' =>now(),
        ]);
        DB::table('banners')->insert([
            'bg' => 'news-heading-bg.jpg',
            'title' => 'NEWS',
            'dropbox' => '',
            'description' => 'Salvia next level crucifix pickled heirloom synth',
            'url'=> 'grid-news.html',
            'url_text' => 'News',
            'created_at' =>now(),
        ]);
        DB::table('banners')->insert([
            'bg' => 'news-heading-bg.jpg',
            'title' => 'CONTACT US',
            'dropbox' => '',
            'description' => 'Salvia next level crucifix pickled heirloom synth',
            'url'=> 'contact.html',
            'url_text' => 'Contact',
            'created_at' =>now(),
        ]);

    }
}
