<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('testing', 'App\Http\Controllers\apiController@testing');
Route::get('show', 'App\Http\Controllers\apiController@show');
Route::get('get/{id}', 'App\Http\Controllers\apiController@get');
Route::post('new', 'App\Http\Controllers\apiController@create');
Route::put('update', 'App\Http\Controllers\apiController@update');
Route::post('search', 'App\Http\Controllers\apiController@search');