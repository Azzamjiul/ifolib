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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// oer
Route::prefix('oer')->group(function () {
    // front end
    Route::name('oer.')->group(function(){
        Route::get('', 'Oer\OerController@index')->name('index');
        Route::get('search', 'Oer\OerController@search')->name('search');
    });
    // admin
    Route::prefix('admin')->name('admin.oer.')->middleware('auth')->group(function () {
        Route::get('', 'Oer\OerController@dashboard')->name('dashboard');
        Route::resource('koleksi', 'Oer\CollectionController');
        Route::get('koleksi/{id}/delete', 'Oer\CollectionController@delete')->name('koleksi.delete');
        Route::resource('subject', 'Oer\SubjectController');
        Route::get('subject/{id}/delete', 'Oer\SubjectController@delete')->name('subject.delete');
        Route::resource('resource', 'Oer\ResourceController');
        Route::get('resource/{id}/delete', 'Oer\ResourceController@delete')->name('resource.delete');
    });
});

Route::get('article', 'ArticleController@index');
Route::get('article/{tag}', 'ArticleController@cari');
Route::post('article', 'ArticleController@store');