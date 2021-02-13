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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/buku','ApiBukuController@list');
Route::get('/buku/{id}','ApiBukuController@getById');
Route::post('/buku','ApiBukuController@store');
Route::delete('/buku/delete/{id}','ApiBukuController@destroy');
Route::post('/buku/edit/{id}','ApiBukuController@edit');
