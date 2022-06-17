<?php

namespace App\Http\Controllers;

use App\Events\UserSubscribed;
use App\Models\Email;
use App\Models\Newsletter;
use App\Models\NewsTag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Renderer\Inline\NewlineRenderer;
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

    public function index ()
    {
        $subscribers = Newsletter::all();
        $subscriber_titles = Schema::getColumnListing('newsletters');
        $subscriber_titles = array_slice($subscriber_titles, 0, 2);
        // dd($subscriber_titles);
        return view ('back.pages.message-center.all', compact('subscribers', 'subscriber_titles'));
    }

    public function subscribe(Request $request)
    {

        $request->validate([
            'email' => 'required'
        ]);

        $newsletter = New Newsletter();
        $newsletter->email = $request->email;

        $newsletter->save();

        return back();
    }

    public function create_subscriber ()
    {
        return view ('back.pages.message-center.create_subscriber');
    }

    public function store_subscriber (Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);

        $newsletter = New Newsletter();
        $newsletter->email = $request->email;

        $newsletter->save();

        return redirect()->route('message-center')->with("success", "Successfully Added");
    }

    public function edit_subscriber ($id, Request $request)
    {
        $newsletter = Newsletter::find($id);
        // dd($newsletter);
        return view ('back.pages.message-center.edit_subscriber', compact('newsletter'));
    }

    public function update_subscriber (Request $request, $id)
    {
        $request->validate([
            'email' => 'required'
        ]);

        $newsletter = Newsletter::find($id);

        $newsletter->email = $request->email;
        $newsletter->save();

        return redirect()->route('message-center')->with("update", "Successfully Updated");
    }

    public function destroy_subscriber ($id)
    {
        // dd('test');
        $newsletter = Newsletter::find($id);
        // dd($id);
        $newsletter->delete();

        return redirect()->back()->with("delete", "Successfully Deleted");

    }
}
