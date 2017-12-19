<?php

use Illuminate\Http\Request;
use App\Http;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$api = app('Dingo\Api\Routing\Router');



$api->version('v1', function ($api) {

  // $api->get('test', function () {
  //       return 'It is ok';
  //   });
     $api->get('users',  'App\Http\Controllers\UserController@index');
    // $api->get('eventek', ['as' => 'events.index', 'uses' => 'App\Http\Controllers\EventController@index']);
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
