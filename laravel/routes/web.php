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
//Ejemplos

Route::get('/encabezado', function () {
    return view('encabezado/encabezado');
});

//Rutas de Menu

Route::get('/', function () {
    return view('index');
});





//Rutas de Login

Route::get('/login/iniciarsesion', function () {
    return view('Login/iniciarsecion');
});

Route::get('/login/registrarte', function () {
    return view('Login/registrarte');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//Rutas de Categorias

Route::get('/categorias', function () {
    return view('index');
});

Route::get('/categorias/primaria-matematicas', function () {
    return view('index');
});





//Rutas de Acerca de

Route::get('/acercade', function () {
    return view('index');
});




//Rutas de Paginas de Informacion

    #por ver
