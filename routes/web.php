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

Auth::routes();
Route::get('/', function () {
    return view('WebStore.pages.index');
});
Route::get('/login', 'adminController@showLoginForm')->name('login');
Route::post('/login', 'adminController@login')->name('login-admin');
Route::get('/logout', 'adminController@logout')->name('logout-admin');

Route::get('/', 'homeController@index')->name('home');
// Route::get('','homeController@getIndex')->name('index');
Route::get("lien-he",'homeController@getContact')->name('contact');
Route::get("ve-chung-toi",'homeController@getAboutUs')->name('about-us');
Route::get("post-layout",'homeController@getPostLayout')->name('post-layout');
Route::get("post-format",'homeController@getPostFormat')->name('post-format');
Route::get("tac-gia", 'homeController@getAuthor')->name('author');
Route::get("kinh-doanh",'homeController@getBusiness')->name('business');
Route::get("phong-cach-song", 'homeController@getLifeStyle')->name('life-style');
Route::get("cong-nghe",'homeController@getTechnology')->name('technology');
Route::get("the-thao",'homeController@getSports')->name('sports');
Route::get("team",'homeController@getTeam')->name('team');
Route::get("error-404",'homeController@getError')->name('error-404');
Route::get("under-construction",'homeController@getConstruction')->name('under-construction');
Route::get("post-format-standard",'homeController@getPostFormatStandard')->name('post-format-standard');
Route::get("post-format-video",'homeController@getPostFormatVideo')->name('post-format-video');
