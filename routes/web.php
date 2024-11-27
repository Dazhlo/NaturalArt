<?php

use App\Http\Controllers\CategoriasContoller;
use App\Http\Controllers\menuController;
use App\Http\Controllers\MueblesController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ClimaController;

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

//  Route::view('/Catalogo','/cliente/catalogo');
Route::view('/Carrito','/cliente/carrito');
Route::view('/Menu/Detalles','/cliente/detallesMenu');
Route::view('/Perfil','/cliente/perfil/miPerfil');
Route::view('/Perfil/Metodos','/cliente/perfil/metodoPago');
Route::view('/Perfil/Domicilio','/cliente/perfil/domicilio');


//login y registro 
Route::view('/login','/login/login');
Route::view('/registrar','/login/registrar');
Route::get('/iniciar',[AuthController::class,'muestraLogin']);
Route::post('/iniciar',[AuthController::class,'login']);

//Registrarse
Route::get('/registrarse',[ClientesController::class,'create']);
Route::post('/registrarse',[ClientesController::class,'store']);
Route::get('/auth/google',[ClientesAuthController::class,'updateOrCreate']);

//Administracion
Route::view('/AdminInicio','/admin/inicio');
Route::view('/AdminInicio1','/admin/home');
Route::view('/AdminMuebles','/admin/muebles');
Route::view('/Pedidos','/admin/Pedidos');

//ruta para el menu
Route::get('/Catalogo',[menuController::class,'showMenu']);

//Ruta para mostrar la vista, funciuon solo retorna la vista 
Route::get('/Agregar/Muebles',[CategoriasContoller::class,'show']);
//ruta para guardar muebles 
Route::post('/Store/Muebles',[MueblesController::class,'crear']);

//Rutas de CARRITO
Route::get('/carrito',[CarritoController::class,'productosCarrito']);
Route::post('/carrito/agregar',[CarritoController::class,'agregarCarrito']);
Route::post('/carrito/quitar',[CarritoController::class,'quitarCarrito']);
Route::post('/carrito/aumentar',[CarritoController::class,'aumentarCarrito']);
Route::post('/carrito/disminuir',[CarritoController::class,'disminuirCarrito']);

//Rutas relacionadas al pago y PayPal
Route::post('/comprobar/disponibilidad',[PedidosController::class,'comprobarDisponibilidad']); //confirma disponibilidad antes de proceder a PayPal
Route::get('/pago/exitoso',[PedidosController::class,'exitoso']); //esta es la vista del pago confirmado
Route::get('/cancelado',[PedidosController::class,'cancelado']); //pago cancelado