<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mail_subscriptions')->insert([
            'title' => "Mail Subscription",
            'subject' => "Welcome to Educa",
            'action' => "MAILINGLIST_SUBSCRIPTION_CUSTOMER",
            'body' => 'Thank you for subscribeing you will hear form us soon',
        ]);

        DB::table('mail_subscriptions')->insert([
            'title' => "Mail Subscription",
            'subject' => "New subscriber",
            'action' => "MAILINGLIST_SUBSCRIBERS_ADMIN",
            'body' => 'The user with {{ $email }} has subscribed to our mailinglist',
        ]);
    
    }
}
