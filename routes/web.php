<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','aController@home');
Route::get('/berita','BeritaController@index');
Route::get('/berita/create','BeritaController@create')->name('berita.create');
Route::post('/berita','BeritaController@store')->name('berita.store');
Route::post('/berita/delete/{id}','BeritaController@destroy')->name('berita.destroy');
Route::get('/berita/edit/{id}','BeritaController@edit')->name('berita.edit');
Route::post('/berita/update/{id}', 'BeritaController@update')->name('berita.update');
Route::get('/tag/create','tagController@create')->name('tag.create');
Route::post('/tag','tagController@store')->name('tag.store');
Route::post('/tag/delete/{id}','tagController@destroy')->name('tag.destroy');
Route::get('/tag/edit/{id}','tagController@edit')->name('tag.edit');
Route::post('/tag/update/{id}', 'tagController@update')->name('tag.update');
