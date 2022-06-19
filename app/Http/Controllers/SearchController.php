<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function search(Request $request){

        if(isset($_GET['query'])){
            $search_text = $_GET['query'];
            $selections = DB::table('news')->where('text1', 'like', '% .$search_text. %' );
            return view('front.partials.news-search',[
                'selections' => $selections,
            ]);
        } else{
            return view('front.frontend');
        }
    }
}

