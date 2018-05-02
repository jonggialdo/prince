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
Route::get('/', array(
		'as' => 'home',
		'uses' => 'HomeController@index'
));
Route::get('/profile', array(
		'as' => 'profile',
		'uses' => 'ProfileController@index'
));
Route::get('/single', function () {
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
Route::get('/admin', 'HomeController@admin')->name('admin');

// sidebar
Route::get('/create-user', 'SidebarController@create_user')->name('admin.create_user');
Route::get('/manage-user', 'SidebarController@manage_user')->name('admin.manage_user');

Route::get('/home', 'HomeController@index')->name('home');
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


Route::get('/contact', array(
		'as' => 'contact',
		'uses' => 'ContactController@index'
));
Route::get('/categories', array(
		'as' => 'categories',
		'uses' => 'CategoriesController@index'
));
Route::get('/profile', array(
		'as' => 'profile',
		'uses' => 'ProfileController@index'
));

// Route::resource('admin', 'UserController');

Route::get('/viewuser', 'UserController@index');
Route::get('/create', 'UserController@view');
<<<<<<< HEAD
Route::post('/create','UserController@create');
Route::get('/viewuser/{id}', 'UserController@show');

Route::get('/viewuser/{id}/edit', 'UserController@edit');
Route::patch('/viewuser/{id}', 'UserController@update');
=======
Route::post('/create','UserController@create');
>>>>>>> 5c696359c4bbb895eb5154a337ff3eb5729079dc
