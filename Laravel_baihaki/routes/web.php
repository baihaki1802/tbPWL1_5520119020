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

//basic route
Route::get('/', function () {
    return view('welcome');
});

/*
Route::post($url,$callback);
Route::put($url,$callback);
Route::patch($url,$callback);
Route::delete($url,$callback);

Route::redirect('/test','/test');

Route::get('','')->name('');
*/