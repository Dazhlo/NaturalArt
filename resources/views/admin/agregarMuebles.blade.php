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
                        <br><label for="" class="block text-gray-700 text-center">Completa la siguiente informacion
                            <span class="text-red-500"></span></label>
                        <label for="nombre" class="block text-gray-700">Nombre <span
                                class="text-red-500">*</span></label> <input type="text" id="nombre" name="nombre"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="meterial" class="w-100 block text-gray-700">Material<span
                                class="text-red-500">*</span></label> <input name="meterial" type="text" id="meterial<"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div><
                    <div class="mb-4">
                        <label for="color" class="w-100 block text-gray-700">Color<span
                                class="text-red-500">*</span></label> <input name="color" type="text" id="color"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="precio" class="w-100 block text-gray-700">Precio<span
                                class="text-red-500">*</span></label> <input name="precio" type="text" id="precio"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="descuento" class="w-100 block text-gray-700">Descuento  <span
                                class="text-red-500">*</span></label> <input name="descuento" type="text" id="descuento"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="stock" class="w-100 block text-gray-700">Disponibilidad (Stock)<span
                                class="text-red-500">*</span></label> <input name="stock" type="text" id="stock"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="descripcion" class="w-100 block text-gray-700">Descripcion<span
                                class="text-red-500">*</span></label> <textarea  name="descripcion" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                                 id="descripcion" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="apellidoP" class="w-100 block text-gray-700">Seleciona la imagen principal<span
                            class="text-red-500">*</span></label>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"> </div>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"> </div>
                    </div>
                    <button type="submit"
                        class="w-full dark:bg-gray-700 text-white py-2 rounded-md mt-2 hover:dark:bg-gray-900">Guardar
                    </button>

                   
                      


                </form>






            </div>
        </div>
        
        
        <div class=" py-6  rounded-md">
            <form class="aling" action="">
               

            </form>
            

        </div>
        <div class=" py-6 bg-gray-200 rounded-md">
            
            <table class="table-auto w-full text-left">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2">ID Categora</th>
                        <th class="px-4 py-2">Categoria</th>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-500 border-b">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">Interior</td>
                        </tr>
                    </tbody>
                </table>


        </div>



    </div>


@endsection
