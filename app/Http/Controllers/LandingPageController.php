<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Custom\ExchangeRate;
use App\Post;
use App\Like;
use Auth;
class LandingPageController extends Controller
{
    public function getIndex()
    {
    	$posts = Post::all();
        
        return view('index')->withPosts($posts);
    }

    public function getCategory($category)
    {
    	$posts = Post::where('category', $category)->get();
        return view('category',['posts'=>$posts]);
    }

    public function getPost($id)
    {
        $post = Post::find($id);
        $firstPhoto = $post->photos()->first()->url;
        return view('post',['post'=>$post,'firstPhoto'=>$firstPhoto]);

    }
    
    public function getLikePost($id)
    {
        $post = Post::find($id);
        $like = new Like([
            'user_id'=>Auth::user()->id
        ]);
        $post->likes()->save($like);
        return redirect()->back();
    }
}

