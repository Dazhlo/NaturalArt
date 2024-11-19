
@extends('cliente.layout')
 @section('title','Completar perfil')
@section('content')

    <div class="bg-gray-100 flex items-center justify-center m-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Ingresa los siguientes datos</h2>
            <form accion="" method="">
                @csrf
                <div class="mb-4"> <label for="nombre" class="block text-gray-700">Nombre(s) <span
                            class="text-red-500">*</span></label> <input type="text" id="nombre"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                    @error('nombre')
                        <span class="text-red-500"> Inserta un nombre valido </span>
                    @enderror
                </div>

                <div class="mb-4"> <label for="apellidoP" class="block text-gray-700">Apellido Paterno <span
                            class="text-red-500">*</span></label> <input type="text" id="apellidoP"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                        required> </div>
                <div class="mb-4"> <label for="apellidoM" class="block text-gray-700">Apellidos Materno <span
                            class="text-red-500">*</span></label> <input type="text" id="apellidoM"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                        required> </div>
                <div class="mb-4"> <label for="apellidoM" class="block text-gray-700">Fecha de Nacimineto <span
                            class="text-red-500">*</span></label> <input type="date" id="apellidoM"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                        required> </div>

                <div class="mb-4"> <label class="block text-gray-700">Sexo:</label>
                    <div class="flex space-x-4"> <label class="inline-flex items-center"> <input type="radio"
                                name="sexo" value="Mujer" class="form-radio"> <span class="ml-2">Mujer</span> </label>
                        <label class="inline-flex items-center"> <input type="radio" name="sexo" value="Hombre"
                                class="form-radio"> <span class="ml-2">Hombre</span> </label>
                    </div>
                </div>

                <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600">Crear
                    cuenta</button>


                <div class="md-4">
                    <span> Al hacer click acepatas nuestros</span>
                    <a href="#"> <span class="text-red-500"> Terminos, condiciones y avisos de privacidad.</span> </a>
                </div>

            </form>
        </div>
    </div>
@endsection
