<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use App\Models\Tag;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        $tags = Tag::all();
        $news_titles = Schema::getColumnListing('news');
        $news_titles = array_slice($news_titles, 0, 8);
        return view ('back.pages.news.all', compact('news', 'news_titles', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('back.pages.news.create');
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
			'created_when' => 'required',
            'posted_by' => 'required',
            'number_of_comments' => 'required',
            'title' => 'required',
            'text1' => 'required',
            'strong' => 'required',
            'text2' => 'required',
		]);

        $news = New News;
        $news->img = $request->file('img')->hashName();

        $news->created_when = $request->created_when;
        $news->posted_by = $request->posted_by;
        $news->number_of_comments = $request->number_of_comments;
        $news->title = $request->title;
        $news->text1 = $request->text1;
        $news->strong = $request->strong;
        $news->text2 = $request->text2;

        $news->save();
        $request->file("img")->storePublicly('/assets/images/','public');
        return redirect()->route('news.index')->with("success", "Successfully Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        // dd($news);
        return view ('back.pages.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('back.pages.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
			// 'img' => 'required',
			'created_when' => 'required',
            'posted_by' => 'required',
            'number_of_comments' => 'required',
            'title' => 'required',
            'text1' => 'required',
            'strong' => 'required',
            'text2' => 'required',
		]);

        if($request->file('img')){
            Storage::disk('public')->delete('/assets/images/' . $news->img);

            $news->img = $request->file('img')->hashName();
            $request->file('img')->storePublicly('/assets/images', 'public');
        }
        else{
            $news->img = $news->img;
        }
        $news->created_when = $request->created_when;
        $news->posted_by = $request->posted_by;
        $news->number_of_comments = $request->number_of_comments;
        $news->title = $request->title;
        $news->text1 = $request->text1;
        $news->strong = $request->strong;
        $news->text2 = $request->text2;
        $news->updated_at = now();

        $news->save();
        return redirect()->route('news.index')->with("update", "Successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with("delete", "Successfully Deleted");
    }
}
