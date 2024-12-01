<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mueble;
use App\Models\Pedido;
// use App\Models\Detalles_Pedido;
use App\Models\DetallesPedido;
use App\Http\Controllers\PayPalController;

class PedidosController extends Controller
{
    public function comprobarDisponibilidad (Request $request) {
        $id = session()->get('cliente');
        foreach(\Cart::session($id)->getContent() as $carrito) {
            $mueble = Mueble::find($carrito->id);
            if($mueble->disponibilidad < $carrito->quantity) {
                // return back()->with('mensaje','Lo sentimos, no se ha podido proceder a la compra
                //  debido a que el mueble "' .$carrito->name .'" no cuenta con suficientes unidades');
                // return back()->withErrors(['error'=>'Lo sentimos, no se ha podido proceder a la compra
                //  debido a que el mueble "' .$carrito->name .'" no cuenta con suficientes unidades']);
                return back()->withErrors([
                    'e_mensaje' => 'Lo sentimos, no se ha podido proceder a la compra
                 debido a que el mueble "' .$carrito->name .'" no cuenta con suficientes unidades'
                ]);
            }
        }
        $paypal = new PayPalController();
        $paypal->pagarPaypal($id);
        // PayPalController::class('pagarPaypal');
    }

    public function exitoso(Request $request) {
        // dd($request->all());
        $id = session()->get('cliente');
        $pedido = new Pedido();
        
        DB::beginTransaction();
        try {
            $pedido->cliente_id = $id;
            $pedido->total = \Cart::session($id)->getTotal();
            $pedido->payment_id = $request['paymentId'];
            $pedido->paypal_payerId = $request['PayerID'];
            $pedido->token = $request['token'];
            $pedido->estado = 'ENVIANDO';
            $pedido->save();
            session(['pedidoID'=>$pedido->id]);

            foreach (\Cart::session($id)->getContent() as $carrito) {
                $detalles = new DetallesPedido();
                $detalles->pedido_id = $pedido->id;
                $detalles->cliente_id = $id;
                $detalles->mueble_id = $carrito->id;
                $detalles->cantidad = $carrito->quantity;
                $detalles->total = $carrito->price * $carrito->quantity;
                $detalles->save();

                $mueble = Mueble::find($carrito->id);
                $mueble->disponibilidad += $carrito->quantity;
                $mueble->save();

                \Cart::session($id)->remove($carrito->id);
            }
            DB::commit();
            return view('/muebles/pagoExitoso');
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            return view('/muebles/pagoExitoso');
            //return $e->getMessage();
        }
    }

    public function cancelado() {
        return view('/muebles/errorPago');
    }
}
