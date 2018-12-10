<?php


Route::get('/','MichinmxController@index');
Route::get('nosotros','MichinmxController@about');
Route::get('blog','MichinmxController@blog');
Route::get('contactanos','MichinmxController@contact');
Route::get('menu','MichinmxController@menu');
Route::get('reservacion','MichinmxController@reservation');
Route::get('especialidad','MichinmxController@specialties');



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






Route::get('iniciar_secion','login@login')->name('iniciar_secion');
Route::POST('valida','login@valida')->name('valida');
Route::get('admin','login@admin')->name('admin');
Route::get('cerrarsesion','login@cerrarsesion')->name('cerrarsesion');


