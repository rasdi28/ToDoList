<?php

use App\Http\Controllers\barangMasukController;
use App\Http\Controllers\categoryController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::prefix('admin')->group(function(){
    Route::prefix('dashboard')->group(function(){
        Route::get('/','dashboardController@index')->name('dashboard.index');
    });
    Route::prefix('barangmasuk')->group(function(){
        Route::get('/','barangMasukController@index')->name('barangmasuk.index');
        Route::get('/create','barangMasukController@create')->name('barangmasuk.create');
        Route::post('/','barangMasukController@store')->name('barangmasuk.store');
        Route::get('/show/{id}','barangMasukController@show')->name('barangmasuk.show');
        Route::get('/edit/{id}','barangMasukController@edit')->name('barangmasuk.edit');
        Route::put('/update/{id}','barangMasukController@update')->name('barangmasuk.update');
        Route::delete('delete/{id}','barangMasukController@destroy')->name('barangmasuk.destroy');
        Route::get('/cetakkartu','barangMasukController@cetakkartu')->name('barangmasuk.cetakkartu');
        Route::get('/print','barangMasukController@print')->name('barangmasuk.print');

    });

    Route::prefix('category')->group(function(){
        Route::get('/','categoryController@index')->name('category.index');
        Route::get('/create','categoryController@create')->name('category.create');
        Route::post('/','categoryController@store')->name('category.store');
        Route::get('/edit/{id}','categoryController@edit')->name('category.edit');
        Route::put('/update/{id}','categoryController@update')->name('category.update');
        Route::delete('delete/{id}','categoryController@destroy')->name('category.destroy');
        Route::get('/pdf','barangMasukController@pdf')->name('barangmasuk.pdf');
    });

    Route::prefix('stock')->group(function(){
        Route::get('/','stockController@index')->name('stock.index');
        Route::get('/create','stockController@create')->name('stock.create');
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
