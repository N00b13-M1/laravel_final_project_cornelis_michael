<?php

namespace App\Http\Controllers;

use App\Mail\RequestInfoProfessor;
use App\Mail\RequestInfoSubmitter;
use App\Models\Email;
use App\Models\Newsletter;
use App\Models\User;
use App\Models\Informationrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Renderer\Inline\NewlineRenderer;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;
use App\Mail\UserSubscribedMessage;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;


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



    // public function mail(){
    //     Mail::to('michael.cornelis@gmail.com')->send(new UserSubscribedMessage());
	// return back();
    // }



    public function index ()
    {
        $subscribers = Newsletter::all();
        $subscriber_titles = Schema::getColumnListing('newsletters');
        $subscriber_titles = array_slice($subscriber_titles, 0, 2);

        $interests = Informationrequest::all();
        $interest_titles = Schema::getColumnListing('informationrequests');
        // dd($interest_titles);
        $interest_titles = array_slice($interest_titles, 0, 8);

        return view ('back.pages.message-center.all', compact('subscribers', 'subscriber_titles', 'interests', 'interest_titles'));
    }


    public function interest_submit (Request $request) {

        $validator = Validator::make($request->all(),[
            // 'name' => 'required',
            // 'email' => 'required',
            'campus' => 'required|',
            'program' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/')->with("error", "You didn't define a correct campus or program");
        };

        $newinterest = new Informationrequest;

        $newinterest->user_id = Auth::user()->id;
        $newinterest->name = $request->name;
        $newinterest->email = $request->email;

        $newinterest->campus = $request->campus;
        $newinterest->program = $request->program;

        $newinterest->save();

        return redirect()->back()->with('success', 'Successfully sent Info request');

    }

    public function subscribe(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'email' => 'required|unique:newsletters'
        ]);

        // $request->validate([
        //     'email' => 'required|unique:newsletters'
        // ]);

        if ($validator->fails()) {
            return redirect('/')->with("error", "You're already part of the mailinglist, you won't be added again");
        }

        // dd($request);
        $newsletter = New Newsletter();
        $newsletter->email = $request->email;

        $newsletter->save();

        Mail::to($request->email)->send(new UserSubscribedMessage());

        return redirect()->back()->with('success', 'Successfully added to the mailing list');
    }


    public function create_subscriber ()
    {
        return view ('back.pages.message-center.create_subscriber');
    }

    public function create_interest ()
    {
        $users = User::all();
        $professors = User::where('role_id', "2")->get();
        return view ('back.pages.message-center.create_interest', compact('users', 'professors'));
    }

    public function getDetails($id= 0)
    {
        $data = User::find($id);
        // dd($data);
        return response()->json($data);
    }

    public function store_subscriber (Request $request)
    {
        $request->validate([
            'email' => 'required|unique:newsletters'
        ]);

        $newsletter = New Newsletter();
        $newsletter->email = $request->email;

        $newsletter->save();

        return redirect()->route('message-center')->with("success", "Successfully Added");
    }

    public function store_interest (Request $request)
    {
        $validator = Validator::make($request->all(),[
            // 'name' => 'required',
            // 'email' => 'required',
            'campus' => 'required',
            'program' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/')->with("error", "You didn't define a correct campus or program");
        };

        $newinterest = new Informationrequest;

        $newinterest->user_id = User::where('email', $request->email)->first()->id;


        $newinterest->name = $request->name;
        $newinterest->email = $request->email;

        $newinterest->campus = $request->campus;
        $newinterest->program = $request->program;
        $newinterest->date = $request->date;
        $newinterest->time = $request->time;
        $newinterest->professor_email = $request->professor_email;


        $newinterest->save();

        return redirect()->route('message-center')->with('success', 'Successfully sent Info request');
    }

    public function edit_interest ($id)
    {
        $newinterest = Informationrequest::find($id);
        $newinterests = Informationrequest::all();
        // dd($newsletters);
        $users = User::all();
        $professors = User::where('role_id', "2")->get();

        $newinterest = Informationrequest::find($id);
        // dd($newinterest->id);
        $user = $newinterest->user;
        // dd($user);

        return view ('back.pages.message-center.edit_interest', compact('newinterest', 'newinterests', 'users', 'professors', 'user'));
    }



    public function update_interest (Request $request, $id)
    {
        $request->validate([
            'email' => 'required|unique:newsletters',
            'campus' => 'required',
            'program' => 'required',
            'date' => 'required',
            'time' => 'required',
            'professor_email' => 'required',
        ]);


        $newinterest = Informationrequest::find($id);
        // dd($id);

        $newinterest->user_id = User::where('email', $request->email)->first()->id;
        $newinterest->name = $request->name;
        $newinterest->email = $request->email;

        $newinterest->campus = $request->campus;
        $newinterest->program = $request->program;
        $newinterest->date = $request->date;
        $newinterest->time = $request->time;
        $newinterest->professor_email = $request->professor_email;

        $newinterest->update();

        if($newinterest->save()){
            Mail::to($newinterest->email)->send(new RequestInfoSubmitter ($newinterest));

            Mail::to($newinterest->professor_email)->send(new RequestInfoProfessor ($newinterest));
        }



        return redirect()->route('message-center')->with("update", "Successfully Updated");
    }


    public function edit_subscriber ($id)
    {
        $newsletter = Newsletter::find($id);
        // dd($newsletter);
        return view ('back.pages.message-center.edit_subscriber', compact('newsletter'));
    }

    public function update_subscriber (Request $request, $id)
    {
        $request->validate([
            'email' => 'required|unique:newsletters'
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

    public function destroy_interest ($id)
    {
        $newinterest =  Informationrequest::find($id);
        $newinterest->delete();

        return redirect()->back()->with("delete", "Successfully Deleted");

    }
}

