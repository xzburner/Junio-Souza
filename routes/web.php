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



Route::get('/', 'PageController@home');
// chamando o controlador
Route::get('/home', 'PageController@home');
Route::get('/sobre', 'PageController@sobre');
Route::get('/contato', 'PageController@contato');
