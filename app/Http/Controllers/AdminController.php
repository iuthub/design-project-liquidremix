<?php

namespace App\Http\Controllers;

use App\Custom\ExchangeRate;
use Illuminate\Http\Request;
use App\Post;
class AdminController extends Controller
{

    public function getAdmin(){
        $posts = Post::where('status',0)->get();

        return view('admin.index',['rate'=>ExchangeRate::getRates(),'posts'=>$posts]);
    }

    public function getStatistics(){
        return view('admin.statistics',['rate'=>ExchangeRate::getRates(),'title'=>'Hello World is beautiful']);
    }


}
