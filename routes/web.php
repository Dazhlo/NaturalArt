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
Route::view('/Menu/Detalles','/cliente/detallesMenu');
Route::view('/Perfil','/cliente/miPerfil');
Route::view('/Perfil/Metodos','/cliente/perfil/metodoPago');
Route::view('/Perfil/Domicilio','/cliente/perfil/domicilio');


//login y registro 
Route::view('/login','/login/login');
Route::view('/registrar','/login/registrar');


//Administracion

Route::view('/AdminInicio','/admin/inicio');
Route::view('/AdminInicio1','/admin/home');
Route::view('/AdminMuebles','/admin/muebles');
Route::view('/Pedidos','/admin/Pedidos');
Route::view('/Muebles/Agregar','/admin/agregarMuebles');






