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

Route::get('/contact', [
    'uses'=>'FeedbackController@showForm',
    'as'=>'feedback.form'
]);
Route::get('/post/{id}',[
    'uses'=>'LandingPageController@getPost',
    'as'=>'post.get'
]);
Route::get('/category/{id}',[
    'uses'=>'LandingPageController@getCategory',
    'as'=>'category'
]);
Route::post('/contact',[
    'uses'=>'FeedbackController@saveFeedback',
    'as'=>'feedback.save'
]);

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
    Route::get('/wishes/{id}',[
        'uses'=>'HomeController@getWishesList',
        'as'=>'home.wishes'
    ]);
});
Route::get('/search/{key}', [
    'uses'=>'SearchController@showResultsPage',
    'as'=>'show.results'
]);
