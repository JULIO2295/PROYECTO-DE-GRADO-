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
    return view('layouts.index');
});

Route::get('/prueba', function () {
    return view('layouts.prueba');
});



Route::get('/inicio', function () {
    return view('layouts.admin');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::resource('seguridad/rol', 'RolController');

Route::resource('seguridad/usuario', 'UserController');

Route::resource('cursos/curso', 'CursoController');

Route::resource('cursos/discapacidad', 'DiscapacidadController');

Route::resource('cursos/profesor', 'ProfesorController');

Route::get('/detalle-profesor/{id}', 'ProfesorController@perfil')->name('detalle-profesor');

Route::resource('cursos/estudiante', 'EstudianteController');

Route::resource('modulos/modulos', 'ModuloController');

Route::resource('modulos/contenido', 'ContenidoController');

Route::resource('modulos/actividad', 'ActividadController');

Route::get('/calificacion/{id}','ActividadController@calificar')->name('calificacion');

Route::get('/materias', 'FrontController@mostrarModulos')->name('materias');

Route::get('/showmodulos/{id}', 'FrontController@mostrarContenidos')->name('showmodulos');

Route::get('/showcontenidos/{id}', 'FrontController@mostrarInformacion')->name('showcontenidos');