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
            'bg_2' => 'course-slider-2.jpeg',
            'bg_3' => 'course-slider-3.jpeg',
            'bg_4' => 'course-slider-4.jpeg',
            'teacher_pic' => 'teacher-12.jpg',
            // 'teacher_name' => 'Ernest Byrd',
            "user_id" => 5,
            'price_class' => 'price-red',
            'price' => '19.99',
            'text' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            <br><br>
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'starting_date' => '2015-11-14',
            'months' => 1,
            'weeks' => 4,
            'study_level' => "Post Graduate",
            'discipline' => "Public Speaking",
            'favorite' => "Yes",
            'status' => true,
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'Electrical &amp; Electronic <br>Engineering',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-2.jpg',
            'bg_2' => 'course-slider-2.jpeg',
            'bg_3' => 'course-slider-3.jpeg',
            'bg_4' => 'course-slider-4.jpeg',
            'teacher_pic' => 'teacher-2.jpg',
            // 'teacher_name' => 'Ernest Byrd',
            "user_id" => 5,
            'price_class' => 'price-red',
            'price' => '49.99',
            'text' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            <br><br>
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'starting_date' => '2022-01-14',
            'months' => 6,
            'weeks' => 24,
            'study_level' => "Undergrad",
            'discipline' => "Engineering",
            'favorite' => "Yes",
            'status' => true,
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'How to become<br>a Powerful Speaker',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-3.jpg',
            'bg_2' => 'course-slider-2.jpeg',
            'bg_3' => 'course-slider-3.jpeg',
            'bg_4' => 'course-slider-4.jpeg',
            'teacher_pic' => 'teacher-4.jpg',
            // 'teacher_name' => 'Ernest Byrd',
            "user_id" => 5,
            'price_class' => 'price-red',
            'price' => '19.99',
            'text' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            <br><br>
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'starting_date' => '2022-11-14',
            'months' => 1,
            'weeks' => 4,
            'study_level' => "Post Graduate",
            'discipline' => "Public Speaking",
            'favorite' => "Yes",
            'status' => true,
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'What can you do<br>With a Business Degree?',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-4.jpg',
            'bg_2' => 'course-slider-2.jpeg',
            'bg_3' => 'course-slider-3.jpeg',
            'bg_4' => 'course-slider-4.jpeg',
            'teacher_pic' => 'teacher-7.jpg',
            // 'teacher_name' => 'Ernest Byrd',
            "user_id" => 5,
            'price_class' => 'price-yellow',
            'price' =>'Free',
            'text' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            <br><br>
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'starting_date' => '2022-09-14',
            'months' => 6,
            'weeks' => 24,
            'study_level' => "Graduate",
            'discipline' => "Management & Business",
            'favorite' => "Yes",
            'status' => true,
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'Fashion buying<br>and Product Management',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-5.jpg',
            'bg_2' => 'course-slider-2.jpeg',
            'bg_3' => 'course-slider-3.jpeg',
            'bg_4' => 'course-slider-4.jpeg',
            'teacher_pic' => 'teacher-12.jpg',
            // 'teacher_name' => 'Ernest Byrd',
            "user_id" => 5,
            'price_class' => 'price-red',
            'price' =>'29.99',
            'text' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            <br><br>
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'starting_date' => '2022-10-04',
            'months' => 3,
            'weeks' => 12,
            'study_level' => "Professional Certification",
            'discipline' => "Marketing",
            // 'favorite' => 1,
            'status' => true,
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'Fashion buying<br>and Product Management',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-6.jpg',
            'bg_2' => 'course-slider-2.jpeg',
            'bg_3' => 'course-slider-3.jpeg',
            'bg_4' => 'course-slider-4.jpeg',
            'teacher_pic' => 'teacher-2.jpg',
            // 'teacher_name' => 'Ernest Byrd',
            "user_id" => 5,
            'price_class' => 'price-red',
            'price' =>'29.99',
            'text' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            <br><br>
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'starting_date' => '2022-11-04',
            'months' => 3,
            'weeks' => 12,
            'study_level' => "Professional Certification",
            'discipline' => "Marketing",
            // 'favorite' => 1,
            'status' => true,
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'How to become<br>a Powerful Speaker',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-7.jpg',
            'bg_2' => 'course-slider-2.jpeg',
            'bg_3' => 'course-slider-3.jpeg',
            'bg_4' => 'course-slider-4.jpeg',
            'teacher_pic' => 'teacher-4.jpg',
            // 'teacher_name' => 'Ernest Byrd',
            "user_id" => 5,
            'price_class' => 'price-yellow',
            'price' =>'Free',
            'text' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            <br><br>
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'starting_date' => '2015-12-14',
            'months' => 1,
            'weeks' => 4,
            'study_level' => "Post Graduate",
            'discipline' => "Public Speaking",
            // 'favorite' => 1,
            'status' => true,
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'What can you do<br>With a Business Degree?',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-8.jpg',
            'bg_2' => 'course-slider-2.jpeg',
            'bg_3' => 'course-slider-3.jpeg',
            'bg_4' => 'course-slider-4.jpeg',
            'teacher_pic' => 'teacher-7.jpg',
            "user_id" => 5,
            'price_class' => 'price-yellow',
            'price' =>'Free',
            'text' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            <br><br>
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'starting_date' => '2022-11-14',
            'months' => 6,
            'weeks' => 24,
            'study_level' => "Graduate",
            'discipline' => "Management & Business",
            // 'favorite' => 1,
            'status' => true,
            'created_at' => now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'Fashion buying<br>and Product Management',
            'desc' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',
            'bg' => 'course-9.jpg',
            'bg_2' => 'course-slider-2.jpeg',
            'bg_3' => 'course-slider-3.jpeg',
            'bg_4' => 'course-slider-4.jpeg',
            'teacher_pic' => 'teacher-12.jpg',
            // 'teacher_name' => 'Ernest Byrd',
            "user_id" => 5,
            'price_class' => 'price-red',
            'price' =>'29.99',
            'text' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            <br><br>
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'starting_date' => '2022-11-04',
            'months' => 3,
            'weeks' => 12,
            'study_level' => "Professional Certification",
            'discipline' => "Marketing",
            // 'favorite' => 1,
            'status' => true,
            'created_at' => now(),
        ]);
    }
}

