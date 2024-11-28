@extends('admin.inicio')
@section('title', 'Home')
@section('content')


    <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold">Gestión de Productos</h1>
            <div class="flex space-x-4"> <input type="text" class="border border-gray-300 rounded-lg p-2"
                    placeholder="Búsqueda rápida"><a href="/Agregar/Muebles"><button class="bg-gray-700 text-white rounded-lg px-4 py-2 hover:dark:bg-gray-900 ">Agregar Muebles
                    </button>  </a>  </div>
        </div>
        <div class="overflow-x-auto">
            <table class="table-auto w-full text-left">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2">Imagen</th>
                        <th class="px-4 py-2">Nombre del Producto</th>
                        <th class="px-4 py-2">Material</th>
                        <th class="px-4 py-2">Precio</th>
                        <th class="px-4 py-2">Stock</th>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Editar</th>
                        <th class="px-4 py-2">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($muebles as $mueble)
                        <tr class="bg-white border-b">
                            <td class="px-4 py-2"><img src="path/to/image1.jpg" alt="Producto 1"
                                    class="w-16 h-16 object-cover"></td>

                            <td class="px-4 py-2">{{ $mueble->nombre }}</td>
                            <td class="px-4 py-2">$ {{ $mueble->meterial }}</td>
                            <td class="px-4 py-2">${{ $mueble->precio }}</td>
                            <td class="px-4 py-2">{{$mueble->stock}}</td>
                            <td class="px-4 py-2">{{ $mueble->id }}</td>

                            <td class="px-4 py-2">
                                <form action="/Mueble/Editar/{{$mueble->id}}">
                                <button type="submit"
                                    class="w-full dark:bg-gray-700 text-white py-2 rounded-md mt-2 hover:dark:bg-gray-900">Editar  </button>
                                </form></td>
                            <td class="px-4 py-2">
                                    <form action="/Mueble/Eliminar/{{$mueble->id}}
                                         " method="POST">  @csrf
                                         @method('DELETE')
                                         <button
                                        class="w-full bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700">Eliminar</button>
                                    </form></td>
                                
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

@endsection
