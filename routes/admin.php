<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('AdminStore.pages.index');
});

// Route::get('home','ControlController@index')->name('admin');
// Route::group(['middleware' => ['auth:admin']], function () {
		Route::get('/', 'ControlController@index')->name('admin')->middleware('admin');

// });
//category
Route::group(['prefix'=>'categorys'], function(){
	Route::get('/','CategoryController@index')->name('category');
	Route::post('post-create','CategoryController@store')->name('store-category');
	Route::get('update/{id}','CategoryController@edit')->name('edit-category');
	Route::post('update/{id}','CategoryController@update')->name('update-category');
	Route::post('destroy/{id}','CategoryController@destroy')->name('destroy-category');
});
//post
Route::group(['prefix'=>'posts'], function(){
	Route::get('/','PostController@index')->name('post');
	Route::get('create','PostController@create')->name('create-post');
	Route::post('create','PostController@store')->name('store-post');
	Route::get('update/{id}','PostController@edit')->name('edit-post');
	Route::post('update/{id}','PostController@update')->name('update-post');
	Route::post('destroy/{id}','PostController@destroy')->name('destroy-post');
    Route::get('detail/{id}', 'PostController@detail')->name('post-detail');
    Route::get('search-form', 'PostController@searchForm')->name('searchForm');

});
Route::group(['prefix'=>'users'], function(){
	Route::get('/','UserController@index')->name('user');
	Route::get('create-user','UserController@create')->name('create-user');
	Route::post('create-user','UserController@store')->name('store-user');
	Route::get('update-user/{id}','UserController@edit')->name('edit-user');
	Route::post('update-user/{id}','UserController@update')->name('update-user');
	Route::post('destroy-user/{id}','UserController@destroy')->name('destroy-user');

});
