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


Route::get('/', 'BlogController@index')->name('blog.index');

Route::get('/{slug}', 'BlogController@post')->name('post.desc');




Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    //dashboard utama
    Route::get('/', 'HomeController@index')->name('home');
    //category
    Route::get('/category', 'CategoryController@index')->name('category.index');
    Route::post('/category', 'CategoryController@store')->name('category.store');
    Route::get('/category/create', 'CategoryController@create')->name('category.create');
    Route::get('/category/trashed', 'CategoryController@trashed')->name('category.trashed');
    Route::get('/category/{id}', 'CategoryController@edit')->name('category.edit');
    Route::put('/category/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('/category/{id}', 'CategoryController@destroy')->name('category.destroy');
    Route::get('/category/restore/{id}', 'CategoryController@restore')->name('category.restore');
    Route::delete('/category/kill/{id}', 'CategoryController@kill')->name('category.kill');
    //posts
    Route::get('/post', 'PostController@index')->name('post.index');
    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::post('/post', 'PostController@store')->name('post.store');
    Route::get('/post/trashed', 'PostController@trashed')->name('post.trashed');
    Route::get('/post/{id}', 'PostController@edit')->name('post.edit');
    Route::put('/post/{id}', 'PostController@update')->name('post.update');
    Route::delete('/post/{id}', 'PostController@destroy')->name('post.destroy');
    Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
    Route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
});
