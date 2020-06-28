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

Route::get('/', 'HomeController@index');
Route::post('/store', 'HomeController@store');

Route::get('/tweet/{id}', 'HomeController@view');
Route::get('/tweet/{id}/edit', 'HomeController@edit');
//put is used for updating
Route::put('/tweet/{id}', 'HomeController@update');





