<?php

namespace App\Http\Controllers;

use App\Models\Informationrequest;
use App\Models\Message;
use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::where('professor_id', Auth::user()->id)->orWhere('user_id', Auth::user()->id)->get();
        // $appointments = Informationrequest::where
        $message_titles = Schema::getColumnListing('messages');
        $message_titles = array_slice($message_titles, 0, 4);
        // dd($message_titles);
        return view ('messages', compact('messages', 'message_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function message_submit (Request $request, $id)
    {
        // dd($id);
        $validator = Validator::make($request->all(),[
            // 'name' => 'required',
            // 'email' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/')->with("error", "You didn't add a comment");
        };

        $newmessage = new Message;

        $newmessage->user_id = Auth::user()->id;
        $newmessage->name = $request->name;
        $newmessage->email = $request->email;
        $newmessage->message = $request->message;
        $newmessage->professor_id = Professor::find($id)->user->id;

        $newmessage->save();

        // dd($newmessage);

        return redirect()->back()->with('success', 'Successfully sent Message');
    }

    public function contact_submit (Request $request)
    {
        $validator = Validator::make($request->all(),[
            // 'name' => 'required',
            // 'email' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/')->with("error", "You didn't add a comment");
        };

        $newmessage = new Message;

        $newmessage->user_id = Auth::user()->id;
        $newmessage->name = $request->name;
        $newmessage->email = $request->email;
        $newmessage->message = $request->message;
        $newmessage->professor_id = 1;

        $newmessage->save();

        return redirect()->back()->with('success', 'Successfully sent Message');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}



