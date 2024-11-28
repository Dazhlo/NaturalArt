@extends('cliente.layout')
@section('title', 'Catalogo')
@section('content')
   
    {{-- Mensajes de error --}}
    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container mx-auto mt-4">
        <div class="flex">
            <aside class="w-1/4 p-4 bg-white rounded-lg shadow-md mr-4">
                <h2 class="text-xl font-bold mb-4">Filtros</h2> <!-- Aquí puedes añadir tus filtros -->
            </aside>
            <main class="w-3/4">
                <section class="mb-8">
                    <h2 class="text-2xl font-bold mb-4">Catálogo</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($muebles as $prod)
                            <div class="bg-white p-4 rounded-lg shadow-md"> 
                                <img src="{{ $prod->image_url }}" alt="{{ $prod->nombre }}" class="w-full h-48 object-cover mb-4 rounded">
                                <h3 class="text-xl font-bold mb-2">{{ $prod->nombre }}</h3>
                                <p class="text-red-500">${{ $prod->precio }}</p>
                                <form action="/carrito/agregar" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $prod->id }}">
                                    <input type="hidden" name="nombre" value="{{ $prod->nombre }}">
                                    <input type="hidden" name="precio" value="{{ $prod->precio }}">
                                    <input type="hidden" name="cantidad" value="1">
                                    <input type="hidden" name="imagen" value="{{ $prod->imagen }}">
                                    <input type="hidden" name="descripcion" value="{{ $prod->descripcion }}">
                                    <input type="hidden" name="descuento" value="{{ $prod->descuento }}">
                                    <input type="hidden" name="disponibilidad" value="{{ $prod->disponibilidad }}">
                                    <input type="hidden" name="ancho" value="{{ $prod->ancho }}">
                                    <input type="hidden" name="largo" value="{{ $prod->largo }}">
                                    <input type="hidden" name="alto" value="{{ $prod->alto }}">
                                    <button class="w-full bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700">
                                        Agregar al carrito
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </section>
            </main>
        </div>
    </div>


@endsection
