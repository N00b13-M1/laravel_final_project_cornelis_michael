<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Profiler\Profile;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user()->role_id != 1) {
            $user = User::find(Auth::user()->id);
            $user_profiles = Schema::getColumnListing('users');
            return view('back.pages.profiles.all', compact('user', 'user_profiles'));
        }
        else {
            $users = User::all();
            // dd($users);
            $user_profiles = Schema::getColumnListing('users');
            return view('back.pages.profiles.all', compact('users', 'user_profiles'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.profiles.create');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, User $user)
    {
        $user = User::find($id);
        return view('back.pages.profiles.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('back.pages.profiles.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
			'name' => 'required',
			'email' => 'required',
            'password' => 'required',
            // 'profile_pic' => 'required',
		]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;



        if($request->file('profile_pic')){
            Storage::disk('public')->delete('/assets/images/' . $user->profile_pic);

            $user->profile_pic = $request->file('profile_pic')->hashName();
            $request->file('profile_pic')->storePublicly('/assets/images', 'public');
        }
        else{
            $user->profile_pic = $user->profile_pic;
        }

        $user->updated_at = now();

        $user->save();

        return redirect()->route('profiles.index')->with("update", "Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('profiles.index')->with("delete", "Successfully Deleted");
    }
}


