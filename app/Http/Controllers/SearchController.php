<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Categorie;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function search(Request $request){

        if(isset($_GET['query'])){
            $banners = Banner::all();
            $categories = Categorie::all();
            $tags = Tag::all();
            $search_text = $_GET['query'];
            $selections = DB::table('news')->where('title', 'like', '%'.$search_text.'%' )->paginate(4);
            return view('front.pages.news',[
                'news' => $selections,
                'banners' => $banners,
                'categories' => $categories,
                'tags' => $tags,
            ]);
        } else{
            return back();
        }
    }
}

sfwefwfwef
sfsfsdf
