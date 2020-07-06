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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('about', 'AboutController@index');
Route::get('/perfil', 'PerfilController@index')->middleware('auth');
Route::post('/perfil', 'PerfilController@update')->name('perfil.update')->middleware('auth');
Route::get('/perfil/editar', 'PerfilController@edit')->middleware('auth');
Route::get('trueques/publicar', 'TruequeController@create')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
