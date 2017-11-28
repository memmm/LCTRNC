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
    return view('welcome');
});


// Route::get('/about', function () {
//   return view('about');
// });

Route::get('/about', 'NewController');

Route::get('/newctrl', 'NewController');

Route::resource('users', 'UserController');
Route::resource('events', 'EventController');
Route::resource('venues', 'VenueController');
Route::resource('artists', 'ArtistController');
