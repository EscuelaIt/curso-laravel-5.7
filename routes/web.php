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

// Route::get('generic/mostrar/{id?}', 'GenericController@mostrar');
// Route::post('cursos/crear', 'GenericController@crear')->name('cursos.create');

Auth::routes();

Route::get('/home/prueba', 'HomeController@prueba')->name('prueba') /*->middleware('prueba:5,hola,true')*/;
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});
