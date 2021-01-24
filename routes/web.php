<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/','HomeController');

Route::get('posts','PostController@index');

Route::get('posts/create','PostController@create');
ROute::post('posts/store','PostController@store');

Route::get('posts/{post:slug}','PostController@show');

Route::view('contact','contact');
Route::view('about','about');
ROute::view('login','login');