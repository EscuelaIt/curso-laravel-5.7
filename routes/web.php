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
Route::get('/mail', function () {
    $usuario = App\User::all()->random();
    return new App\Mail\InformarUsuario($usuario);
});

Auth::routes(['verify' => true]);

Route::get('posts/{post_slug}', 'PostController@show');
// Route::resource('posts', 'PostController')->only(['show']);

Route::get('/generic/prueba', 'GenericController@prueba')->name('prueba');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function () {
    return view('welcome');
});
