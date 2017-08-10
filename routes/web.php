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
	$locations = App\Location::all();
	return view('tour-overview', ['locations' => $locations]);
})->name('overview');

Route::get('/locations', 'LocationController@index');
Route::get('/locations/{id}', 'LocationController@show');
Route::get('/rsvp', 'RsvpController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{shortname}', function($shortname){
	$location = App\Location::where('shortname', $shortname)->first();
    if (!$location) {
        return redirect()->route('landing');
    }
    return redirect('/locations/' . $location->id);
});
