@extends('cliente.layout')
@section('title', 'Catalogo')
@section('content')



    <div class="py-0 grid grid-cols-5 grid-rows-5 gap-4 bg-white p-4 rounded-lg shadow-md mx-auto">
        {{-- chavales aqui es muy importante poner la imagen del mueble --}}

        @foreach ($muebles as $item)
            <div class="col-span-2 row-span-2 col-start-2 row-start-2">

                {{-- Carga Imagen --}}
                <img src="{{ $item->attributes->image }}" alt="" class="w-full h-48 object-cover mb-4 rounded">
                <div class="flex">
                    <img src="" alt="" class="w-1/4 h-2/4 object-cover mb-4 rounded">
                    <img src="" alt="" class="w-1/4 h-2/4 object-cover mb-4 rounded">
                    <img src="" alt="" class="w-1/4 h-2/4 object-cover mb-4 rounded">
                </div>

                {{-- Carga Nombre --}}
                <h3 class="text-xl font-bold mb-2">{{ $item->name }}</h3>

                {{-- never forget el price (sin descuento) --}}
                <p class=" ">Precio ${{ $item->attributes->precioUnitario }}</p>

                {{-- Descuento --}}
                <p class=" ">Descuento: ${{ $item->attributes->descuento }}</p>

                {{-- Precio con descuento --}}
                <p class=" ">Precio Final ${{ $item->price }}</p>

                {{-- Precio con descuento por cantidad --}}
                <p class=" ">Subtotal: ${{ $item->price * $item->quantity }}</p>


                <div class="flex space-x-2 mt-2">
                    {{-- form to restar raza --}}
                    <form action="/carrito/disminuir">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <button type="submit" class="w-10 bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700"> -
                        </button>
                    </form>

                    <input class="px-2 py-1 w-6 hover:grey" placeholder="{{ $item->quantity }}" disabled>

                    {{-- form para sumar --}}
                    <form action="/carrito/aumentar">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <button type="submit" class="w-10 bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700"> +
                        </button>
                    </form>
                </div>


                <div class="py-2 grid grid-cols-2 gap-2 mt-2">
                    {{-- materiales, colores, y algunas especificaciones se pueden poner aqui --}}
                    <div>
                        <p class="font-bold">Disponibles: {{ $item->attributes->disponibilidad }} </p> <input
                            class="w-20 hover:grey  " type="text" placeholder="55+">
                    </div>
                    <div>
                        <p class="font-bold">Color: </p> <input class="w-20 hover:grey  " type="text"
                            placeholder="CAQUI">
                    </div>

                    <div class="row-start-2">
                        <p class="font-bold">Material: </p> <input class="w-20 hover:grey  " type="text"
                            placeholder="Roble">
                    </div>
                    <div class="row-start-2">
                        <p class="font-bold">Medidas:
                        <ul>
                            <li>Ancho: {{ $item->attributes->ancho }}</li>
                            <li>Largo: {{ $item->attributes->largo }}</li>
                            <li>Alto: {{ $item->attributes->alto }}</li>
                        </ul>
                        </p> <input class="w-20 hover:grey  " type="text" placeholder="Roble">
                    </div>

                    {{-- informacion adiicional --}}
                </div>
                <p class="py-0"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nisi eos earum vitae
                    consequatur praesentium cumque libero voluptates molestias repellendus, minus, quod molestiae, dolore
                    adipisci commodi qui vero facilis. Soluta.

                    Descripción: {{ $item->attributes->descripcion }}
                </p>


                <button class="w-full bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700">
                    Confirmar compra
                </button>

            </div>
        @endforeach


        <div class="row-span-2 col-start-4 row-start-2">

            <div class="bg-white p-8  shadow-md w-full ">
                <h2 class="font-bold mb-6 text-center">Resumen de Compra</h2>
                <div class="space-y-4">
                    <div class="flex justify-between"> <span class="font-semibold">Subtotal</span>
                        <?php $id = session()->get('alumno'); ?>
                        <span class="font-bold"> ${{ (\Cart::session($id)->getTotal() / 116) * 100 }}</span>
                    </div>
                    <div class="flex justify-between"> <span class="font-semibold">Costo de envío:</span>
                        <span class="">Gratis</span>
                    </div>
                    <div class="flex justify-between text-lg font-bold border-t border-gray-300 pt-4">
                        <span>Total (IVA incluido):</span>
                        <span class="font-bold">${{ \Cart::session($id)->getTotal() }}</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mt-4">Los precios aplican de acuerdo a forma de pago.</p>
            </div>

            <a href="/Catalogo">
                Seguir comprando
            </a>

            <form action="/comprobar/disponibilidad" method="POST">
                @csrf
                <button class="w-full bg-gray-800 text-white py-2 rounded-md hover:gray-500 mt-6">
                    Pagar con PayPal
                </button>
            </form>
        </div>
    </div>




@endsection
