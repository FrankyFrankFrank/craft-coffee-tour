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

// Auth::routes();

Route::get('/', function(){ return view('landing-page'); })->name('landing');

Route::get('/locations', 'LocationController@index')->name('overview');;
Route::get('/locations/{id}', 'LocationController@show');
Route::get('/rsvp', 'RsvpController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{shortname}', function($shortname){
	$location = App\Location::where('shortname', $shortname)->first();
    if (!$location) {
        return redirect()->route('landing');
    }
    $podcast = $location->podcasts()->first();
   return view('locations.show', ['location' => $location, 'podcast' => $podcast]);
});
