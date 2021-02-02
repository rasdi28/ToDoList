<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('posts','PostController@index');
ROute::get('posts/create','PostController@create');

Route::get('posts/{post:slug}','PostController@show');
ROute::post('posts/store','PostController@store');

Route::get('posts/{post:slug}/edit','PostController@edit');
Route::patch('posts/{post:slug}/edit','PostController@update');
Route::delete('posts/{post:slug}/delete','PostController@destroy');



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
