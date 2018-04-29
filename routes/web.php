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
Route::get('/register', ['as' => 'register'])->name('register');
Route::get('/login', ['as' => 'login'])->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
Route::get('/adminpage', 'HomeController@admin')->name('admin');
=======
Route::group(array('before' => 'auth'), function() {

	/*
	 | Sign Out (GET)
	 | --
	 */
	Route::get('/account/sign-out', array(
		'as' => 'account-sign-out',
		'uses' => 'AccountController@getSignOut'
	));

});
>>>>>>> 7f2e7e6d218a9c8e2eb339c6ec5adad1734c34a2
