<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class TagsandcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        $categories_titles = Schema::getColumnListing('categories');
        $categories_titles = array_slice($categories_titles, 0,2);
        // dd($categories_titles);
        $tags = Tag::all();
        $tags_titles = Schema::getColumnListing('tags');
        $tags_titles = array_slice($tags_titles, 0,2);

        return view('back.pages.tags&categories.all', compact('categories', 'tags', 'categories_titles', 'tags_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_tags()
    {
        return view('back.pages.tags&categories.create_tags');
    }

    public function create_categories()
    {
        return view('back.pages.tags&categories.create_categories');
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
    public function show_tag(Tag $tag)
    {
        return view('back.pages.tags&categories.show_tags');

    }

    public function show_categories (Categorie $categorie)
    {
        return view('back.pages.tags&categories.show_categories');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag, Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag, Categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag, Categorie $categorie)
    {
        //
    }
}
