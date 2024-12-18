<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\ Aqui Modelo de los Productos; 

class CarritoController extends Controller
{
    public function productosCarrito() {
        $id = session()->get('cliente');    //esta session se debe crear en el archivo de autentificación
        $carrito = \Cart::session($id)->getContent();
        //dd($carrito);
        return view('/muebles/carrito')->with('muebles',$carrito);  //Debera retornar la ruta de la página carrito
    }

    public function agregarCarrito(Request $request) {
        //dd($request->all());
        if(session()->get('cliente')) {
            $id = session()->get('cliente');
        } else {
            return back()->withErrors([
                'session' => 'Para hacer esto debe de iniciar sesión.',
            ]);
        }

        $id = session()->get('cliente'); //esta session se debe crear en el archivo de autentificación
        
        \Cart::session($id)->add(array(
            'id' => $request->id, // inique row ID
            'name' => $request->nombre,
            'price' => $request->precio - $request->descuento,
            'quantity' => $request->cantidad,
            'attributes' => array(
                'imagen' => $request->imagen,
                'descripcion' => $request->descripcion,
                'precioUnitario' => $request->precio,
                'descuento' => $request->descuento,
                'disponibilidad' => $request->disponibilidad,
                'ancho' => $request->ancho,
                'largo' => $request->largo,
                'alto' => $request->alto
            )
        ));

        return back();
    }

    public function quitarCarrito(Request $request) {
        $id = session()->get('cliente');    //esta session se debe crear en el archivo de autentificación
        \Cart::session($id)->remove($request->id);
        return back();      //falta probar si es que no treuna
        //return redirect('/carrito/cursos');   Debe retornar a la vista de carrito
    }

    public function aumentarCarrito(Request $request) {
        $id = session()->get('cliente');    //esta session se debe crear en el archivo de autentificación
        \Cart::session($id)->update($request->id, array(
            'quantity' => 1, //suma 1
        ));
        return back();      //falta probar si es que no treuna
        //return redirect('/carrito/cursos');   Debe retornar a la vista de carrito
    }

    public function disminuirCarrito(Request $request) {
        $id = session()->get('cliente');    //esta session se debe crear en el archivo de autentificación
        \Cart::session($id)->update($request->id, array(
            'quantity' => -1, //resta 1
        ));
        return back();      //falta probar si es que no treuna
        //return redirect('/carrito/cursos');   Debe retornar a la vista de carrito
    }
}
