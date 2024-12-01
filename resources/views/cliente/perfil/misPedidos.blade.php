@extends('cliente.layout')
@section('title', 'Catalogo')
@section('content')

    {{-- Mensajes de error --}}
    @if ($errors)
        <div class="mb-4 text-red-600">
            @foreach ($errors as $error)
                <p> {{ $error }} </p>
            @endforeach
        </div>
    @endif

    <div class="py-0 grid grid-cols-5 grid-rows-5 gap-4 bg-white p-4 rounded-lg shadow-md mx-auto">
        
        {{-- @if (\Cart::session(session()->get('cliente'))->getContent()->count() == 0)
        <div class="col-span-2 col-start-2 row-start-1">
            <h1 style="font-size: 300%;"> <strong>Tu carrito está vacío</strong> </h1>
            <a href="/catalogo" style="color: blue; font-style: italic; font-size: 250%; text-decoration: underline"> <b>Ver Muebles</b> </a>
        </div>
        @endif --}}

        <table class="col-span-4 col-start-2 row-start-1" style="text-align: left">
            <thead style="font-size: 130%">
                <tr> 
                    <td style="width: 30%;"> <b><i>Imagen</i></b> </td>
                    <td colspan="2"> <b><i>Datos</i></b> </td>
                </tr>
            </thead>
            <tbody>
                {{-- separa las compras por pedido --}}
                @foreach ($pedidos as $pedido)

                    {{-- dentro de ese pedido tra todos los detalles --}}
                    @foreach ($detalles as $detalle)

                        {{-- cuando el detalle y el pedido conincidan traera los muebles --}}
                        @if ($detalle->pedido_id == $pedido->id)

                            @foreach ($muebles as $mueble)
                                {{-- esto mostrara solo el mueble del detalle de pedido anteriormente encontrado --}}
                                @if ($mueble->id == $detalle->mueble_id)
                                    <tr>
                                        <td rowspan="4">
                                            <img src="{{$mueble->imagen}}" alt="{{$mueble->imagen}}" width="90%">
                                        </td>
                                        <td style="width: 15%;"> <b>Mueble: </b> </td>
                                        <td>{{$mueble->nombre}}</td>
                                    </tr>
                                    <tr>
                                        <td> <b>Precio Unitario: </b> </td>
                                        <td>{{$mueble->precio - $mueble->descuento}}</td>
                                    </tr>
                                    <tr>
                                        <td> <b>Cantidad: </b> </td>
                                        <td>{{$detalle->cantidad}}</td>
                                    </tr>
                                    <tr>
                                        <td> <b>Estado: </b> </td>
                                        <td>{{$pedido->estado}}</td>
                                    </tr>
                                    <tr style="height: 40px">
                                    </tr>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endforeach
            </tbody>
          </table>

    </div>


@endsection
