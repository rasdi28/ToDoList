<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('posts','PostController@index')->name('posts.index');


Route::prefix('posts')->middleware('auth')->group(function(){
    ROute::get('create','PostController@create')->name('posts.create');

    ROute::post('store','PostController@store');

    Route::get('{post:slug}/edit','PostController@edit');
    Route::patch('{post:slug}/edit','PostController@update');
    Route::delete('{post:slug}/delete','PostController@destroy');


});

Route::get('posts/{post:slug}','PostController@show');

Route::get('categories/{category:slug}','CategoryController@show');

// //Percobaan
// Route::get('users','UserController@index');
// Route::get('users/{slug}','UserController@show');
// //
// //put -> keseluruhan
// //patch -> parsial

// //EduLevel
// Route::get('edulevels','EdulevelController@data');

// //

Route::view('contact','contact');
Route::view('about','about');
ROute::view('login','login');
Route::get('/belajar/{page}', function($page){
    return "hello , ini adalah halaman belajar route".$page;
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
