@extends('cliente.layout')
@section('title', 'Catalogo')
@section('content')


  
    <div class="py-0 grid grid-cols-5 grid-rows-5 gap-4 bg-white p-4 rounded-lg shadow-md mx-auto">
        {{-- chavales aqui es muy importante poner la imagen del mueble --}}
        <div class="col-span-2 row-span-2 col-start-2 row-start-2">


            <img src="" alt="" class="w-full h-48 object-cover mb-4 rounded">
            <div class="flex">
                <img src="" alt="" class="w-1/4 h-2/4 object-cover mb-4 rounded">
                <img src="" alt="" class="w-1/4 h-2/4 object-cover mb-4 rounded">
                <img src="" alt="" class="w-1/4 h-2/4 object-cover mb-4 rounded">
            </div>
            {{-- name del articulo raza --}}
            <h3 class="text-xl font-bold mb-2">Mueble epico del tio</h3>
            {{-- never forget el price --}}
            <p class=" ">$22,553.00 claudiaCoins</p>


            <div class="flex space-x-2 mt-2">
                {{-- form to restar raza --}}
                <form class="" action=" "><button
                        class="w-10 bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700"> -
                    </button></form>

                <input class="px-2 py-1 w-6 hover:grey  " type="text" placeholder="1">
                {{-- form para sumar --}}
                <form action=" "><button class="w-10 bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700"> +
                    </button></form>
            </div>




            <div class="py-2 grid grid-cols-2 gap-2 mt-2">
                {{-- materiales, colores, y algunas especificaciones se pueden poner aqui --}}
                <div>
                    <p class="font-bold">Disponible :</p> <input class="w-20 hover:grey  " type="text" placeholder="55+">
                </div>
                <div>
                    <p class="font-bold">Color:</p> <input class="w-20 hover:grey  " type="text" placeholder="CAQUI">
                </div>

                <div class="row-start-2">
                    <p class="font-bold">Material:</p>  <input class="w-20 hover:grey  " type="text" placeholder="Roble">
                </div>
                <div class="row-start-2">
                    <p class="font-bold">material</p>  <input class="w-20 hover:grey  " type="text" placeholder="Roble">
                </div>
                {{-- informacion adiicional --}}


            </div>
            <p class="py-0"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nisi eos earum vitae
                consequatur praesentium cumque libero voluptates molestias repellendus, minus, quod molestiae, dolore
                adipisci commodi qui vero facilis. Soluta.</p>


            <button class="w-full bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700">Confirmar compra
            </button>
          

        </div>


        <div class="row-span-2 col-start-4 row-start-2">
            
            <div class="bg-white p-8  shadow-md w-full ">
                <h2 class="font-bold mb-6 text-center">Resumen de Compra</h2>
                <div class="space-y-4">
                    <div class="flex justify-between"> <span class="font-semibold">Subtotal</span>
                        <span class="font-bold"> $32,999.00</span> </div>
                
                    <div class="flex justify-between"> <span class="font-semibold">Costo de envío:</span>
                        <span class="">Gratis</span> </div>
                    <div class="flex justify-between text-lg font-bold border-t border-gray-300 pt-4"> <span>Total (IVA
                            incluido):</span> <span class="font-bold" >$19,799.40</span> </div>
                </div>
                <p class="text-sm text-gray-600 mt-4">Los precios aplican de acuerdo a forma de pago.</p>
            </div>
             
           <a href="/Catalogo"> <button class="w-full bg-gray-800 text-white py-2 rounded-md hover:gray-500 mt-6">Seguir comprando</button>   </a> 
        </div>
    </div>




@endsection
