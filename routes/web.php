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

Route::get('news/breaking', 'NewsListingsController@breakingnews');

Route::resource('news', 'NewsListingsController');

Route::get('/dashboard', 'DashboardController@index');