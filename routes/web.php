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
Route::put('/profile', 'ProfileController@update');
Route::get('/single', function () {
    return view('single');
});

Route::get('/contact', function () {
    return view('contact');
});



Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/register', ['as' => 'register'])->name('register');
Route::get('/login', ['as' => 'login'])->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// sidebar
Route::get('/create-user', 'SidebarController@create_user')->name('admin.create_user');
Route::get('/manage-user', 'UserController@manage_user')->name('admin.manage_user');
Route::get('/create-product', 'SidebarController@create_product')->name('admin.create_product');
Route::get('/manage-product', 'ProductController@manage_product')->name('admin.manage_product');
Route::get('/payment', 'SidebarController@payment')->name('admin.payment');
Route::get('/shipping', 'SidebarController@shipping')->name('admin.shipping');
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
Route::get('/profile', array(
		'as' => 'profile',
		'uses' => 'ProfileController@index'
));

// Route::resource('admin', 'UserController');
Route::get('/viewuser', 'UserController@index');
Route::get('/create', 'UserController@view');
Route::post('/create','UserController@create')->name('create_user');
Route::get('/viewuser/{id}', 'UserController@show');
Route::put('/viewuser/{id}', 'UserController@update');
Route::delete('/user/{user}/delete', 'UserController@delete')->name('delete.user');
Route::delete('/product/{product}/delete', 'ProductController@delete')->name('delete.product');
Route::get('/create-product', 'ProductController@view')->name('create_product');
Route::post('/create-product', 'ProductController@create');

Route::get('/dashboard', function () {
    return view('tes');
});

Route::get('viewproduct/{id}', 'ProductController@show');

Route::get('/viewuser/{id}/edit', 'UserController@edit');
Route::put('/viewuser/{id}', 'UserController@update');
Route::get('/viewproduct/{id}/edit', 'ProductController@edit');
Route::put('/viewproduct/{id}', 'ProductController@update');

Route::post('/categories/{id}', 'CartController@add') -> name('add');
Route::get('/categories/', 'CartController@view1') -> name('categories');
Route::get('/cart/', 'CartController@view') -> name('cart');
//
// Route::get('form','FormController@create');
// Route::post('form','FormController@store');
//
// Route::get('viewform/{id}', 'FormController@view');
