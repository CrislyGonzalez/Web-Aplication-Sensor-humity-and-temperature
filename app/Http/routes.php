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

Route::get('/', function () {
    return view('welcome');
});




/*Rutas para CRUD sensor*/
Route::resource('sensor', 'SensorController',
                ['only' => ['index', 'edit','create','store', 'update', 'destroy', 'show']]);

/*Rutas para CRUD sensor*/
Route::resource('usuario', 'UsuarioController',
                ['only' => ['index', 'edit','create','store', 'update', 'destroy', 'show']]);



