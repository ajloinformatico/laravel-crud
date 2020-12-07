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

Route::get('/', function () {
    return view('welcome');
});

//ACCEDIENDO A TODAS LAS FUNCIONES DEL CONTROLADOR A LA VEZ
Route::resource('empleados','EmpleadosController');

/*
FORMA TRADICIONAL
Route::get('/empleados', 'EmpleadosController@index'); //nombre del controlador y la función

Route::get('/empleados/create', 'EmpleadosController@create');
Route::get('/empleados', 'EmpleadosController@create');
*/
