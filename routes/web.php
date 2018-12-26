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
    return view('client.home');
});

// Auth::routes()

Route::prefix('dashboard')->group(function() {
	//index
	Route::get('/','AdminController@index')->name('admin.index');

	// Authentication Routes...
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login');
	Route::post('logout', 'Auth\LoginController@logout')->name('logout');

	// Password Reset Routes...
	Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('password/reset', 'Auth\ResetPasswordController@reset');
	//menu post
	Route::get('post/add','PostController@create')->name('admin.post.add');
	Route::post('post/add','PostController@store');
	Route::get('posts', 'PostController@index')->name('admin.post.index');
    Route::post('post/{id}/update', 'PostController@update')->name('admin.post.update');
	Route::get('post/{id}/edit', 'PostController@edit')->name('admin.post.edit');
	Route::get('post/{id}/delete', 'PostController@destroy')->name('admin.post.delete');

	//filtered posts
	Route::get('posts/{id}','PostController@filteredPosts')->name('admin.post.filter');
	//menu category
	Route::get('category/add','CategoryController@create')->name('admin.category.add');
	Route::post('category/add','CategoryController@store');
	Route::get('categories','CategoryController@index')->name('admin.category.index');
	// edit category
	Route::get('category/edit/{id}','CategoryController@edit')->name('admin.category.edit');
	Route::post('category/edit/{id}','CategoryController@update');
	// delete category
	Route::get('category/delete/{id}','CategoryController@destroy')->name('admin.category.delete');

	//headlines
	Route::get('headlines', 'HeadlineController@index')->name('admin.headline.index');
	Route::post('headlines', 'HeadlineController@store')->name('admin.headline.store');

});

Route::prefix('mockup')->group(function() {
	Route::view('home', 'home');

	Route::prefix('mac')->group(function() {
		Route::view('home', 'home-mac');
	});
});