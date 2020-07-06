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
Route::post('/perfil', 'PerfilController@store')->name('perfil.store')->middleware('auth');
Route::get('/perfil/editar', 'PerfilController@edit')->name('perfil.edit')->middleware('auth');

Route::post('especialidades', 'EspecialidadController@store')->name('especialidades.store')->middleware('auth');

Route::post('certificados', 'CertificadoController@store')->name('certificados.store');

Route::get('trueques/publicar', 'TruequeController@create')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
