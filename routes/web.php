<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'ControllerPublico@index')->name('index');

#--------------------- MODULO SESION
Route::get('sesion','ControllerSesion@sesion')->name('sesion');
Route::post('login', 'ControllerSesion@login')->name('login');
Route::get('ssast','ControllerSesion@ssast')->name('ssast');
Route::get('exit','ControllerSesion@exit')->name('exit');

#--------------------- MODULO CARGO
Route::get('listaCargo/', 'ControllerCargo@listaCargo')->name('listaCargo');
Route::get('formularioCargo','ControllerCargo@formularioCargo')->name('formularioCargo');
Route::post('agregarCargo', 'ControllerCargo@agregarCargo')->name('agregarCargo');
Route::get('eliminarCargo/{id_cargo}', 'ControllerCargo@eliminarCargo')->name('eliminarCargo');
Route::get('editarCargo/{id_cargo}','ControllerCargo@editarCargo')->name('editarCargo');
Route::put('updateCargo', 'ControllerCarrera@updateCargo')->name('updateCargo');
Route::post('searchCargo', 'ControllerCarrera@searchCargo')->name('searchCargo');


#--------------------- MODULO REPARTICION
Route::get('listaReparticion/', 'ControllerReparticion@listaReparticion')->name('listaReparticion');
Route::get('formularioReparticion','ControllerReparticion@formularioReparticion')->name('formularioReparticion');
Route::post('agregarReparticion', 'ControllerReparticion@agregarReparticion')->name('agregarReparticion');
Route::get('eliminarReparticion/{id_reparticion}', 'ControllerReparticion@eliminarReparticion')->name('eliminarReparticion');
Route::get('editarReparticion/{id_reparticion}','ControllerReparticion@editarReparticion')->name('editarReparticion');
Route::put('updateReparticion', 'ControllerReparticion@updateCargo')->name('updateReparticion');
Route::post('searchReparticion', 'ControllerReparticion@searchCargo')->name('searchReparticion');


#--------------------- MODULO PERSONA
Route::get('listaPersona/', 'ControllerPersona@listaPersona')->name('listaPersona');
Route::get('formularioPersona','ControllerPersona@formularioPersona')->name('formularioPersona');
Route::post('agregarPersona', 'ControllerPersona@agregarPersona')->name('agregarPersona');
Route::get('eliminarPersona/{id_persona}', 'ControllerPersona@eliminarPersona')->name('eliminarPersona');
Route::get('editarPersona/{id_persona}','ControllerPersona@editarPersona')->name('editarPersona');
Route::put('updatePersona', 'ControllerPersona@updatePersona')->name('updatePersona');
Route::post('searchPersona', 'ControllerPersona@searchPersona')->name('searchPersona');


#--------------------- MODULO PREMIO
Route::get('listaPremio/', 'ControllerPremio@listaPremio')->name('listaPremio');
Route::get('formularioPremio','ControllerPremio@formularioPremio')->name('formularioPremio');
Route::post('agregarPremio', 'ControllerPremio@agregarPremio')->name('agregarPremio');
Route::get('eliminarPremio/{id_premio}', 'ControllerPremio@eliminarPremio')->name('eliminarPremio');
Route::get('editarPremio/{id_premio}','ControllerPremio@editarPremio')->name('editarPremio');
Route::put('updatePremio', 'ControllerPremio@updatePremio')->name('updatePremio');
Route::post('searchPremio', 'ControllerPremio@searchPremio')->name('searchPremio');

#--------------------- MODULO SORTEO
Route::get('formularioSorteo','ControllerSorteo@formularioSorteo')->name('formularioSorteo');
Route::post('agregarSorteo', 'ControllerSorteo@agregarSorteo')->name('agregarSorteo');

#--------------------- MODULO GANADOR
Route::get('listaGanador','ControllerGanador@listaGanador')->name('listaGanador');
Route::get('reiniciarGanador','ControllerGanador@reiniciarGanador')->name('reiniciarGanador');
