<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    public function readDatabase(Request $req)
    {
        if($req->input('keyword')){
            $keyword = $request->input('keyword');
            $results = DB::table('posts')->where('title','LIKE','%{$keyword}%')->get();
            $htmlRes = '<ul class="dropdown-menu">';
            foreach($results as $result)
            {
                $results = $results.('<li><a href="#">').$result->title.'</a></li>';
            }
            $results.='</ul>';
            echo $results;
        }
    }
}
