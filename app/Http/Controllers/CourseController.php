<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

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
        $course_titles = array_slice($course_titles, 0, 11);
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
            'url' => 'required',
            'text' => 'required',
		]);

        $course = New Course;
        $course->title = $request->title;
        $course->desc = $request->desc;
        $course->bg = $request->bg;
        $course->teacher_pic = $request->teacher_pic;
        $course->teacher_name = $request->teacher_name;
        $course->price_class = $request->price_class;
        $course->price = $request->price;
        $course->url = $request->url;
        $course->text = $request->text;

        $course->save();
        return redirect()->route('courses.index')->with("success", "Successfully Added");
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
            'url' => 'required',
            // 'favorite' => 'required',
		]);



        $favorites = Course::where('favorite', '=', "Yes")->get();
        // dd($favorites->count());
        if($favorites->count() == 4){
            $course->title = $request->title;
            $course->desc = $request->desc;
            if($request->bg != null) {
            $course->bg = $request->bg;
            }
            if($request->teacher_pic != null) {
            $course->teacher_pic = $request->teacher_pic;
            }
            $course->teacher_name = $request->teacher_name;
            $course->price_class = $request->price_class;
            $course->price = $request->price;
            $course->url = $request->url;
            $course->text = $request->text;
            $course->favorite = "No";
            $course->updated_at = now();

            $course->save();
            return redirect()->route('courses.index')
            ->with("update", "Successfully Updated")
            ->with("fav_max", "Favorite update denied, max 4 favorites");
        }
        else{
            $course->title = $request->title;
            $course->desc = $request->desc;
            if($request->bg != null) {
            $course->bg = $request->bg;
            }
            if($request->teacher_pic != null) {
            $course->teacher_pic = $request->teacher_pic;
            }
            $course->teacher_name = $request->teacher_name;
            $course->price_class = $request->price_class;
            $course->price = $request->price;
            $course->url = $request->url;
            $course->text = $request->text;
            $course->favorite = $request->favorite;
            $course->updated_at = now();

            $course->save();
            return redirect()->route('courses.index')->with("update", "Successfully Updated");
        }





        // dd($course);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with("delete", "Successfully Deleted");
    }
}

