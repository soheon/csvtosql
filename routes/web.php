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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/upload', 'CsvController@showForm');
Route::post('/upload', 'CsvController@store');
Route::post('/upload1', 'Csv1Controller@store');
Route::get('/list/{id}','CsvController@getlist');

Route::get('/download', 'CsvController@exportForm');
Route::post('/export/csv', 'CsvController@export');


