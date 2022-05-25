<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professors')->insert(
            [
            'professor_photo' => 'teacher-12.jpg',
            'professor_name' => 'Nick Smith',
            'professor_title' => 'Physic Teacher',
            'url' => 'single-teacher.html',
            'text1' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.',
            'textstrong' => 'Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.
            ',
            'text2' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.

            Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney\'s stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.',
            'phone' => '910-213-7887',
            'email' => 'nick@smith.com',
            'skype_id' => 'nicksmith1',
            'facebook_id' => 'nicksmith1',
            'twitter_id' => 'nicksmith1',
            'dribble_id' => 'nicksmith1',
            'linkedin_id' => 'nicksmith1',
            'created_at' => now()
        ]);
        DB::table('professors')->insert([
            'professor_photo' => 'teacher-2.jpg',
            'professor_name' => 'John Rosado',
            'professor_title' => 'English Teacher',
            'url' => 'single-teacher.html',
            'text1' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.',
            'textstrong' => 'Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.
            ',
            'text2' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.

            Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney\'s stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.',
            'phone' => '910-213-7888',
            'email' => 'john@rosado.com',
            'skype_id' => 'johnrosado1',
            'facebook_id' => 'johnrosado1',
            'twitter_id' => 'johnrosado1',
            'dribble_id' => 'johnrosado1',
            'linkedin_id' => 'johnrosado1',
            'created_at' => now()
        ]);
        DB::table('professors')->insert([
            'professor_photo' => 'teacher-4.jpg',
            'professor_name' => 'Maria Lehmann',
            'professor_title' => 'Design Teacher',
            'url' => 'single-teacher.html',
            'text1' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.',
            'textstrong' => 'Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.
            ',
            'text2' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.

            Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney\'s stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.',
            'phone' => '910-213-7889',
            'email' => 'maria@lehmann.com',
            'skype_id' => 'marialehmann1',
            'facebook_id' => 'marialehmann1',
            'twitter_id' => 'marialehmann1',
            'dribble_id' => 'marialehmann1',
            'linkedin_id' => 'marialehmann1',
            'created_at' => now()
        ]);
        DB::table('professors')->insert([
            'professor_photo' => 'teacher-7.jpg',
            'professor_name' => 'Samuelles Delossantos',
            'professor_title' => 'Design Teacher',
            'url' => 'single-teacher.html',
            'text1' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.',
            'textstrong' => 'Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.
            ',
            'text2' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.

            Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney\'s stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.',
            'phone' => '910-213-7890',
            'email' => 'samuel@delossantos.com',
            'skype_id' => 'samueldelossantos1',
            'facebook_id' => 'samueldelossantos1',
            'twitter_id' => 'samueldelossantos1',
            'dribble_id' => 'samueldelossantos1',
            'linkedin_id' => 'samueldelossantos1',
            'created_at' => now()
        ]);
        DB::table('professors')->insert(
            [
            'professor_photo' => 'teacher-12.jpg',
            'professor_name' => 'Nick Smith',
            'professor_title' => 'Physic Teacher',
            'url' => 'single-teacher.html',
            'text1' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.',
            'textstrong' => 'Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.
            ',
            'text2' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.

            Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney\'s stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.',
            'phone' => '910-213-7887',
            'email' => 'nick@smith.com',
            'skype_id' => 'nicksmith1',
            'facebook_id' => 'nicksmith1',
            'twitter_id' => 'nicksmith1',
            'dribble_id' => 'nicksmith1',
            'linkedin_id' => 'nicksmith1',
            'created_at' => now()
        ]);
        DB::table('professors')->insert([
            'professor_photo' => 'teacher-2.jpg',
            'professor_name' => 'John Rosado',
            'professor_title' => 'English Teacher',
            'url' => 'single-teacher.html',
            'text1' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.',
            'textstrong' => 'Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.
            ',
            'text2' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.

            Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney\'s stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.',
            'phone' => '910-213-7888',
            'email' => 'john@rosado.com',
            'skype_id' => 'johnrosado1',
            'facebook_id' => 'johnrosado1',
            'twitter_id' => 'johnrosado1',
            'dribble_id' => 'johnrosado1',
            'linkedin_id' => 'johnrosado1',
            'created_at' => now()
        ]);
        DB::table('professors')->insert([
            'professor_photo' => 'teacher-4.jpg',
            'professor_name' => 'Maria Lehmann',
            'professor_title' => 'Design Teacher',
            'url' => 'single-teacher.html',
            'text1' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.',
            'textstrong' => 'Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.
            ',
            'text2' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.

            Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney\'s stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.',
            'phone' => '910-213-7889',
            'email' => 'maria@lehmann.com',
            'skype_id' => 'marialehmann1',
            'facebook_id' => 'marialehmann1',
            'twitter_id' => 'marialehmann1',
            'dribble_id' => 'marialehmann1',
            'linkedin_id' => 'marialehmann1',
            'created_at' => now()
        ]);
        DB::table('professors')->insert([
            'professor_photo' => 'teacher-7.jpg',
            'professor_name' => 'Samuelles Delossantos',
            'professor_title' => 'Design Teacher',
            'url' => 'single-teacher.html',
            'text1' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.',
            'textstrong' => 'Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.
            ',
            'text2' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.

            Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney\'s stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.',
            'phone' => '910-213-7890',
            'email' => 'samuel@delossantos.com',
            'skype_id' => 'samueldelossantos1',
            'facebook_id' => 'samueldelossantos1',
            'twitter_id' => 'samueldelossantos1',
            'dribble_id' => 'samueldelossantos1',
            'linkedin_id' => 'samueldelossantos1',
            'created_at' => now()
        ]);
        DB::table('professors')->insert(
            [
            'professor_photo' => 'teacher-12.jpg',
            'professor_name' => 'Nick Smith',
            'professor_title' => 'Physic Teacher',
            'url' => 'single-teacher.html',
            'text1' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.',
            'textstrong' => 'Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.
            ',
            'text2' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.

            Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney\'s stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.',
            'phone' => '910-213-7887',
            'email' => 'nick@smith.com',
            'skype_id' => 'nicksmith1',
            'facebook_id' => 'nicksmith1',
            'twitter_id' => 'nicksmith1',
            'dribble_id' => 'nicksmith1',
            'linkedin_id' => 'nicksmith1',
            'created_at' => now()
        ]);
        DB::table('professors')->insert([
            'professor_photo' => 'teacher-2.jpg',
            'professor_name' => 'John Rosado',
            'professor_title' => 'English Teacher',
            'url' => 'single-teacher.html',
            'text1' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.',
            'textstrong' => 'Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.
            ',
            'text2' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.

            Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney\'s stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.',
            'phone' => '910-213-7888',
            'email' => 'john@rosado.com',
            'skype_id' => 'johnrosado1',
            'facebook_id' => 'johnrosado1',
            'twitter_id' => 'johnrosado1',
            'dribble_id' => 'johnrosado1',
            'linkedin_id' => 'johnrosado1',
            'created_at' => now()
        ]);
        DB::table('professors')->insert([
            'professor_photo' => 'teacher-4.jpg',
            'professor_name' => 'Maria Lehmann',
            'professor_title' => 'Design Teacher',
            'url' => 'single-teacher.html',
            'text1' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.',
            'textstrong' => 'Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.
            ',
            'text2' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.

            Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney\'s stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.',
            'phone' => '910-213-7889',
            'email' => 'maria@lehmann.com',
            'skype_id' => 'marialehmann1',
            'facebook_id' => 'marialehmann1',
            'twitter_id' => 'marialehmann1',
            'dribble_id' => 'marialehmann1',
            'linkedin_id' => 'marialehmann1',
            'created_at' => now()
        ]);
        DB::table('professors')->insert([
            'professor_photo' => 'teacher-7.jpg',
            'professor_name' => 'Samuelles Delossantos',
            'professor_title' => 'Design Teacher',
            'url' => 'single-teacher.html',
            'text1' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.',
            'textstrong' => 'Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.
            ',
            'text2' => 'Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90\'s farm-to-table locavore seitan McSweeney\'s.

            Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney\'s stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.',
            'phone' => '910-213-7890',
            'email' => 'samuel@delossantos.com',
            'skype_id' => 'samueldelossantos1',
            'facebook_id' => 'samueldelossantos1',
            'twitter_id' => 'samueldelossantos1',
            'dribble_id' => 'samueldelossantos1',
            'linkedin_id' => 'samueldelossantos1',
            'created_at' => now()
        ]);

    }
}

