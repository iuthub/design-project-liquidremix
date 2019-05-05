<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\ExchangeRate;
use App\User;
use App\Post;
use App\PostPhoto;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index',['rate'=>ExchangeRate::getRates()]);
    }
    public function getUserCreate()
    {
        return view('home.create',['rate'=>ExchangeRate::getRates()]);
    }
    public function getWishesList()
    {
        return view('home.wishes',['rate'=>ExchangeRate::getRates()]);
    }
    public function postUserCreate(Request $req)
    {
        $this->validate($req,[
            'title' => 'required|min:5',
            'description'=>'required|min:10',
            'file1'=>'image|nullable|max:1500',
            'file2'=>'image|nullable|max:1500',
            'file3'=>'image|nullable|max:1500',
            'file4'=>'image|nullable|max:1500'
        ]);
       
        $post = new Post([
            'title'=>$req->input('title'),
            'category'=>$req->input('category'),
            'description'=>$req->input('description'),
            'price'=>$req->input('price'),
            'status'=>0
        ]);
        Auth::user()->posts()->save($post);
        if($req->hasFile('file1'))
        {
            $path = $req->file('file1')->store('public/files');
            $photo = new PostPhoto([
                'url'=>basename($path)
            ]);
            $post->photos()->save($photo);       
        }
        if($req->hasFile('file2'))
        {
            $path = $req->file('file2')->store('public/files');
            $photo = new PostPhoto([
                'url'=>basename($path)
            ]);
            $post->photos()->save($photo);       
        }
        if($req->hasFile('file3'))
        {
            $path = $req->file('file3')->store('public/files');
            $photo = new PostPhoto([
                'url'=>basename($path)
            ]);
            $post->photos()->save($photo);       
        }
        if($req->hasFile('file4'))
        {
            $path = $req->file('file4')->store('public/files');
            $photo = new PostPhoto([
                'url'=>basename($path)
            ]);
            $post->photos()->save($photo);       
        }
        
            
        return redirect()->route('home.index')
                ->with('info','Ad has been sent to admin for review!');
    }
    public function getCategory($id)
    {
        return view('home.category',['rate'=>ExchangeRate::getRates()]);
    }

}
