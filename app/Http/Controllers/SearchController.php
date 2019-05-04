<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{

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
