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

Route::get('/index', function () {
    return view('index');
});

Route::get('/Single', function () {
    return view('single');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/categories', function () {
    return view('categories');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminpage', 'HomeController@admin')->name('admin');
