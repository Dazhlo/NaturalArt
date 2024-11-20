@extends('cliente.layout')
@section('title', 'Catalogo')
@section('content')

    <div class="grid grid-cols-5 grid-rows-5 gap-4">
        <div class="px-20 py-5 row-span-4">
            <div>
                <h1 class="text-2xl font-bold mb-6">Metodo de pago </h1>
            </div>
            <a href="">
                <div class="p-6 bg-gray-100 text-center rounded-md  "> Mis compras </div>
            </a>
            <br>

            <a href="">
                <div class="p-6 bg-gray-100 text-center rounded-md  ">Metodo de pago</div>
            </a>
            <br>
            <a href="">
                <div class="p-6 bg-gray-100 text-center rounded-md  ">Mi domicilio </div>
            </a> <br>

            <div class="p-6 bg-gray-100 text-center rounded-md  ">Datos de cuenta
                <hr class="border-gray-500">


                <a href="">
                    <h2 class="py-3 mb-6 text-gray-900 ">Actualizar Datos personales</h2>
                </a>

                <a href="">
                    <h2 class="py-3 mb-6 text-gray-900">Actualizar Domicilio</h2>
                </a>
            </div>

        </div>
        

        <form accion="" method="">
            @csrf <br>
            <br>
            <div class="mb-4"> <label for="tarjeta" class="block text-gray-700">Numero de Tarjeta<span
                        class="text-red-500">*</span></label> <input type="text" id="tarjeta"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                @error('nombre')
                    <span class="text-red-500"> Inserta un nombre valido </span>
                @enderror
            </div>

            <div class="mb-4">
                 <label for="apellidoP" class="block text-gray-700">Nombre completo <span
                        class="text-red-500">*</span></label> <input type="text" id="apellidoP"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                    required> </div>
                    <div class="flex"> 
                        <div class="    rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"> 
                            <label for="apellidoP" class="block text-gray-700">Fecha de vencimiento <span
                                class="text-red-500">*</span></label>
                                <input type="text" id="apellidoP"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                    required> 
                                
                        </div>
                        <div class="rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"> 
                            <label for="apellidoP" class="block text-gray-700">Codigo de seguridad <span
                                class="text-red-500">*</span></label>
                                <input type="text" id="apellidoP"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                    required> 

                        </div>
                    </div>
<br>

            <button type="submit" class="pt-2 w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600">Agregar Tarjeta</button>


           

        </form>

       
        <form accion="" method="">
            @csrf <br>
            <br>
            <div class="mb-4"> <label for="tarjeta" class="block text-gray-700">Numero de Tarjeta<span
                        class="text-red-500">*</span></label> <input type="text" id="tarjeta"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                @error('nombre')
                    <span class="text-red-500"> Inserta un nombre valido </span>
                @enderror
            </div>

            <div class="mb-4"> <label for="apellidoP" class="block text-gray-700">Nombre completo <span
                        class="text-red-500">*</span></label> <input type="text" id="apellidoP"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                    required> </div>
                    <div class="flex"> 
                        <div class="    rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"> 
                            <label for="apellidoP" class="block text-gray-700">Fecha de vencimiento <span
                                class="text-red-500">*</span></label>
                                <input type="text" id="apellidoP"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                    required> 
                                
                        </div>
                        <div class="rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"> 
                            <label for="apellidoP" class="block text-gray-700">Codigo de seguridad <span
                                class="text-red-500">*</span></label>
                                <input type="text" id="apellidoP"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                    required> 

                        </div>
                    </div>
<br>

            <button type="submit" class="pt-2 w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600">Agregar Tarjeta</button>


           

        </form>




    </div>
    <div class="row-span-4 col-start-4">3</div>
    </div>
    </div>









@endsection
