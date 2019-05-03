<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    // public function readDatabase(Request $req)
    // {
    //     if($req->get('keyword')){
    //         $keyword = $request->get('keyword');
    //         $results = DB::table('posts')->where('title','LIKE','%{$keyword}%')->get();
    //         $htmlRes = '<ul class="dropdown-menu">';
    //         foreach($results as $result)
    //         {
    //             $results = $results.('<li><a href="#">').$result->title.'</a></li>';
    //         }
    //         $htmlRes.='</ul>';
    //         echo $htmlRes;
    //     }
    // }
    public function readDatabase(Request $req,$key)
    {
        if($key){
            $query = '%'.$key.'%';
            $data = DB::table('posts')->where('title','LIKE',$query)->get();
            return response()->json($data, 200);
        }
        //$data = DB::table('posts')->get();
        //return response()->json($data, 200);
    }
}
