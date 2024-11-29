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
        


        <div className="grid grid-cols-5 grid-rows-5 gap-4">
            <hr>
            <div className="col-span-3 row-span-4 col-start-2 row-start-2">

                <form class="aling" action="/domicilio/guardar" method="POST">
                    @csrf
                    <div class="mb-4">
                        <br>
                        <label for="apellidoP" class="block text-gray-700">Dirrecion / Calle<span
                                class="text-red-500">*</span></label> <input type="text" id="apellidoP" name="calle"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                            @error('dirrecion')
                        <span class="text-red-500">Dirrecion no valida</span>
                    @enderror
                    </div> 
                  
                    <div class="mb-4">
                        <label for="codigoPostal" class="w-100 block text-gray-700">Codigo Postal<span
                                class="text-red-500">*</span></label> <input type="text" id="codigoPostal" name="cp"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                            @error('codigoPostal')
                        <span class="text-red-500">Codigo Postal no valido</span>
                    @enderror
                    </div>   
                    <div class="mb-4">
                        <label for="estado" class="w-100 block text-gray-700">Estado<span
                                class="text-red-500">*</span></label> <input type="text" id="estado" name="estado"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                            @error('estado')
                        <span class="text-red-500">Dato no valido</span>
                    @enderror
                    </div> 
                    </div>
                    <div class="mb-4">
                        <label for="municipio" class="w-100 block text-gray-700">Municipio<span
                                class="text-red-500">*</span></label> <input type="text" id="municipio" name="municipio"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                    </div>         
                    <div class="mb-4">
                        <label for="colonia" class="w-100 block text-gray-700">Colonia<span
                                class="text-red-500">*</span></label> <input type="text" id="colonia" name="colonia"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                            @error('colonia')
                        <span class="text-red-500">Dato no valido</span>
                    @enderror
                    </div>         
                    <div class="mb-4">
                        <label for="numeroDomicilio" class="w-100 block text-gray-700">Numero interior<span
                                class="text-red-500">*</span></label> <input type="text" id="numeroDomicilio" name="numeroInterior"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            >
                            @error('numeroDomicilio')
                        <span class="text-red-500">Dato no valido</span>
                    @enderror
                    </div>  
                    <div class="mb-4">
                        <label for="numeroDomicilio" class="w-100 block text-gray-700">Numero exterior<span
                                class="text-red-500">*</span></label> <input type="text" id="numeroDomicilio" name="numeroExterior"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                            @error('numeroDomicilio')
                        <span class="text-red-500">Dato no valido</span>
                    @enderror
                    </div>  
                    
                    <div class="mb-4">
                        <label for="entregas" class="w-100 block text-gray-700">Indicaciones para la entrega <span
                                class="text-red-500">*</span></label> <input type="text" id="entregas" name="referencias"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                            required>
                            @error('entregas')
                        <span class="text-red-500">Dato no valido</span>
                    @enderror
                    </div>    


                    <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700">Continuar
                    </button>
                  


                </form>   






            </div>
        </div>


    </div>





















@endsection
