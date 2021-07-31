<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//route categories

Route::get('blog','Admin\BlogController@index');
Route::post('blog','Admin\BlogController@store');
Route::get('blog/{id}','Admin\BlogController@show');
Route::put('blog/{id}','Admin\BlogController@update');
Route::delete('blog/{id}','Admin\BlogController@destroy');
