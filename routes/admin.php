<?php

use Illuminate\Support\Facades\Route;

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
    return view('AdminStore.pages.index');
});

// Route::get('home','ControlController@index')->name('admin');
// Route::group(['middleware' => ['auth:admin']], function () {  
		Route::get('/', 'ControlController@index')->name('admin')->middleware('admin'); 
	
// });
//category
Route::group(['prefix'=>'category'], function(){
	Route::get('/','categoryController@index')->name('category');
	Route::post('post-create','categoryController@create')->name('add-category');
	Route::get('update/{id}','categoryController@getUpdate')->name('get-category');
	Route::post('update/{id}','categoryController@update')->name('post-update-category');
	Route::get('destroy/{id}','categoryController@destroy')->name('delete-category');
});
//post
Route::group(['prefix'=>'post'], function(){
	Route::get('/','postController@index')->name('post');
	Route::get('create','postController@create')->name('create-posts');
	Route::post('create','postController@postCreate')->name('post-create-posts');
	Route::get('update/{id}','postController@update')->name('update-post');
	Route::post('update/{id}','postController@postUpdate')->name('post-update-post');
	Route::get('destroy/{id}','postController@destroy')->name('delete-post');

});
Route::group(['prefix'=>'user'], function(){
	Route::get('/','userController@index')->name('user');
	Route::get('create-user','userController@create')->name('create-user');
	Route::post('create-user','userController@createUser')->name('create-user-post');
	Route::get('update-user/{id}','userController@update')->name('update-user');
	Route::post('update-user/{id}','userController@updateUser')->name('update-user-post');
	Route::get('destroy-user/{id}','userController@destroy')->name('destroy-user');
	Route::post('destroy-user/{id}','userController@destroyUser')->name('destroy-user-post');
	
	
});