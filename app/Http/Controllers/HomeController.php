<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\ExchangeRate;
use App\User;
use App\Post;
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
        ]);
        $post = new Post([
            'title'=>$req->input('title'),
            'category'=>$req->input('category'),
            'description'=>$req->input('description')
        ]);
        Auth::user()->posts()->save($post);
            
        return redirect()->route('home.index')
                ->with('info','Ad has been sent to admin for review!');
    }

}
