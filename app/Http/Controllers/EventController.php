<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $event_titles = Schema::getColumnListing('events');
        $event_titles = array_slice($event_titles, 0, 10);
        // dd($event_titles);
        return view ('back.pages.events.all', compact('events', 'event_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
			'img' => 'required',
			'stars' => 'required',
			'likes' => 'required',
			'where' => 'required',
            'when' => 'required',
            'circle_txt' => 'required',
            'link' => 'required',
            'event_name' => 'required',
            'event_desc' => 'required'
		]);

        $event = New Event;
        $event->img = $request->img;
        $event->stars = $request->stars;
        $event->likes = $request->likes;
        $event->where = $request->where;
        $event->when = $request->when;
        $event->circle_txt = $request->circle_txt;
        $event->link = $request->link;
        $event->event_name = $request->event_name;
        $event->event_desc = $request->event_desc;

        $event->save();
        return redirect()->route('events.index')->with("success", "Successfully Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view ('back.pages.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('back.pages.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        // $validated = $request->validate([
		// 	'img' => 'required',
		// 	'stars' => 'required',
		// 	'likes' => 'required',
		// 	'where' => 'required',
        //     'when' => 'required',
        //     'circle_txt' => 'required',
        //     >link' => 'required',
        //     'event_name' => 'required',
        //     'event_desc' => 'required'
		// ]);

        $event->img = $request->img;
        $event->stars = $request->stars;
        $event->likes = $request->likes;
        $event->where = $request->where;
        $event->when = $request->when;
        $event->circle_txt = $request->circle_txt;
        $event->link = $request->link;
        $event->event_name = $request->event_name;
        $event->event_desc = $request->event_desc;

        $event->save();

        return redirect()->route('events.index')->with("update", "Successfully Updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with("delete", "Successfully Deleted");

    }
}


