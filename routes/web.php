<?php

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

// http://localhost:8000/category/index
Route::get('category/index', "CategoryController@index");

// http://localhost:8000/home/index
Route::get('home/index', "Home@index");