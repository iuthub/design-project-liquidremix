<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\ExchangeRate;
use App\Post;
class LandingPageController extends Controller
{
    public function getIndex()
    {
    	$posts = Post::all();
    	
        return view('index')->withPosts($posts);
    }
    public function getProduct($id)
    {
        $post = Post::find($id);
        return view('post')->with('post',$post);
    }
    //
}
