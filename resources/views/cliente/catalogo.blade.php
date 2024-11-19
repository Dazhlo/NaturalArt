@extends('cliente.layout')
@section('title', 'Catalogo')
@section('content')



    <div class="container mx-auto mt-4">
        <div class="flex">
            <aside class="w-1/4 p-4 bg-white rounded-lg shadow-md mr-4">
                <h2 class="text-xl font-bold mb-4">Filtors</h2>

            </aside>
            <main class="w-3/4">
                <section class="mb-8">
                    <h2 class="text-2xl font-bold mb-4">Catalogo</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <img src=""
                                alt="" class="w-full h-48 object-cover mb-4 rounded">
                            <h3 class="text-xl font-bold mb-2">Mueble epico del tio</h3>
                            <p class="text-red-500">$22,553.00 pavos</p> 
                            <button
                                class="w-full bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700">Agregar al
                                carrito</button>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <img src=""
                                alt="" class="w-full h-48 object-cover mb-4 rounded">
                            <h3 class="text-xl font-bold mb-2">Mueble epico del tio</h3>
                            <p class="text-red-500">$22,553.00 pavos</p> 
                            <button
                                class="w-full bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700">Agregar al
                                carrito</button>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <img src=""
                                alt="" class="w-full h-48 object-cover mb-4 rounded">
                            <h3 class="text-xl font-bold mb-2">Mueble epico del tio</h3>
                            <p class="text-red-500">$22,553.00 pavos</p>
                             <button
                                class="w-full bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700">Agregar al
                                carrito</button>
                        </div>
                    </div>
                </section>

                

            </main>
        </div>
    </div>
@endsection
