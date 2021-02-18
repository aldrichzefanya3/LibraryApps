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

Route::get('/berita','ApiBeritaController@list');
Route::get('/berita/{id}','ApiBeritaController@getById');
Route::post('/berita','ApiBeritaController@store');
Route::delete('/berita/delete/{id}','ApiBeritaController@destroy');
Route::post('/berita/edit/{id}','ApiBeritaController@edit');

Route::get('/tag','ApiTagController@list');
Route::get('/tag/{id}','ApiTagController@getById');
Route::post('/tag','ApiTagController@store');
Route::delete('/tag/delete/{id}','ApiTagController@destroy');
Route::post('/tag/edit/{id}','ApiTagController@edit');
