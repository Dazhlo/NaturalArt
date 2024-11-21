@extends('admin.inicio')
@section('title', 'Home')
@section('content')
    <div class="grid grid-cols-5 grid-rows-2 gap-2">
        <div class="px-20 py-5 row-span-4">
            <div>
                <h1 class="text-2xl font-bold mb-6">Acesos Rapidos </h1>
            </div>
            <a href="">
                <div class="p-6 text-gray-900 dark:text-white hover:underline dark:bg-gray-700 text-center rounded-md  ">
                    Regresar</div>
            </a>
            <br>

            <a href="">
                <div class="p-6 text-gray-900 dark:text-white hover:underline dark:bg-gray-700 text-center rounded-md  ">Ver
                    lista de muebles</div>
            </a>
            <br>
            <a href="">
                <div class="p-6 text-gray-900 dark:text-white hover:underline dark:bg-gray-700  text-center rounded-md  ">
                </div>
            </a> <br>

            {{-- <div class="p-6 dark:bg-gray-700 text-center rounded-md  ">Datos de cuenta
            <hr class="border-gray-500">


            <a href="">
                <h2 class="py-3 mb-6 text-gray-900 ">Actualizar Datos personales</h2>
            </a>

            <a href="">
                <h2 class="py-3 mb-6 text-gray-900">Actualizar Domicilio</h2>
            </a>
        </div> --}}

        </div>



        <div className="grid ">
            <hr>
            <div className="col-span-3 row-span-4 col-start-2 row-start-2">

                <form class="aling" action="">

                    @csrf
                    <div class="mb-4">
                        <br><label for="apellidoP" class="block text-gray-700 text-center">Completa la siguiente inforamcion
                            <span class="text-red-500"></span></label>
                        <label for="apellidoP" class="block text-gray-700">Nombre <span
                                class="text-red-500">*</span></label> <input type="text" id="apellidoP"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="apellidoP" class="w-100 block text-gray-700">Material<span
                                class="text-red-500">*</span></label> <input type="text" id="apellidoP"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="apellidoP" class="w-100 block text-gray-700">Color<span
                                class="text-red-500">*</span></label> <input type="text" id="apellidoP"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="apellidoP" class="w-100 block text-gray-700">Municipio<span
                                class="text-red-500">*</span></label> <input type="text" id="apellidoP"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="apellidoP" class="w-100 block text-gray-700">Colonia<span
                                class="text-red-500">*</span></label> <input type="text" id="apellidoP"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="apellidoP" class="w-100 block text-gray-700">Numero interior/exterior<span
                                class="text-red-500">*</span></label> <input type="text" id="apellidoP"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="apellidoP" class="w-100 block text-gray-700">Indicaciones para la entrega <span
                                class="text-red-500">*</span></label> <input type="text" id="apellidoP"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div>
                    <button type="submit"
                        class="w-full dark:bg-gray-700 text-white py-2 rounded-md mt-2 hover:dark:bg-gray-900">Guardar
                    </button>



                </form>






            </div>
        </div>
        
        <div class=" py-6 bg-gray-200 rounded-md">
            
            <table class="table-auto w-full text-left">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2">ID Pedido</th>
                        <th class="px-4 py-2">ID Pedido</th>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-4 py-2">Pendiente</td>
                            <td class="px-4 py-2">Juan Pérez</td>
                        </tr>



        </div>


    </div>


@endsection
