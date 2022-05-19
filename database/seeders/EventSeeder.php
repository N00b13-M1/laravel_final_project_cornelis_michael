<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'bg-img' => "events-1.jpg",
            'stars' => 5,
            'like' => 68,
            'where' => "Johnny Lane<br>Milwaukee WI 532",
            'when' => "Dec 18 - Dec 28<br>Monday 8am - 12am",
            'circle_txt' => "18<span>Dec</span>",
            'url' => "single-teacher.html",
            'event_name' => "The name of a great<br>band",
            'event_desc' => "Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
            tattooed."
        ]);
        DB::table('events')->insert([
            'bg-img' => "events-2.jpg",
            'stars' => 5,
            'like' => 68,
            'where' => "Johnny Lane<br>Milwaukee WI 532",
            'when' => "Dec 18 - Dec 28<br>Monday 8am - 12am",
            'circle_txt' => "18<span>Dec</span>",
            'url' => "single-teacher.html",
            'event_name' => "Building Blocks – York’s<br>Pension Plan",
            'event_desc' => "Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
            tattooed."
        ]);
        DB::table('events')->insert([
            'bg-img' => "events-3.jpg",
            'stars' => 5,
            'like' => 68,
            'where' => "Johnny Lane<br>Milwaukee WI 532",
            'when' => "Dec 18 - Dec 28<br>Monday 8am - 12am",
            'circle_txt' => "18<span>Dec</span>",
            'url' => "single-teacher.html",
            'event_name' => "Filming Objects And<br>Sculpture",
            'event_desc' => "Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
            tattooed."
        ]);
        DB::table('events')->insert([
            'bg-img' => "events-4.jpg",
            'stars' => 5,
            'like' => 68,
            'where' => "Johnny Lane<br>Milwaukee WI 532",
            'when' => "Dec 18 - Dec 28<br>Monday 8am - 12am",
            'circle_txt' => "18<span>Dec</span>",
            'url' => "single-teacher.html",
            'event_name' => "Filming Objects And<br>Projects",
            'event_desc' => "Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
            tattooed."
        ]);
        DB::table('events')->insert([
            'bg-img' => "events-5.jpg",
            'stars' => 5,
            'like' => 68,
            'where' => "Johnny Lane<br>Milwaukee WI 532",
            'when' => "Dec 18 - Dec 28<br>Monday 8am - 12am",
            'circle_txt' => "18<span>Dec</span>",
            'url' => "single-teacher.html",
            'event_name' => "Public and Patient Involvment<br>Health Research",
            'event_desc' => "Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
            tattooed."
        ]);
        DB::table('events')->insert([
            'bg-img' => "events-6.jpg",
            'stars' => 5,
            'like' => 68,
            'where' => "Johnny Lane<br>Milwaukee WI 532",
            'when' => "Dec 18 - Dec 28<br>Monday 8am - 12am",
            'circle_txt' => "18<span>Dec</span>",
            'url' => "single-teacher.html",
            'event_name' => "Balancing Economic and<br>transformation",
            'event_desc' => "Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
            tattooed."
        ]);
        DB::table('events')->insert([
            'bg-img' => "events-7.jpg",
            'stars' => 5,
            'like' => 68,
            'where' => "Johnny Lane<br>Milwaukee WI 532",
            'when' => "Dec 18 - Dec 28<br>Monday 8am - 12am",
            'circle_txt' => "18<span>Dec</span>",
            'url' => "single-teacher.html",
            'event_name' => "Suad Amiry and Susan Abulhawa<br>in corvesation",
            'event_desc' => "Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
            tattooed."
        ]);
        DB::table('events')->insert([
            'bg-img' => "events-8.jpg",
            'stars' => 5,
            'like' => 68,
            'where' => "Johnny Lane<br>Milwaukee WI 532",
            'when' => "Dec 18 - Dec 28<br>Monday 8am - 12am",
            'circle_txt' => "18<span>Dec</span>",
            'url' => "single-teacher.html",
            'event_name' => "Flu Shots for Employees:<br>Manhattanville",
            'event_desc' => "Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
            tattooed."
        ]);
        DB::table('events')->insert([
            'bg-img' => "events-9.jpg",
            'stars' => 5,
            'like' => 68,
            'where' => "Johnny Lane<br>Milwaukee WI 532",
            'when' => "Dec 18 - Dec 28<br>Monday 8am - 12am",
            'circle_txt' => "18<span>Dec</span>",
            'url' => "single-teacher.html",
            'event_name' => "The Healthy Dancer Balance<br>On &amp; Off stage",
            'event_desc' => "Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
            tattooed."
        ]);

    }
}

