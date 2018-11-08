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

Route::get('/', 'View@home');
Route::get('/series', 'View@series');
Route::get('/addSeries', 'View@addSeries');

Route::get('/addActor', 'View@addActor');
Route::get('/addGenre', 'View@addGenre');

Route::post('/insertserie', 'Serie@insertOne');
Route::post('/deleteserie', 'Serie@deleteOne');
Route::post('/updateserie', 'View@updateForm');
Route::post('/updateserieaction', 'Serie@updateOne');

Route::post('/insertactor', 'Actor@insertOne');
Route::post('/deleteactor', 'Actor@deleteOne');
Route::post('/updateactor', 'View@updateActor');
Route::post('/updateactoraction', 'Actor@updateOne');

Route::post('/insertgenre', 'Genre@insertOne');
Route::post('/deletegenre', 'Genre@deleteOne');
Route::post('/updategenre', 'View@updateGenre');
Route::post('/updategenreaction', 'Genre@updateOne');
