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

use Spatie\Analytics\Period;

Route::get('/', function () {
    //retrieve visitors and pageviews since the 6 months ago
    $analyticsData = NULL;// Analytics::fetchVisitorsAndPageViews(Period::days(7));
    // return $analyticsData;
    return view('home',compact('analyticsData'));
});
