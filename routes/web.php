<?php

use Illuminate\Support\Facades\Route;

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


Route::get('list', 'App\Http\Controllers\GoodsController@index');
Route::get('create', 'App\Http\Controllers\GoodsController@create');
Route::get('edit/{id}', 'App\Http\Controllers\GoodsController@edit');
Route::post('store', 'App\Http\Controllers\GoodsController@store');
Route::post('edit/edit', 'App\Http\Controllers\GoodsController@update');

Route::get('/aaa', function () {
    return view('welcome');
});
