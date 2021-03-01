<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::prefix('admin')->group(function(){
    Route::prefix('dashboard')->group(function(){
        Route::get('/','dashboardController@index')->name('dashboard.index');
    });
    Route::prefix('barangmasuk')->group(function(){
        Route::get('/','barangmasukController@index')->name('barangmasuk.index');
    });

});

Route::get('posts','PostController@index')->name('posts.index');


Route::prefix('posts')->middleware('auth')->group(function(){
    ROute::get('create','PostController@create')->name('posts.create');

    ROute::post('store','PostController@store')->name('posts.store');

    Route::get('{post:slug}/edit','PostController@edit');
    Route::patch('{post:slug}/edit','PostController@update');
    Route::delete('{post:slug}/delete','PostController@destroy');


});

Route::get('posts/{post:slug}','PostController@show')->name('posts.show');


Route::view('contact','contact');
Route::view('about','about');
ROute::view('login','login');
Route::get('/belajar/{page}', function($page){
    return "hello , ini adalah halaman belajar route".$page;
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
