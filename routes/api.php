<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('restfull','RestfullController@getAll')->name('getAllRestfull');
Route::post('restfull','RestfullController@add')->name('addRestfull');
Route::get('restfull/{id}','RestfullController@get')->name('getRestfull');
Route::post('restfull/{id}','RestfullController@edit')->name('editRestfull');
Route::get('restfull/delete/{id}','RestfullController@delete')->name('deleteRestfull');