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
Route::get('/home', 'HomeController@index')->name('home')->middleware('administrator');

/**
 * Open Education Resource
 */
Route::prefix('oer')->group(function () {
    /**
     * OER Front-End
     */
    Route::get('', 'Oer\OerController@index')->name('oer.index');
    Route::get('Classification', 'Oer\OerController@classification')->name('oer.classification');
    Route::get('search', 'Oer\OerController@search')->name('oer.search');
    Route::get('resources/{id}', 'Oer\OerController@resources_show')->name('oer.resources.show');
    Route::get('resources/{id}/view', 'Oer\OerController@resources_view')->name('oer.resources.view')->middleware('auth');

    /**
     * OER Administrator
     */
    Route::prefix('admin')->name('admin.oer.')->middleware('administrator')->group(function () {
        Route::get('', 'Oer\OerController@dashboard')->name('dashboard');
        Route::resource('koleksi', 'Oer\CollectionController');
        Route::get('koleksi/{id}/delete', 'Oer\CollectionController@delete')->name('koleksi.delete');
        Route::resource('subject', 'Oer\SubjectController');
        Route::get('subject/{id}/delete', 'Oer\SubjectController@delete')->name('subject.delete');
        Route::resource('resource', 'Oer\ResourceController');
        Route::get('resource/{id}/delete', 'Oer\ResourceController@delete')->name('resource.delete');
    });

    /**
     * OER Member
     */
    Route::prefix('member')->name('member.oer.')->middleware('auth')->group(function () {
        Route::get('', 'Oer\MemberController@dashboard')->name('dashboard');
    });
});