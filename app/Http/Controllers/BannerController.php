<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        $banner_titles = Schema::getColumnListing('banners');
        $banner_titles = array_slice($banner_titles, 0, 8);
        $banners = Banner::orderBy('primary', 'asc')->get();
        // dd($banners);

        return view('back.pages.banners.all', compact('banners','banner_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.banners.create');
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
			'dropbox' => 'required',
			'description' => 'required',
            'url' => 'required',
            'url_text' => 'required'
		]);

        $banner = New Banner;
        $banner->bg = $request->bg;
        $banner->title = $request->title;
        $banner->dropbox = $request->dropbox;
        $banner->description = $request->description;
        $banner->url = $request->url;
        $banner->url_text = $request->url_text;
        $banner->primary = $request->primary;

        $banner->save();
        return redirect()->route('banners.index')->with("success", "Successfully Added");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        return view('back.pages.banners.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('back.pages.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
			'title' => 'required',
			'dropbox' => 'required',
			'description' => 'required',
            'url' => 'required',
            'url_text' => 'required'
		]);

        $banner->bg = $request->bg;
        $banner->title = $request->title;
        $banner->dropbox = $request->dropbox;
        $banner->description = $request->description;
        $banner->url = $request->url;
        $banner->url_text = $request->url_text;
        $banner->primary = $request->primary;

        // dd($request->primary);
        $oldvalues = Banner::where('primary', 2)->get();
        foreach ($oldvalues as $oldvalue) {
            $oldvalue->primary = 1;
            $oldvalue->save(); # code...
        }

        // dd($oldvalues);

        if($request->primary = 0) {

        }
        // elseif($request->primary = 1) {
        //     $oldvalues = Banner::where('primary', 1)->get();
        //     $oldvalues->primary = 0;
        //     $oldvalues->save();
        // }
        $banner->save();
        // dd($banner);
        return redirect()->route('banners.index')->with("update", "Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('banners.index')->with("delete", "Successfully Deleted");
    }
}
