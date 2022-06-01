<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'title' => 'How to become<br>a Powerful Speaker',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-1.jpg',
            'teacher_pic' => 'teacher-12.jpg',
            'teacher_name' => 'Ernest Byrd',
            'price_class' => 'price-red',
            'price' => '19.99',
            'url' => 'single-course.html',
            'text' => 'N/A',
            'favorite' => "Yes",
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'Electrical &amp; Electronic <br>Engingering',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-2.jpg',
            'teacher_pic' => 'teacher-2.jpg',
            'teacher_name' => 'Ernest Byrd',
            'price_class' => 'price-red',
            'price' => '49.99',
            'url' => 'single-course.html',
            'text' => 'N/A',
            'favorite' => "Yes",
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'How to become<br>a Powerful Speaker',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-3.jpg',
            'teacher_pic' => 'teacher-4.jpg',
            'teacher_name' => 'Ernest Byrd',
            'price_class' => 'price-red',
            'price' => '19.99',
            'url' => 'single-course.html',
            'text' => 'N/A',
            'favorite' => "Yes",
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'What can you do<br>With a Business Degree?',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-4.jpg',
            'teacher_pic' => 'teacher-7.jpg',
            'teacher_name' => 'Ernest Byrd',
            'price_class' => 'price-yellow',
            'price' =>'Free',
            'url' => 'single-course.html',
            'text' => 'N/A',
            'favorite' => "Yes",
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'Fashion buying<br>and Product Management',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-5.jpg',
            'teacher_pic' => 'teacher-12.jpg',
            'teacher_name' => 'Ernest Byrd',
            'price_class' => 'price-red',
            'price' =>'29.99',
            'url' => 'single-course.html',
            'text' => 'N/A',
            // 'favorite' => 1,
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'Fashion buying<br>and Product Management',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-6.jpg',
            'teacher_pic' => 'teacher-2.jpg',
            'teacher_name' => 'Ernest Byrd',
            'price_class' => 'price-red',
            'price' =>'29.99',
            'url' => 'single-course.html',
            'text' => 'N/A',
            // 'favorite' => 1,
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'How to become<br>a Powerful Speaker',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-7.jpg',
            'teacher_pic' => 'teacher-4.jpg',
            'teacher_name' => 'Ernest Byrd',
            'price_class' => 'price-yellow',
            'price' =>'Free',
            'url' => 'single-course.html',
            'text' => 'N/A',
            // 'favorite' => 1,
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'What can you do<br>With a Business Degree?',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-8.jpg',
            'teacher_pic' => 'teacher-7.jpg',
            'teacher_name' => 'Ernest Byrd',
            'price_class' => 'price-yellow',
            'price' =>'Free',
            'url' => 'single-course.html',
            'text' => 'N/A',
            // 'favorite' => 1,
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'Fashion buying<br>and Product Management',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-9.jpg',
            'teacher_pic' => 'teacher-12.jpg',
            'teacher_name' => 'Ernest Byrd',
            'price_class' => 'price-red',
            'price' =>'29.99',
            'url' => 'single-course.html',
            'text' => 'N/A',
            // 'favorite' => 1,
            'created_at' => now(),
        ]);
    }
}


