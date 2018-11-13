<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','MichinmxController@index');
Route::get('nosotros','MichinmxController@about');
Route::get('blog','MichinmxController@blog');
Route::get('contactanos','MichinmxController@contact');
Route::get('menu','MichinmxController@menu');
Route::get('reservacion','MichinmxController@reservation');
Route::get('especialidad','MichinmxController@specialties');
Route::get('iniciar_sesión','MichinmxController@login');

Route::resource('estado','estadocontroller');
Route::resource('personal','personalcontroller');
Route::resource('proveedor','proveedorcontroller');
Route::resource('cliente','clientecontroller');
Route::resource('usuarios','UsuariosController');
Route::resource('promociones','promocioncontroller');
Route::resource('medida','medidacontroller');
Route::resource('tipo_carta','UnidadMedidacontroller');
Route::resource('puesto','puesto');
Route::resource('carta','cartacontroller');
Route::resource('inicio','vista');


