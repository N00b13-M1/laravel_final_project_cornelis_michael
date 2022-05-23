<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Newsletter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;

class NewsletterController extends Controller
{
    public function storeEmail(Request $request)
    {

        Newsletter::create(['email' => $request->email]);

        $mail_controller = new EmailController;
        $subscriber_message = Email::where('action', "MAILINGLIST_SUBSCRIPTION_CUSTOMER")->first();
        $admin_message = Email::where('action', "MAILINGLIST_SUBSCRIBERS_ADMIN")->first();
        if($subscriber_message){
            $mail_controller->sendEmail($subscriber_message->title, $subscriber_message->subject, $subscriber_message->body, $request->email);
        }
        if($admin_message){
            $admins = User::where('role_id', 1)->get();
            foreach ($admins as $admin) {
                $mail_controller->sendEmail($admin_message->title, $admin_message->subject, $admin_message->body, $request->email, '', 'Admin');
            }
        }
    }
}