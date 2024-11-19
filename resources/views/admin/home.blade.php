@extends('admin.inicio')
@section('title', 'Home')
@section('content')

<div class="mx-auto bg-white shadow-lg rounded-lg p-6">
     <h1 class="text-2xl font-semibold mb-4">Hola Nombre 👋</h1>
      <div class="mb-6"> <p class="text-lg">Tienes ✅ 0 Entrgas aprobadas y ⏰ 0 Pedidos pendientes</p>
     </div>
      <div class="grid grid-cols-3 gap-4"> 
        <div class="bg-blue-100 p-4 rounded-lg shadow"> 
            <h2 class="text-lg font-semibold">Reservas aprobadas</h2>
             <p class="text-2xl font-bold">0</p>
             </div>
              <div class="bg-green-100 p-4 rounded-lg shadow">
                 <h2 class="text-lg font-semibold">Ventas Totales</h2>
                  <p class="text-2xl font-bold">20</p> </div>
                   <div class="bg-yellow-100 p-4 rounded-lg shadow">
                     <h2 class="text-lg font-semibold">Ingresos</h2> 
                     <p class="text-2xl font-bold">$0.00</p> 
                    </div>
                 </div>
                 </div>


@endsection