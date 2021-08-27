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

Route::get('/series', 'SerieController@index')->name('listar_series');
Route::get('/series/create', 'SerieController@create');
Route::post('/series', 'SerieController@store');
Route::get('/series/{id}/edit', 'SerieController@edit');
Route::put('/series/{id}', 'SerieController@update');
Route::delete('/series/{id}', 'SerieController@destroy');

Route::get('/series/{serieId}/episodios', 'EpisodioController@index')->name('listar_episodios');
Route::get('/series/{serieId}/episodios/create', 'EpisodioController@create');
Route::post('/series/{serieId}/episodios', 'EpisodioController@store');
Route::get('/series/{serieId}/episodios/{id}/edit', 'EpisodioController@edit');
Route::put('/series/{serieId}/episodios/{id}', 'EpisodioController@update');
Route::delete('/series/{serieId}/episodios/{id}', 'EpisodioController@destroy');
