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
    	
        return view('index',['rate'=>ExchangeRate::getRates()])->withPosts($posts);
    }
    public function getCategory($id)
    {
        return view('category',['rate'=>ExchangeRate::getRates()]);
    }
}