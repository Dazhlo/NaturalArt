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

        @yield('content')
        <div class="col-span-2 row-span-4">
            <h2 class="py-5 text-3xl font-bold mb-6 ">Datos Personales</h2>
            <div class="col-span-2 row-span-2 col-start-2 row-start-2">
                <h2 class="text-xl mb-2">Nombre </h2>
                <h2 class=" mb-6 ">{{$perfil->nombre}}</h2>
            </div>
            <div class="col-span-2 row-span-2 col-start-2 row-start-2">
                <h2 class="text-xl mb-2">Apellidos </h2>
                <h2 class=" mb-6 ">{{$perfil->apellido}}</h2>
            </div>
            <div class="col-span-2 row-span-2 col-start-2 row-start-2">
                <h2 class="text-xl mb-2">Correo electronico </h2>
                <h2 class=" mb-6 ">{{$cliente->correo}}</h2>
            </div>
            <div class="col-span-2 row-span-2 col-start-2 row-start-2">
                <h2 class="text-xl mb-2">Numero telefonico </h2>
                <h2 class=" mb-6 text-red">{{$perfil->telefono}}</h2>
            </div>
            <div class="col-span-2 row-span-2 col-start-2 row-start-2">
                <a href="/perfil/eliminar">
                    <button class="w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600">
                        Eliminar Cuenta
                    </button>
                </a>
            </div>
        </div>
        
        <div class="row-span-4 col-start-4 col-span-2">
            <h2 class="py-9 text-2xl font-bold mb-6 "></h2>
            <div class="col-span-2 row-span-2 col-start-2 row-start-2">
                <h2 class="text-xl mb-2">Foto de perfil </h2>
                <img src="{{$perfil->foto}}" alt="{{$perfil->foto}}" width="80%">
            </div>
        </div>
    </div>
    </div>

@endsection
