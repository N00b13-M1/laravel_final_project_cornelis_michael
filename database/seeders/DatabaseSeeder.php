<?php

namespace Database\Seeders;

use App\Models\Newsletter;
use App\Models\Newspost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            BannerSeeder::class,
            ServiceSeeder::class,
            CourseSeeder::class,
            NewsSeeder::class,
            ProfessorSeeder::class,
            AddressSeeder::class,
            EventSeeder::class,
            ContactSeeder::class,
            TagSeeder::class,
            CategorieSeeder::class,
            NewsTagSeeder::class,
            NewsCategorieSeeder::class,
            CourseCategorieSeeder::class,
            NewsletterSeeder::class,
            CommentSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
