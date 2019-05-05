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

    public function getCategory($id)
    {
        return view('category',['rate'=>ExchangeRate::getRates()]);
    }

    public function getPost($id)
    {
        $post = Post::find($id);
        $firstPhoto = $post->photos()->first()->url;
        return view('post',['post'=>$post,'firstPhoto'=>$firstPhoto]);

    }
}

