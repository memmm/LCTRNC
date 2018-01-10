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


// Route::get('/events/event/{id}', 'EventController@show');
// Route::get('/venues/venue/{id}', 'VenueController@show');
// Route::get('/artists/artist/{id}', 'ArtistController@show');
Route::get('/profile/{id}', 'UserController@show');
Route::post('/profile', 'UserController@update_avatar');
Route::get('about', function () {return view('about');});

Route::get('/', 'NewController@index');

Route::resource('users', 'UserController');
Route::resource('events', 'EventController');
Route::resource('venues', 'VenueController');
Route::resource('artists', 'ArtistController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('venues/create', 'VenueController@create');
//Route::post('venues', 'VenueController@store');
//Route::get('venues/{id}/edit', 'VenueController@edit');

Route::get('importExport', 'MaatwebsiteDemoController@importExport');
Route::get('downloadUsersExcel/{type}', 'MaatwebsiteDemoController@downloadUsersExcel');
Route::get('downloadEventsExcel/{type}', 'MaatwebsiteDemoController@downloadEventsExcel');
Route::get('eventslist', 'EventController@list');
Route::get('userslist', 'UserController@list');
Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');
