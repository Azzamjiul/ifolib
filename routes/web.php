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

// frontend oer
Route::get('oer', 'OerController@index')->name('oer.index');
Route::get('oer/search', 'OerController@search')->name('oer.search');