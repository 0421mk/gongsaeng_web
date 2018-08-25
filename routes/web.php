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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/review', 'ReviewController@index')->name('review');
Route::get('/review/create', 'ReviewController@create')->name('review.create');
Route::get('/review/update', 'ReviewController@update')->name('review.update');
Route::get('/review/delete', 'ReviewController@delete')->name('review.delete');
