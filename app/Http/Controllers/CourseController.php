<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $course_titles = Schema::getColumnListing('courses');
        $course_titles = array_slice($course_titles, 0, 18);
        // dd($course_titles);

        return view('back.pages.courses.all', compact('courses','course_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.courses.create');
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
			'title' => 'required',
			'desc' => 'required',
			'bg' => 'required',
			'teacher_pic' => 'required',
            'teacher_name' => 'required',
            'price_class' => 'required',
            'price' => 'required',
            'text' => 'required',
		]);

        $course = New Course;
        $course->title = $request->title;
        $course->desc = $request->desc;
        $course->bg = $request->file('bg')->hashName();
        $course->teacher_pic = $request->file('teacher_pic')->hashName();
        $course->bg_2 = $request->file('bg_2')->hashName();
        $course->bg_3 = $request->file('bg_3')->hashName();
        $course->bg_4 = $request->file('bg_4')->hashName();

        // // $pictures =
        // // dd(count($pictures));

        $pictures = collect(['bg', 'teacher_pic', 'bg_2', 'bg_3', 'bg_4']);
        dd($pictures->count());

        for ($i=0; $i < $pictures->count(); $i++) {
            # code...
        }



        $course->teacher_name = $request->teacher_name;
        $course->price_class = $request->price_class;
        $course->price = $request->price;
        $course->text = $request->text;
        $course->starting_date = $request->starting_date ?? '';
        $course->months = $request->months ?? '';
        $course->weeks = $request->weeks ?? '';
        $course->study_level = $request->study_level ?? '';
        $course->discipline = $request->discipline ?? '';
        $favorites = Course::where('favorite', '=', "Yes")->count();
        if($request->favorite == "Yes" && $favorites == 8 ){
            $course->favorite = "No";
            $course->save();
            return redirect()->route('courses.index')
            ->with("success", "Successfully Added")
            ->with("fav_max", "Favorite denied, max 8 favorites");
        }
        else {
        $course->save();
        return redirect()->route('courses.index')->with("success", "Successfully Added");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('back.pages.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('back.pages.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
			'title' => 'required',
			'desc' => 'required',
			// 'bg' => 'required',
			// 'teacher_pic' => 'required',
            'teacher_name' => 'required',
            'price_class' => 'required',
            'price' => 'required',
            // 'favorite' => 'required',
		]);

        $course->title = $request->title;
        $course->desc = $request->desc;
        // if($request->bg != null) {
        //     $course->bg = $request->bg;
        // }
        // if($request->teacher_pic != null) {
        //     $course->teacher_pic = $request->teacher_pic;
        // }
        // $pictures = ['bg', 'teacher_pic', 'bg_2', 'bg_3', 'bg_4'];


        if($request->file('bg')){
            Storage::disk('public')->delete('/assets/images/' . $course->bg);

            $course->bg = $request->file('bg')->hashName();
            $request->file('bg')->storePublicly('/assets/images', 'public');
        }
        else{
            $course->bg = $course->bg;
        }


        if($request->file('teacher_pic')){
            Storage::disk('public')->delete('/assets/images/' . $course->teacher_pic);

            $course->teacher_pic = $request->file('teacher_pic')->hashName();
            $request->file('teacher_pic')->storePublicly('/assets/images', 'public');
        }
        else{
            $course->teacher_pic = $course->teacher_pic;
        }

        if($request->file('bg_2')){
            Storage::disk('public')->delete('/assets/images/' . $course->bg_2);

            $course->bg_2 = $request->file('bg_2')->hashName();
            $request->file('bg_2')->storePublicly('/assets/images', 'public');
        }
        else{
            $course->bg_2 = $course->bg_2;
        }

        if($request->file('bg_3')){
            Storage::disk('public')->delete('/assets/images/' . $course->bg_3);

            $course->bg_3 = $request->file('bg_3')->hashName();
            $request->file('bg_3')->storePublicly('/assets/images', 'public');
        }
        else{
            $course->bg_3 = $course->bg_3;
        }

        if($request->file('bg_4')){
            Storage::disk('public')->delete('/assets/images/' . $course->bg_4);

            $course->bg_4 = $request->file('bg_4')->hashName();
            $request->file('bg_4')->storePublicly('/assets/images', 'public');
        }
        else{
            $course->bg_4 = $course->bg_4;
        }

        $course->teacher_name = $request->teacher_name;
        $course->price_class = $request->price_class;
        $course->price = $request->price;
        $course->text = $request->text;
        $course->starting_date = $course->starting_date;
        $course->months = $course->months;
        $course->weeks = $course->weeks;
        $course->study_level = $course->study_level;
        $course->discipline = $course->discipline;
        $course->updated_at = now();

        $favorites = Course::where('favorite', '=', "Yes")->count();
        // dd($favorites);
        if($request->favorite == "Yes" && $favorites ==8 ){
            $course->favorite = "No";
            $course->save();
            return redirect()->route('courses.index')
            ->with("update", "Successfully Updated")
            ->with("fav_max", "Favorite update denied, max 8 favorites");
        }
        elseif($request->favorite == "No" && $favorites == 4 ){

            $course->favorite = "Yes";
            $course->save();
            return redirect()->route('courses.index')
            ->with("update", "Successfully Updated")
            ->with("fav_min", "Favorite update denied, min 4 favorites");
        }
        else{
            $course->favorite = $request->favorite;
            $course->save();
            return redirect()->route('courses.index')
            ->with("update", "Successfully Updated");
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $favorites = Course::where('favorite', '=', "Yes")->count();
        if($favorites == 4 ) {
            return redirect()->route('courses.index')
            ->with("fav_min", "Delete Denied, min 4 favorites");
        }
        else{
            $course->delete();
            return redirect()->route('courses.index')->with("delete", "Successfully Deleted");
        }
    }
}
