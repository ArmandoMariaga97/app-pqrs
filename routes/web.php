<?php

use Illuminate\Support\Facades\Route;

// ruta de inicio
Route::view('/','index')->name('/');

// controlador para redirigir al usuario una vez es logueado
Route::get('/home', 'HomeController@index')->name('home');

// rutas solo con acceso administrador
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::view('/asesores','admin.asesores.index')->name('asesores');
    Route::view('/pqrs','admin.pqrs.index')->name('pqrs');
    Route::view('/clientes','admin.clientes.index')->name('clientes');
});
// solo rutas para Asesores
Route::group(['prefix' => 'asesor', 'middleware' => 'asesor'], function() {
    Route::view('/pqrs-pendientes','asesor.pqrs_pendientes')->name('pqrs_pendientes');
    Route::view('/pqrs-aceptados','asesor.pqrs_aceptados')->name('pqrs_aceptados');
    Route::view('/mis-pqrs','asesor.mis_pqrs')->name('pqrs_asesor');
});    
// solo rutas para clientes
Route::group(['prefix' => 'cliente', 'middleware' => 'cliente'], function() {
    Route::view('/nuevo-pqrs','cliente.nuevo_pqrs')->name('nuevo_pqrs');
    Route::view('/mis-pqrs','cliente.mis_pqrs')->name('mis_pqrs');
});   
 
Auth::routes();

// Nota: no se utilizó controladores, ya que al estar utilizando LIVEWIRE,
// se utilizan las clases de livewire que no son un controlador, pero tienen
// un comportmineto parecido y el metodo render, apuntando a la vista, estas 
// rutas estan en App\http\livewire

