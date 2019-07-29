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

Route::group(['middleware' => 'web'], function () {

	Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);


	//Create a property ==> POST
	// Route::get('post/rentProperty' ,['as' => 'rentProperty.index', 'uses' => 'PostController@indexRentProperty']);
	Route::get('post/rentProperty/new' ,['as' => 'rentProperty.create', 'uses' => 'PostController@createRentProperty']);
	Route::post('post/rentProperty/new', ['as' => 'rentProperty.store', 'uses' => 'PostController@store']);
	// Route::get('post/rentProperty/{id}', ['as' => 'rentProperty.index', 'uses' => 'PostController@indexRequest']);
	Route::get('post/rentProperty/{id}/{request_id}', ['as' => 'rentProperty.show', 'uses' => 'PostController@showRentProperty']);

	Route::get('get/requests', ['as' => 'get.request.index', 'uses' => 'GetController@index']);
	Route::get('get/{id}/{request_id}', ['as' => 'get.show', 'uses' => 'GetController@show']);

	// Cart
	Route::get('cart', ['as' => 'cart.index', 'uses' => 'CartController@index']);
	Route::get('cart/{id}', ['as' => 'cart.store', 'uses' => 'CartController@store']);
	Route::get('cart/{id}/{request_id}', ['as' => 'cart.show', 'uses' => 'CartController@show']);
	Route::get('cart/validate/{id}', ['as' => 'cart.validate', 'uses' => 'CartController@getValidateContact']);
    Route::post('cart/validate/{id}', ['as' => 'cart.validate.post', 'uses' => 'CartController@postValidateContact']);

	// Route::get('get/rentProperty' ,['as' => 'rentProperty.index', 'uses' => 'PostController@indexRentProperty']);
	// Route::get('get/rentProperty/new' ,['as' => 'rentProperty.create', 'uses' => 'PostController@createRentProperty']);

	Route::get('getcities/{id}', 'AjaxController@getCity');

	// Admin
	Route::prefix('admin')->middleware('admin')->group(function (){
		Route::get('/login', ['as' => 'admin.login', 'uses' => 'AdminController@login']);
		Route::post('home', ['as' => 'admin.home', 'uses' => 'Auth\LoginController@login']);
		Route::get('dashboard', ['as' => 'admin.dashboard', 'uses' => 'AdminController@index']);
		Route::get('request', ['as' => 'admin.request.index', 'uses' => 'AdminController@indexRequest']);
		Route::get('request/new', ['as' => 'admin.request.create', 'uses' => 'AdminController@createRequest']);
		Route::post('request/new', ['as' => 'admin.request.store', 'uses' => 'AdminController@storeRequest']);
		Route::get('request/pricing/{id}', ['as' => 'admin.request.pricing', 'uses' => 'AdminController@pricing']);

	});
});



// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });




});

