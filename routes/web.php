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

Route::get('/precios', 'NuevoControlador@precios')->name('precios');
Route::get('/acerca', 'NuevoControlador@acerca')->name('acerca');
Route::get('/', 'NuevoControlador@principal')->name('principal');
