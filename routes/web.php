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

// Auth::routes()

Route::prefix('dashboard')->group(function() {
	//index
	Route::get('/','Dashboard\AdminController@index')->name('admin.index');

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
	Route::get('post/add','Dashboard\PostController@create')->name('admin.post.add');
	Route::post('post/add','Dashboard\PostController@store');
	Route::get('posts', 'Dashboard\PostController@index')->name('admin.post.index');
    Route::post('post/{id}/update', 'Dashboard\PostController@update')->name('admin.post.update');
	Route::get('post/{id}/edit', 'Dashboard\PostController@edit')->name('admin.post.edit');
	Route::get('post/{id}/delete', 'Dashboard\PostController@destroy')->name('admin.post.delete');

	//filtered posts
	Route::get('posts/{id}','Dashboard\PostController@filteredPosts')->name('admin.post.filter');
	//menu category
	Route::get('category/add','Dashboard\CategoryController@create')->name('admin.category.add');
	Route::post('category/add','Dashboard\CategoryController@store');
	Route::get('categories','Dashboard\CategoryController@index')->name('admin.category.index');
	// edit category
	Route::get('category/edit/{id}','Dashboard\CategoryController@edit')->name('admin.category.edit');
	Route::post('category/edit/{id}','Dashboard\CategoryController@update');
	// delete category
	Route::get('category/delete/{id}','Dashboard\CategoryController@destroy')->name('admin.category.delete');

	//headlines
	Route::get('headlines', 'Dashboard\HeadlineController@index')->name('admin.headline.index');
	Route::post('headlines', 'Dashboard\HeadlineController@store')->name('admin.headline.store');

});

Route::prefix('mockup')->group(function() {
	Route::view('home', 'mockup', [ 'imageName' => 'images/mockup/home-mockup.jpg', 'mac' => false ]);
	Route::view('post-list', 'mockup', [ 'imageName' => 'images/mockup/post-list-mockup.jpg', 'mac' => false ]);
	Route::view('post-detail', 'mockup', [ 'imageName' => 'images/mockup/post-detail-mockup.jpg', 'mac' => false ]);

	Route::prefix('mac')->group(function() {
        Route::view('home', 'mockup', [ 'imageName' => 'images/mockup/home-mockup.jpg', 'mac' => true ]);
        Route::view('post-list', 'mockup', [ 'imageName' => 'images/mockup/post-list-mockup.jpg', 'mac' => true ]);
        Route::view('post-detail', 'mockup', [ 'imageName' => 'images/mockup/post-detail-mockup.jpg', 'mac' => true ]);
	});
});

Route::prefix('/')->group(function() {
	// index
	Route::get('/', 'Client\HomeController@index')->name('home.index');

	// Temporary Route (WILL GET DELETED AS SOON AS REVIEW FIXED)
	// Route::get('/post-list', function() {
	// 	return view('client.postList');
	// });

    // Post detail
	Route::get('/post-detail', function () {
	    return view('client.postDetail');
	});

	// Posts lists by category
	Route::get('/{categoryName}', 'Client\PostsListController@index')->name('home.postList');
});
