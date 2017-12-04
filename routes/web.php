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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about', function () {
//   return view('about');
// });

Route::get('/venues', 'VenueController@index');
Route::get('/events', 'EventController@index');
Route::get('/artists', 'ArtistController@index');

Route::get('/event/{id}', 'EventController@show');


Route::get('/', 'NewController@index');

Route::resource('users', 'UserController');
Route::resource('events', 'EventController');
Route::resource('venues', 'VenueController');
Route::resource('artists', 'ArtistController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('venues/create', 'VenueController@create');

Route::post('venues', 'VenueController@store');
