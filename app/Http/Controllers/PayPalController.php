<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay; //Paqueteria no instalada

class PayPalController extends Controller
{
    private $gateway;

    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->initialize([ 
            'clientId' => env('PAYPAL_CLIENT_ID'), 
            'secret' => env('PAYPAL_SECRET'),
            'testMode' => true, // Para usar el entorno sandbox de PayPal
        ]);
    }

    public function pagarPaypal() {
        try {
            $id = session()->get('cliete');
            $carrito = \Cart::session($id)->getContent();
            //dd(\Cart::getTotal());
            $response = $this->gateway->purchase([
                'amount' => \Cart::getTotal(),
                'currency' => 'MXN',
                'returnUrl' => 'http://127.0.0.1:8010/pago/exitoso',
                'cancelUrl' => 'http://127.0.0.1:8010/cancelado',
            ])->send();

            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                echo $response->getMessage();
            }
        } catch (\throw $th) {
            return $th->getMessage();
        }
    }
}
