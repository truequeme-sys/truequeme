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
Route::get('/MisTrueques', 'PerfilController@trueques')->name('MisTrueques')->middleware('auth');


Route::post('especialidades', 'EspecialidadController@store')->name('especialidades.store')->middleware('auth');

Route::post('certificados', 'CertificadoController@store')->name('certificados.store')->middleware('auth');

Route::post('servicios', 'ServicioController@store')->name('servicios.store')->middleware('auth');

Route::post('areas', 'AreaController@store')->name('areas.store')->middleware('auth');

Route::post('empresas', 'EmpresaController@store')->name('empresas.store')->middleware('auth');
Route::delete('empresas/{empresa}', 'EmpresaController@destroy')->name('empresas.delete')->middleware('auth');
Route::put('empresas/{empresa}', 'EmpresaController@update')->name('empresas.update')->middleware('auth');

Route::post('giros', 'GiroController@store')->name('giros.store')->middleware('auth');

Route::post('clientes', 'User\ClienteController@store')->name('user.clientes.store')->middleware('auth');

Route::post('zonas-de-trabajo', 'ZonaTrabajoController@store')->name('zonas-trabajo.store')->middleware('auth');

Route::get('trueques/publicar', 'TruequeController@create')->middleware('auth');
Route::get('trueques', 'TruequeController@index')->name('trueques.index')->middleware('auth');
Route::post('/getArtefacto', 'TruequeController@getArtefacto')->name('getArtefacto')->middleware('auth');
Route::post('/trueque/edit', 'TruequeController@edit')->name('trueque.edit')->middleware('auth');
Route::post('/eliminarArtefacto', 'TruequeController@eliminarArtefacto')->name('eliminarArtefacto')->middleware('auth');
Route::post('/trueque/new', 'TruequeController@create')->name('trueque.new')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
