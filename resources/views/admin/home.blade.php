@extends('admin.inicio')
@section('title', 'Home')
@section('content')



    <div class="col-span-3 row-span-4 col-start-2 row-start-2">
        <!-- Grid principal -->
        <div class="grid grid-cols-3 gap-2 flex-auto">
            <!-- Primer div más pequeño -->
            <div class="col-span-1 rounded-lg shadow p-4">
                <h2 class="text-lg font-semibold text-left">Nombre</h2>
            </div>
            <!-- Segundo div más cercano al primero -->
            <div class="col-span-1 rounded-lg shadow p-4 ml-2">
                <h2 class="text-lg font-semibold text-center">Admins</h2>
            </div>
            <!-- Tercer div con la misma separación -->
            <div class="col-span-1 rounded-lg shadow p-4 ml-4">
                <h2 class="text-lg font-semibold text-right">Diciembre 3, 2024 - Diciembre 20, 2024</h2>
            </div>
        </div>



        <!-- Saludo -->
        <h1 class="text-2xl font-semibold mb-4 mt-5">Hola Nombre 👋</h1>

        <!-- Resumen de actividad -->
        <div class="mb-6">
            <p class="text-lg">Tienes ✅ 0 Entrgas aprobadas y ⏰ 0 Pedidos pendientes</p>
        </div>

        <!-- Estadísticas -->
        <div class="grid grid-cols-3 gap-4">
            <div class="bg-blue-100 p-4 rounded-lg shadow">
                <h2 class="text-lg font-semibold">Pedidos aprobadas</h2>
                <p class="text-2xl font-bold">0</p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow">
                <h2 class="text-lg font-semibold">Ventas Totales</h2>
                <p class="text-2xl font-bold">20</p>
            </div>
            <div class="bg-yellow-100 p-4 rounded-lg shadow">
                <h2 class="text-lg font-semibold">Ingresos</h2>
                <p class="text-2xl font-bold">$0.00</p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold">Gestión de Pedidos</h1>
                
            </div>
            <div class="overflow-x-auto">
                <table class="table-auto w-full text-left">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2">Nº Pedido</th>
                            <th class="px-4 py-2">Total Pedido</th>
                            <th class="px-4 py-2">Estado</th>
                            <th class="px-4 py-2">Cliente</th>
                            <th class="px-4 py-2">Fecha Pedido</th>
                            <th class="px-4 py-2">Forma de Pago</th>
                            <th class="px-4 py-2">Gastos Transp.</th>
                            <th class="px-4 py-2">Observaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-4 py-2">804874</td>
                            <td class="px-4 py-2">84.02 €</td>
                            <td class="px-4 py-2 flex items-center">
                                <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div> Aprobado
                            </td>
                            <td class="px-4 py-2">Cliente 1</td>
                            <td class="px-4 py-2">05-03-2020 11:42</td>
                            <td class="px-4 py-2">PayPal</td>
                            <td class="px-4 py-2">Envío Correos Express</td>
                            <td class="px-4 py-2"></td>
                        </tr>
                        <tr class="bg-gray-50 border-b">
                            <td class="px-4 py-2">804836</td>
                            <td class="px-4 py-2">95.44 €</td>
                            <td class="px-4 py-2 flex items-center">
                                <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div> Aprobado
                            </td>
                            <td class="px-4 py-2">Cliente 2</td>
                            <td class="px-4 py-2">05-03-2020 09:28</td>
                            <td class="px-4 py-2">Tarjeta</td>
                            <td class="px-4 py-2">Envío Correos Express</td>
                            <td class="px-4 py-2"></td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-4 py-2">804833</td>
                            <td class="px-4 py-2">44.85 €</td>
                            <td class="px-4 py-2 flex items-center">
                                <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div> Aprobado
                            </td>
                            <td class="px-4 py-2">Cliente 3</td>
                            <td class="px-4 py-2">05-03-2020 09:22</td>
                            <td class="px-4 py-2">Tarjeta</td>
                            <td class="px-4 py-2">Envío Correos Express</td>
                            <td class="px-4 py-2"></td>
                        </tr>
                        <tr class="bg-gray-50 border-b">
                            <td class="px-4 py-2">804820</td>
                            <td class="px-4 py-2">348.17 €</td>
                            <td class="px-4 py-2 flex items-center">
                                <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div> Aprobado
                            </td>
                            <td class="px-4 py-2">Cliente 4</td>
                            <td class="px-4 py-2">05-03-2020 09:12</td>
                            <td class="px-4 py-2">Transferencia</td>
                            <td class="px-4 py-2">Envío Correos Express</td>
                            <td class="px-4 py-2"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



    </div>





@endsection
