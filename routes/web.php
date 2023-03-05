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

Route::get('/','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getInto/{id}', 'HomeController@getInto');
Route::get('/users', 'HomeController@users');
Route::get('/add_user', 'HomeController@add_user');
Route::post('/store_user', 'HomeController@store_user');
Route::get('/editUser/{id}', 'HomeController@editUser');
Route::post('/update_user', 'HomeController@update_user');
Route::get('/deleteUser/{id}', 'HomeController@deleteUser'); 

Route::get('/show_categories', 'HomeController@show_categories');
Route::get('/createCategory', 'HomeController@createCategory'); 
Route::post('/store_category', 'HomeController@store_category'); 


Route::get('/show_subcategories', 'HomeController@show_subcategories');
Route::get('/createsubCategory', 'HomeController@createSubCategory'); 
Route::post('/store_subcategory', 'HomeController@store_subcategory'); 


Route::get('/showVideos', 'HomeController@showVideos');
Route::get('/createVideo', 'HomeController@createVideo'); 
Route::post('/storeVideo', 'HomeController@storeVideo'); 