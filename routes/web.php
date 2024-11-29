<?php

use App\Http\Controllers\CategoriasContoller;
use App\Http\Controllers\menuController;
use App\Http\Controllers\MueblesController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\DomicilioController;

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

//  Despues de la autentificación
Route::middleware('auth:cliente')->group(function() {
    // Aqui van todas las rutas que se deben proteger
    //Ruta para CERRAR SESION
    Route::post('/abandonar',[AuthController::class,'logout']);

    //Rutas relacionadas al PAGO y PAYPAL
    Route::post('/comprobar/disponibilidad',[PedidosController::class,'comprobarDisponibilidad']); //confirma disponibilidad antes de proceder a PayPal
    Route::get('/pago/exitoso',[PedidosController::class,'exitoso']); //esta es la vista del pago confirmado
    Route::get('/cancelado',[PedidosController::class,'cancelado']); //pago cancelado
    
    //Rutas de CARRITO
    Route::get('/carrito',[CarritoController::class,'productosCarrito']);
    Route::post('/carrito/agregar',[CarritoController::class,'agregarCarrito']);
    Route::post('/carrito/quitar',[CarritoController::class,'quitarCarrito']);
    Route::post('/carrito/aumentar',[CarritoController::class,'aumentarCarrito']);
    Route::post('/carrito/disminuir',[CarritoController::class,'disminuirCarrito']);

    //Rutas para el PERFIL
    Route::get('/perfilito',[ClientesController::class,'profile']);
    Route::get('/perfil/editar',[ClientesController::class,'edit']);
    Route::post('/perfil/editar/datos',[ClientesController::class,'updateData']);
    Route::post('/perfil/editar/creadenciales',[ClientesController::class,'updateCredentials']);
    Route::get('/domiclio',[DomicilioController::class,'showDomicilio']); //retonor la vistra domicilio 
    Route::post('/domicilio/guardar',[DomicilioController::class,'guardar']);//guardar el domicilio del cliente 
});

//ruta provisional de completar perfiol 
Route::view('/Cliente/completar/perfil','/cliente/completarPerfil');

Route::view('/Menu/Detalles','/cliente/detallesMenu');
Route::view('/Perfil','/cliente/perfil/miPerfil');
//Route::view('/Perfil/Metodos','/cliente/perfil/metodoPago');
//Route::view('/Perfil/Domicilio','/cliente/perfil/domicilio');


//login y registro 
Route::view('/login','/login/login');
Route::view('/registrar','/login/registrar');
Route::get('/iniciar',[AuthController::class,'muestraLogin'])->name('login');
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
//vista de domicilio 
Route::get('/Perfil/Domicilio',[DomicilioController::class,'showDomicilio']);
//Ruta para mostrar la vista, funciuon solo retorna la vista 
Route::get('/Agregar/Muebles',[CategoriasContoller::class,'show']);
//ruta para guardar muebles 
Route::post('/Crear/Muebles',[MueblesController::class,'crear']);

//Rutas para el MENÚ
Route::get('/catalogo',[menuController::class,'showMenu']);
Route::get('/mueble/{id}/detalles',[menuController::class,'showMueble']);
