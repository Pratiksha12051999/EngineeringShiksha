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
    return view('index');
});

Route::get('/streams', function () {
    return view('streams');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/ratings', function () {
    return view('ratings');
});

Route::get('/study', function () {
    return view('study');
});

Route::get('/cutoff', function () {
    return view('cutoff');
});


Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
