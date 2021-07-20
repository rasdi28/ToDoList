<?php

use App\Http\Controllers\Admin\TukangSayurController;
use App\Http\Controllers\barangMasukController;
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
    });

    Route::prefix('pelanggan')->group(function(){
        Route::get('/','Admin\PelangganController@index')->name('pelanggan.index');
        Route::get('/create','Admin\PelangganController@create')->name('pelanggan.create');
        Route::post('/','Admin\PelangganController@store')->name('pelanggan.store');
        Route::get('/edit/{id}','Admin\PelangganController@edit')->name('pelanggan.edit');
        Route::put('/update/{id}','Admin\PelangganController@update')->name('pelanggan.update');
        Route::delete('delete/{id}','Admin\PelangganController@destroy')->name('pelanggan.destroy');
        
    });
    //cara lebih simple menggunakan resource controller

    Route::resource('tukangsayur','Admin\TukangSayurController');

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
