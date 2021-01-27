<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/','HomeController');

Route::get('posts','PostController@index');
Route::get('posts/{post:slug}','PostController@show');

Route::get('posts/create','PostController@create');
ROute::post('posts/store','PostController@store');

Route::get('posts/{post:slug}/edit','PostController@edit');
Route::patch('posts/{post:slug}/edit','PostController@update');

Route::delete('posts/{post:slug}/delete','PostController@destroy');


//Percobaan
Route::get('users','UserController@index');
Route::get('users/{slug}','UserController@show');
//
//put -> keseluruhan
//patch -> parsial


Route::view('contact','contact');
Route::view('about','about');
ROute::view('login','login');