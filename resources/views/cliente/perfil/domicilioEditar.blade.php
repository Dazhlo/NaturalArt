@extends('cliente.layout')
@section('title', 'Catalogo')
@section('content')

    <div class="grid grid-cols-5 grid-rows-5 gap-4">
        <div class="px-20 py-5 row-span-4">
            <div>
                <h1 class="text-2xl font-bold mb-6"> Mi Cuenta </h1>
            </div>
            <a href="/pedidos">
                <div class="p-6 bg-gray-100 text-center rounded-md  "> Mis compras </div>
            </a> <br>

            <a href="/domicilio">
                <div class="p-6 bg-gray-100 text-center rounded-md  ">Mi domicilio </div>
            </a> <br>

            <div class="p-6 bg-gray-100 text-center rounded-md  ">Datos de cuenta
                <hr class="border-gray-500">
                <a href="/perfil/editar/datos">
                    <h2 class="py-3 mb-6 text-gray-900 ">Actualizar Datos personales</h2>
                </a>

                <a href="/domicilio/editar">
                    <h2 class="py-3 mb-6 text-gray-900">Actualizar Domicilio</h2>
                </a>
            </div>
        </div>

        <div className="grid grid-cols-5 grid-rows-5 gap-4">
            <hr>
            <h1 style="font-size: 200%"><b><i>Modifica tu Dirección</i></b></h1> <br>
            <div className="col-span-3 row-span-4 col-start-2 row-start-2">

                <form class="aling" action="/domicilio/actualizar" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="estado" class="w-100 block text-gray-700">Estado<span class="text-red-500">*</span></label> 
                        <input type="text" id="estado" name="estado" required value="{{$cliente->estado}}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                        @error('estado')
                            <span class="text-red-500">Dato no valido</span>
                        @enderror
                    </div>
                
                    <div class="mb-4">
                        <label for="municipio" class="w-100 block text-gray-700">Municipio<span class="text-red-500">*</span></label> 
                        <input type="text" id="municipio" name="municipio" required value="{{$cliente->municipio}}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                        @error('municipio')
                            <span class="text-red-500">Dato no valido</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="cp" class="w-100 block text-gray-700">Codigo Postal<span class="text-red-500">*</span></label> 
                        <input type="text" id="cp" name="cp" required value="{{$cliente->cp}}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                        @error('codigoPostal')
                            <span class="text-red-500">Codigo Postal no valido</span>
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="colonia" class="w-100 block text-gray-700">Colonia<span class="text-red-500">*</span></label>
                        <input type="text" id="colonia" name="colonia" required value="{{$cliente->colonia}}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                        @error('colonia')
                            <span class="text-red-500">Dato no valido</span>
                        @enderror
                    </div>

                    <div class="mb-4"> <br>
                        <label for="calle" class="block text-gray-700">Calle<span class="text-red-500">*</span></label> 
                        <input type="text" id="calle" name="calle" required value="{{$cliente->calle}}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                        @error('dirrecion')
                            <span class="text-red-500">Calle no valida</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="noExt" class="w-100 block text-gray-700">Numero exterior<span class="text-red-500">*</span></label> 
                        <input type="text" id="noExt" name="noExt" required value="{{$cliente->no_exterior}}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                        @error('noExt')
                            <span class="text-red-500">Dato no valido</span>
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="noInt" class="w-100 block text-gray-700">Numero interior</label> 
                        <input type="text" id="noInt" name="noInt" value="{{$cliente->no_interior}}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                        @error('noInt')
                            <span class="text-red-500">Dato no valido</span>
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="referencias" class="w-100 block text-gray-700">Referencias</label> 
                        {{-- <input type="text" id="referencias" name="referencias"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"> --}}
                        <textarea name="referencias" id="referencias" cols="30" rows="3"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">{{$cliente->referencias}}</textarea>
                        @error('referencias')
                            <span class="text-red-500">Dato no valido</span>
                        @enderror
                    </div>

                    <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700">
                        Continuar
                    </button>

                </form>
            </div>
        </div>

    </div>

@endsection
