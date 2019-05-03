<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses'=>'LandingPageController@getIndex',
    'as'=>'index'
]);

Route::get('/about', function () {
    return view('about',['rate'=>1234]);
});
Route::get('/privacy-policy', function () {
    return view('policy',['rate'=>1234]);
});

Route::get('/contact', function () {
    return view('contact',['rate'=>1234]);
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'home','middleware'=>['auth']],function(){
    Route::get('',[
        'uses'=>'HomeController@index',
        'as'=>'home.index'
    ]);
    Route::get('/create',[
        'uses'=>'HomeController@getUserCreate',
        'as'=>'home.create'
    ]);
    Route::post('/create',[
        'uses'=>'HomeController@postUserCreate',
        'as'=>'home.create'
    ]);
    Route::get('/wishes',[
        'uses'=>'HomeController@getWishesList',
        'as'=>'home.wishes'
    ]);
});