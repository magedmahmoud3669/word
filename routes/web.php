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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/word', '\App\Http\Controllers\WordController@index');
Route::get('/write', '\App\Http\Controllers\WordController@write');
Route::get('/pages', '\App\Http\Controllers\WordController@pages');
Route::get('/create', '\App\Http\Controllers\WordController@create');
Route::get('/creater', '\App\Http\Controllers\WordController@creater');
Route::get('/creater', '\App\Http\Controllers\WordController@creater');




