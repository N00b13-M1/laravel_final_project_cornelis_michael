<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professors = Professor::all();
        $professor_titles = Schema::getColumnListing('professors');
        $professor_titles = array_slice($professor_titles, 0,14);
        // dd($professor_titles);
        return view('back.pages.professors.all', compact('professors', 'professor_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.professors.create');
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
			'professor_photo' => 'required',
			'professor_name' => 'required',
			'professor_title' => 'required',
            'text1' => 'required',
            'textstrong' => 'required',
            'text2' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'skype_id' => 'required',
            'facebook_id' => 'required',
            'twitter_id' => 'required',
            'drible_id' => 'required',
            'linkedin_id' => 'required',
		]);

        $professor = New Professor;
        $professor->professor_photo = $request->professor_photo;
        $professor->professor_name = $request->professor_name;
        $professor->professor_title = $request->professor_title;
        $professor->text1 = $request->text1;
        $professor->textstrong = $request->textstrong;
        $professor->text2 = $request->text2;
        $professor->phone = $request->phone;
        $professor->email = $request->email;
        $professor->skype_id = $request->skype_id;
        $professor->facebook_id = $request->facebook_id;
        $professor->twitter_id = $request->twitter_id;
        $professor->drible_id = $request->drible_id;
        $professor->linkedin_id = $request->linkedin_id;

        $professor->save();
        return redirect()->route('professors.index')->with("success", "Successfully Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show(Professor $professor)
    {
        return view('back.pages.professors.show', compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $professor)
    {
        return view('back.pages.professors.edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $professor)
    {
        $validated = $request->validate([
			'professor_photo' => 'required',
			'professor_name' => 'required',
			'professor_title' => 'required',
            'text1' => 'required',
            'textstrong' => 'required',
            'text2' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'skype_id' => 'required',
            'facebook_id' => 'required',
            'twitter_id' => 'required',
            'drible_id' => 'required',
            'linkedin_id' => 'required',
		]);


        $professor->professor_photo = $request->professor_photo;
        $professor->professor_name = $request->professor_name;
        $professor->professor_title = $request->professor_title;
        $professor->text1 = $request->text1;
        $professor->textstrong = $request->textstrong;
        $professor->text2 = $request->text2;
        $professor->phone = $request->phone;
        $professor->email = $request->email;
        $professor->skype_id = $request->skype_id;
        $professor->facebook_id = $request->facebook_id;
        $professor->twitter_id = $request->twitter_id;
        $professor->drible_id = $request->drible_id;
        $professor->linkedin_id = $request->linkedin_id;
        $professor->updated_at = now();

        $professor->save();
        return redirect()->route('professors.index')->with("update", "Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professor $professor)
    {
        $professor->delete();
        return redirect()->route('professors.index')->with("delete", "Successfully Deleted");
    }
}

