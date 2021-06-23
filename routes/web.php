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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/index','noticiasController@index');
Route::get('/nova_noticia','noticiasController@create');
Route::post('/salvar_noticia','noticiasController@store');
Route::get('/gerir_noticia','noticiasController@apresentaTabelaGestao');

Route::get('/colocar_visivel/{id}','noticiasController@colocarVisivel');
Route::get('/colocar_invisivel/{id}','noticiasController@colocarInvisivel');

Route::get('/eliminar_noticia/{id}','noticiasController@destroy');

Route::get('/editar_noticia/{id}','noticiasController@edit');
Route::post('/update_noticia/{id}','noticiasController@update');
