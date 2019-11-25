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
    return view('home');
});

/* Route::get('/empleados', 'EmpleadosController@index')->name('empleados.index');

Route::get('/departamentos', 'DepartamentosController@index')->name('departamentos.index');

Route::get('/proyectos', 'ProyectosController@index')->name('proyectos.index'); */
Route::resource('/empleados', 'EmpleadosController');

Route::resource('/departamentos', 'DepartamentosController');

Route::resource('/proyectos', 'ProyectosController');

