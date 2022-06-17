<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Stmt\Catch_;

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
    public function create_tag()
    {
        return view('back.pages.tags&categories.create_tag');
    }

    public function create_category()
    {
        return view('back.pages.tags&categories.create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_tag(Request $request)
    {
        $tag = New Tag;
        $tag->tag_desc = $request->tag_desc;
        $tag->Save();

        return redirect()->route('tagsandcategories.index')->with("success", "Successfully Added");
    }

    public function store_category(Request $request)
    {
        $category = New Categorie;
        $category->category_desc = $request->category_desc;
        $category->Save();

        return redirect()->route('tagsandcategories.index')->with("success", "Successfully Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_tag ($id)
    {
        $tag = Tag::find($id);
        return view('back.pages.tags&categories.show_tag', compact('tag'));

    }

    public function show_category ($id)
    {
        $category = Categorie::find($id);
        return view('back.pages.tags&categories.show_category', compact('category'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_tag ($id)
    {
        $tag = Tag::find($id);
        return view('back.pages.tags&categories.edit_tag', compact('tag'));
    }

    public function edit_category ($id)
    {
        $category = Categorie::find($id);
        return view('back.pages.tags&categories.edit_category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_tag (Request $request, $id)
    {
        $tag = Tag::find($id);
        $tag->tag_desc = $request->tag_desc;

        $tag->save();
        return redirect()->route('tagsandcategories.index')->with("update", "Successfully Updated");
    }

    public function update_category (Request $request, $id)
    {
        $category = Categorie::find($id);
        $category->category_desc = $request->category_desc;

        $category->save();
        return redirect()->route('tagsandcategories.index')->with("update", "Successfully Updated");;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_tag ($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return redirect()->route('tagsandcategories.index')->with("delete", "Successfully Deleted");
    }

    public function destroy_category ($id)
    {
        $category = Categorie::find($id);
        $category->delete();
        return redirect()->route('tagsandcategories.index')->with("delete", "Successfully Deleted");
    }
}

