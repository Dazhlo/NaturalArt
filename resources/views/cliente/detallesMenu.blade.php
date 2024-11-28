@extends('cliente.layout')
@section('title', 'Catalogo')
@section('content')

    <div class="grid grid-cols-5 grid-rows-5 gap-4">
        <div class="px-20 py-5 row-span-4">
            <img src="" alt="" class="w-full h-48 object-cover mb-4 rounded">
            <img src="" alt="" class="w-full h-48 object-cover mb-4 rounded">
            <img src="" alt="" class="w-full h-48 object-cover mb-4 rounded">
        </div>
        
        <div class="col-span-2 row-span-4">
            <div class="col-span-2 row-span-2 col-start-2 row-start-2">

                <img src="{{$mueble->imagen}}" alt="{{$mueble->imagen}}" class="w-full h-48 object-cover mb-4 rounded">

                {{-- name del articulo raza --}}
                <h3 class="text-xl font-bold mb-2">{{$mueble->nombre}}</h3>
                {{-- never forget el price --}}
                <p class=" ">Precio anterior: ${{$mueble->precio}}</p>
                <p class=" ">Ahorras: ${{$mueble->descuento}}</p>
                <p class=" ">Paga: ${{$mueble->precio - $mueble->descuento}}</p>

                {{-- <div class="flex space-x-2 mt-2">      Probablemente no se hagan bros
                    form to restar raza
                    <form class="" action=" ">
                        <button @csrf
                            class="w-10 bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700"> -
                        </button>
                    </form>

                    <input class="px-2 py-1 w-6 hover:grey  " type="text" placeholder="1">
                    form para sumar
                    <form action=" ">
                        <button class="w-10 bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700"> +
                            @csrf 
                        </button>
                    </form>
                </div> --}}

                {{-- <form class="" action=" ">     Probablemente no se hagan bros
                    <label for="color" class="py-5 block mb-2 text-sm font-medium text-gray-900">Color:</label>
                    <select id="Color" name="color" class="">
                        <option selected>Madera</option>
                        <option value="Cafe">Cafe</option>
                    </select>
                </form>

                <input class="w-100 hover:grey  " type="text" placeholder=""> --}}


                <div class="py-2 grid grid-cols-2 gap-2 mt-2">
                    {{-- materiales, colores, y algunas especificaciones se pueden poner aqui --}}
                    <div>
                        <p class="font-bold">Medidas: </p> 
                        <input class="w-21 hover:grey" placeholder="Ancho: {{ $mueble->ancho }}" disabled>
                        <input class="w-21 hover:grey" placeholder="Largo: {{ $mueble->largo }}" disabled>
                        <input class="w-21 hover:grey" placeholder="Alto: {{ $mueble->alto }}" disabled>
                    </div>
                    <div>
                        <p class="font-bold">Disponibles:  </p> 
                        <input class="w-20 hover:grey" placeholder="{{ $mueble->disponibilidad }}" disabled>
                    </div>
                </div>

                {{-- informacion adiicional --}}
                <p class="py-0"> 
                    Descripción: {{ $mueble->descripcion }}
                </p>

                <form action="/carrito/agregar" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $mueble->id }}">
                    <input type="hidden" name="nombre" value="{{ $mueble->nombre }}">
                    <input type="hidden" name="precio" value="{{ $mueble->precio }}">
                    <input type="hidden" name="cantidad" value="1">
                    <input type="hidden" name="imagen" value="{{ $mueble->imagen }}">
                    <input type="hidden" name="descripcion" value="{{ $mueble->descripcion }}">
                    <input type="hidden" name="descuento" value="{{ $mueble->descuento }}">
                    <input type="hidden" name="disponibilidad" value="{{ $mueble->disponibilidad }}">
                    <input type="hidden" name="ancho" value="{{ $mueble->ancho }}">
                    <input type="hidden" name="largo" value="{{ $mueble->largo }}">
                    <input type="hidden" name="alto" value="{{ $mueble->alto }}">
                    <button class="w-full bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700">
                        Agregar al carrito
                    </button>
                    @error('session')
                        <div class="mb-4 text-red-600">
                            {{$message}}
                        </div>
                    @enderror
                    @if ($mensaje)
                        <p>{{$mensaje}}</p>
                    @endif
                </form>

            </div>
            {{-- <div class="row-span-4 col-start-4">3</div> --}}
        </div>
    </div>









@endsection
