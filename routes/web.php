<?php

use Illuminate\Support\Facades\Route;

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
    return view('/cliente/layout');
});


//ruta provisional de completar perfiol 

Route::view('/Cliente/completar/perfil','/cliente/completarPerfil');
Route::view('/Catalogo','/cliente/catalogo');
Route::view('/Carrito','/cliente/carrito');