@extends('cliente.layout')
@section('title', 'Catalogo')
@section('content')

    <div class="grid grid-cols-5 grid-rows-5 gap-4">
        <div class="px-20 py-5 row-span-4">
            <div>
                <h1 class="text-2xl font-bold mb-6"> Mi Cuenta </h1>
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


        <div class="col-span-2 row-span-4">
            <h2 class="py-5 text-2xl font-bold mb-6 ">Datos Personales</h2>
            <div class="col-span-2 row-span-2 col-start-2 row-start-2">
                <h2 class="text-xl mb-2">Nombre </h3>
                    <h2 class=" mb-6 ">Fulanito</h2>
            </div>
            <div class="col-span-2 row-span-2 col-start-2 row-start-2">
                <h2 class="text-xl mb-2">Correo electronico </h3>
                    <h2 class=" mb-6 ">Fulanito@gmail.com</h2>
            </div>
            <div class="col-span-2 row-span-2 col-start-2 row-start-2">
                <h2 class="text-xl mb-2">Numero telefonico </h3>
                    <h2 class=" mb-6 ">3322155</h2>
            </div>





        </div>
        <div class="row-span-4 col-start-4">3</div>
    </div>
    </div>









@endsection