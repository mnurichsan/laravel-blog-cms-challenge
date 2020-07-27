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


Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    //dashboar utama
    Route::get('/', 'HomeController@index')->name('home');
    //category
    Route::post('/category', 'CategoryController@store')->name('category.store');
    Route::get('/category', 'CategoryController@index')->name('category.index');
    Route::get('/category/create', 'CategoryController@create')->name('category.create');
    Route::get('/category/trashed', 'CategoryController@trashed')->name('category.trashed');
    Route::get('/category/{id}', 'CategoryController@edit')->name('category.edit');
    Route::put('/category/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('/category/{id}', 'CategoryController@destroy')->name('category.destroy');
    Route::get('/category/restore/{id}', 'CategoryController@restore')->name('category.restore');
    Route::delete('/category/kill/{id}', 'CategoryController@kill')->name('category.kill');
    //posts
});
