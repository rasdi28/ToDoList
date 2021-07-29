<?php

use App\Http\Controllers\Admin\TukangSayurController;
use App\Http\Controllers\Admin\barangMasukController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/',function(){
    return view('pages.frontend.index');
});


Route::prefix('admin')->group(function(){
    Route::prefix('dashboard')->group(function(){
        Route::get('/','dashboardController@index')->name('dashboard.index');
    });
    Route::prefix('barangmasuk')->group(function(){
        Route::get('/','Admin\barangMasukController@index')->name('barangmasuk.index');
        Route::get('/create','Admin\barangMasukController@create')->name('barangmasuk.create');
        Route::post('/','Admin\barangMasukController@store')->name('barangmasuk.store');
        Route::get('/show/{id}','Admin\barangMasukController@show')->name('barangmasuk.show');
        Route::get('/edit/{id}','Admin\barangMasukController@edit')->name('barangmasuk.edit');
        Route::put('/update/{id}','Admin\barangMasukController@update')->name('barangmasuk.update');
        Route::delete('delete/{id}','Admin\barangMasukController@destroy')->name('barangmasuk.destroy');
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
    Route::resource('category','Admin\CategoryController');
    Route::resource('tukangsayur','Admin\TukangSayurController');
    ROute::resource('item','Admin\ItemController');
    Route::resource('permintaan','Admin\PermintaanController');
    Route::resource('permintaanitem','Admin\PermintaanItemController');
    Route::resource('supplier','Admin\SupplierController');
    Route::resource('product','Admin\ProductController');
    Route::resource('stock','Admin\StockController');
    Route::resource('po','Admin\PurchaseOrderController');
    Route::resource('orderitem','Admin\OrderItemController');
    Route::get('/inventory','Admin\StockController@inventory')->name('stock.inventory');
    

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


Auth::routes();


