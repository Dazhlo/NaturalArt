@extends('admin.inicio')
@section('title', 'Home')
@section('content')


        <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold">Gestión de Productos</h1>
                <div class="flex space-x-4"> <input type="text" class="border border-gray-300 rounded-lg p-2"
                        placeholder="Búsqueda rápida"> <button class="bg-blue-500 text-white rounded-lg px-4 py-2">Búsqueda
                        Avanzada</button> </div>
            </div>
            <div class="overflow-x-auto">
                <table class="table-auto w-full text-left">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2">Imagen</th>
                            <th class="px-4 py-2">Nombre del Producto</th>
                            <th class="px-4 py-2">Precio</th>
                            <th class="px-4 py-2">Activo</th>
                            <th class="px-4 py-2">Stock</th>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-4 py-2"><img src="path/to/image1.jpg" alt="Producto 1"
                                    class="w-16 h-16 object-cover"></td>
                            <td class="px-4 py-2">Color Shine - Amethyst</td>
                            <td class="px-4 py-2">5.99 €</td>
                            <td class="px-4 py-2">No</td>
                            <td class="px-4 py-2">0</td>
                            <td class="px-4 py-2">12345</td>
                            <td class="px-4 py-2"><button
                                    class="bg-blue-500 text-white rounded-lg px-4 py-2">Seleccione</button></td>
                        </tr>
                        <tr class="bg-gray-50 border-b">
                            <td class="px-4 py-2"><img src="path/to/image2.jpg" alt="Producto 2"
                                    class="w-16 h-16 object-cover"></td>
                            <td class="px-4 py-2">Color Shine - Bronzer</td>
                            <td class="px-4 py-2">5.99 €</td>
                            <td class="px-4 py-2">No</td>
                            <td class="px-4 py-2">0</td>
                            <td class="px-4 py-2">12346</td>
                            <td class="px-4 py-2"><button
                                    class="bg-blue-500 text-white rounded-lg px-4 py-2">Seleccione</button></td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-4 py-2"><img src="path/to/image3.jpg" alt="Producto 3"
                                    class="w-16 h-16 object-cover"></td>
                            <td class="px-4 py-2">Gelatos - Blue</td>
                            <td class="px-4 py-2">10.45 €</td>
                            <td class="px-4 py-2">No</td>
                            <td class="px-4 py-2">0</td>
                            <td class="px-4 py-2">12347</td>
                            <td class="px-4 py-2"><button
                                    class="bg-blue-500 text-white rounded-lg px-4 py-2">Seleccione</button></td>
                        </tr>
                        <tr class="bg-gray-50 border-b">
                            <td class="px-4 py-2"><img src="path/to/image4.jpg" alt="Producto 4"
                                    class="w-16 h-16 object-cover"></td>
                            <td class="px-4 py-2">Gelatos - Yellow</td>
                            <td class="px-4 py-2">10.45 €</td>
                            <td class="px-4 py-2">No</td>
                            <td class="px-4 py-2">0</td>
                            <td class="px-4 py-2">12348</td>
                            <td class="px-4 py-2"><button
                                    class="bg-blue-500 text-white rounded-lg px-4 py-2">Seleccione</button></td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-4 py-2"><img src="path/to/image5.jpg" alt="Producto 5"
                                    class="w-16 h-16 object-cover"></td>
                            <td class="px-4 py-2">Cartulina texturizada - Dragonfly</td>
                            <td class="px-4 py-2">0.79 €</td>
                            <td class="px-4 py-2">No</td>
                            <td class="px-4 py-2">0</td>
                            <td class="px-4 py-2">12349</td>
                            <td class="px-4 py-2"><button
                                    class="bg-blue-500 text-white rounded-lg px-4 py-2">Seleccione</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        @endsection