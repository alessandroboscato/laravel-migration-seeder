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

Route::resource('comics', 'ComicController');
//definisco una speciale rotta che richiama il metodo che resituirà la view per la chiamata ajax
Route::get('comics-ajax', 'ComicController@indexAjax');
