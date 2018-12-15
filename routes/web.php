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
	//menu article
	Route::get('article/add','ArticleController@create')->name('admin.article.add');
	Route::post('article/add','ArticleController@store');
	Route::get('articles', 'ArticleController@index')->name('admin.article.index');
	Route::get('article/{id}/edit', 'ArticleController@edit')->name('admin.article.edit');
	Route::get('article/{id}/delete', 'ArticleController@destroy')->name('admin.article.delete');
	
	//filtered articles
	Route::get('articles/{id}','ArticleController@filteredArticles')->name('admin.article.filter');
	//menu category
	Route::get('category/add','CategoryController@create')->name('admin.category.add');
	Route::post('category/add','CategoryController@store');
	Route::get('categories','CategoryController@index')->name('admin.category.index');
	// edit category
	Route::get('category/edit/{id}','CategoryController@edit')->name('admin.category.edit');
	Route::post('category/edit/{id}','CategoryController@update');
	// delete category
	Route::get('category/delete/{id}','CategoryController@destroy')->name('admin.category.delete');
	
});

Route::prefix('mockup')->group(function() {
	Route::view('home', 'home');

	Route::prefix('mac')->group(function() {
		Route::get('home', function() {
			return view('home-mac');	
		});
	});
});