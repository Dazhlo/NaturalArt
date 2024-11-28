<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mueble;
use App\Models\Pedido;
use App\Models\Detalles_Pedido;
use App\Http\Controllers\PayPalController;

class PedidosController extends Controller
{
    public function comprobarDisponibilidad (Request $request) {
        $id = session()->get('cliente');
        foreach(\Cart::session($id)->getContent() as $carrito) {
            $mueble = Mueble::find($carrito->id);
            if($mueble->disponibilidad < $carrito->quantity) {
                return back()->with('error','Lo sentimos, no se ha podido proceder a la compra
                 debido a que el mueble "' .$carrito->name .'" no cuenta con suficientes unidades');
            }
        }
        PayPalController::pagarPaypal();
    }

    public function exitoso(Request $request) {
        $id = session()->get('cliente');
        $pedido = new Pedido();
        
        DB::beginTransaction();
        try {
            $pedido->cliente_id = $id;
            $pedido->total = \Cart::getTotal();
            $pedido->paypal_paymentId = $request['paymentId'];
            $pedido->paypal_payerId = $request['PayerID'];
            $pedido->token = $request['token'];
            $pedido->estado = 'ENVIANDO';
            $pedido->save();
            session(['pedidoID'=>$pedido->id]);

            foreach (\Cart::session($id)->getContent() as $carrito) {
                $detalles = new Detalles_Pedido();
                $detalles->pedido_id = $pedido->id;
                $detalles->cliente_id = $id;
                $detalles->mueble_id = $carrito->id;
                $detalles->cantidad = $carrito->quantity;
                $detalles->total = $carrito->price * $carrito->quantity;
                $detalles->save();

                $mueble = Mueble::find($carrito->id)->update(['disponibiidad' => -$carrito->quantity]);

                \Cart::session($id)->remove($carrito->id);
            }
            DB::commit();
            return view('/confirma cion');
        } catch (\Exception $e) {
            DB::rollback();
            return view('/muebles/pagoExitoso');
            //return $e->getMessage();
        }
    }

    public function cancelado() {
        return view('/muebles/erroPago');
    }
}
