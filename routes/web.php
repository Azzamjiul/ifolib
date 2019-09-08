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
    return view('front_end.home');
});

// oer
Route::prefix('oer')->group(function () {
    // front end
    Route::get('', 'OerController@index')->name('oer.index');
    Route::get('search', 'OerController@search')->name('oer.search');

    // admin
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('', 'OerController@dashboard')->name('dashboard');
        Route::resource('resources', 'ResourceController');
    });
});

Route::get('article', 'ArticleController@index');
Route::get('article/{tag}', 'ArticleController@cari');
Route::post('article', 'ArticleController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');