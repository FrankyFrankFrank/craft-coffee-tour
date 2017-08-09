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

Auth::routes();

Route::get('/', function(){ return view('landing-page'); })->name('landing');

Route::get('/overview', function(){ 
	$stops = app('App\TourOverview')->stops;
	return view('tour-overview', ['stops' => $stops]);
})->name('overview');

Route::get('/rsvp', 'RsvpController@index');

Route::get('/home', 'HomeController@index')->name('home');
