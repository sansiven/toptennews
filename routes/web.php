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

Route::get('/', 'NewsListingsController@index');

Auth::routes();

Route::get('news/select/{category}', 'NewsListingsController@category');


Route::resource('news', 'NewsListingsController');
Route::resource('comments', 'CommentController');

//CAtegories
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

//tags
Route::resource('tags', 'TagController', ['except' => ['create']]);

Route::get('/dashboard', 'DashboardController@index');
Route::get('/admin', 'DashboardController@admin');
