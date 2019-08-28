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
    return view('contenido/contenido');
});
//index Se encuentra CategoriaController
Route::get('/categoria', 'CategoriaController@index');
//store Se encuentra CategoriaController
Route::post('/categoria/registrar', 'CategoriaController@store');
//update Se encuentra CategoriaController
Route::put('/categoria/actualizar', 'CategoriaController@update');
//desactivar Se encuentra CategoriaController
Route::put('/categoria/desactivar', 'CategoriaController@desactivar');
//activar Se encuentra CategoriaController
Route::put('/categoria/activar', 'CategoriaController@activar');





