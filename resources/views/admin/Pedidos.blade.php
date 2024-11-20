@extends('admin.inicio')
@section('title', 'Home')
@section('content')






<div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-1.5">
    <h1 class="text-2xl font-semibold mb-6">Gestión de Pedidos</h1>
    <div class="overflow-x-auto">
        <table class="table-auto w-full text-left">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">ID Pedido</th>
                    <th class="px-4 py-2">Cliente ID</th>
                    <th class="px-4 py-2">Cantidad</th>
                    <th class="px-4 py-2">Total</th>
                    <th class="px-4 py-2">Estado</th>
                    <th class="px-4 py-2">Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b">
                    <td class="px-4 py-2">001</td>
                    <td class="px-4 py-2">1001</td>
                    <td class="px-4 py-2">3</td>
                    <td class="px-4 py-2">150.00 €</td>
                    <td class="px-4 py-2">Pendiente</td>
                    <td class="px-4 py-2">Juan Pérez</td>
                </tr>
                <tr class="bg-gray-50 border-b">
                    <td class="px-4 py-2">002</td>
                    <td class="px-4 py-2">1002</td>
                    <td class="px-4 py-2">1</td>
                    <td class="px-4 py-2">50.00 €</td>
                    <td class="px-4 py-2">Completado</td>
                    <td class="px-4 py-2">María García</td>
                </tr>
                <tr class="bg-white border-b">
                    <td class="px-4 py-2">003</td>
                    <td class="px-4 py-2">1003</td>
                    <td class="px-4 py-2">2</td>
                    <td class="px-4 py-2">100.00 €</td>
                    <td class="px-4 py-2">En Proceso</td>
                    <td class="px-4 py-2">Luis Gómez</td>
                </tr>
                <tr class="bg-gray-50 border-b">
                    <td class="px-4 py-2">004</td>
                    <td class="px-4 py-2">1004</td>
                    <td class="px-4 py-2">5</td>
                    <td class="px-4 py-2">250.00 €</td>
                    <td class="px-4 py-2">Cancelado</td>
                    <td class="px-4 py-2">Ana López</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="grid grid-cols-3 gap-4  mt-3">
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






@endsection