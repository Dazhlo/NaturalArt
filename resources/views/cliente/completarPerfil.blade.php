@extends('cliente.layout')
@section('title', 'Completar perfil')
@section('content')

    <div class="bg-gray-100 flex items-center justify-center m-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Edita tú Perfil</h2>
            <h3>Modifica los datos que deses cambiar</h3> <br>

            <form accion="/perfil/editar/datos" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4"> 
                    <label for="nombre" class="block text-gray-700">Nombre(s) 
                        <span class="text-red-500">*</span>
                    </label> 
                    <input type="text" name="nombre" value="{{$perfil->nombre}}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                    @error('nombre')
                        <span class="text-red-500"> Nombre no pude estar vacio </span>
                    @enderror
                </div>

                <div class="mb-4"> 
                    <label for="apellido" class="block text-gray-700">Apellidos
                        <span class="text-red-500">*</span>
                    </label> 
                    <input type="text" name="apellido" value="{{$perfil->apellido}}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"> 
                    @error('apellido')
                        <span class="text-red-500"> Apellido no pude estar vacio </span>
                    @enderror
                </div>
                <div class="mb-4"> 
                    <label for="imagen" class="block text-gray-700">Foto
                    </label> 
                    <img src="{{$perfil->foto}}" alt="{{$perfil->foto}}" class="w-full h-48 object-cover mb-4 rounded">
                    <input type="file" name="imagen" accept="image/*" value=""
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"> 
                </div>
                <div class="mb-4"> 
                    <label for="telefono" class="block text-gray-700">Telefono
                    </label> 
                    <input type="text" name="telefono" value="{{$perfil->telefono}}" placeholder="## #### ####"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"> 
                    @error('telefono')
                        <span class="text-red-500"> {{$message}} </span>
                    @enderror
                </div>
                {{-- <div class="mb-4"> 
                    <label for="apellidoM" class="block text-gray-700">Fecha de Nacimineto 
                        <span class="text-red-500">*</span>
                    </label> 
                    <input type="date" id="apellidoM" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"> 
                </div>

                <div class="mb-4"> 
                    <label class="block text-gray-700">Sexo:</label>
                    <div class="flex space-x-4"> <label class="inline-flex items-center"> <input type="radio"
                                name="sexo" value="Mujer" class="form-radio"> <span class="ml-2">Mujer</span> </label>
                        <label class="inline-flex items-center"> <input type="radio" name="sexo" value="Hombre"
                                class="form-radio"> <span class="ml-2">Hombre</span> </label>
                    </div>
                </div> --}}

                <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600">
                    Editar Datos
                </button>

                <div class="md-4">
                    <span> Al hacer click acepatas nuestros</span>
                    <a href="#"> <span class="text-red-500"> Terminos, condiciones y avisos de privacidad.</span> </a>
                </div>

            </form>

            @if ($mensaje)
                <div class="md-4">
                    <span class="text-green-500 font-bold"> {{$mensaje}} </span>
                </div>
            @endif

            @error('e_mensaje')<ul><li><span class="text-red-500">{{$message}}</span></li>@enderror
            @error('e_correo') <li><span class="text-red-500">{{$message}}</span></li>@enderror
            @error('e_telefono')<li><span class="text-red-500">{{$message}}</span></li></ul>@enderror

            <div class="flex items-center space-x-2" style="margin-top: 10%; margin-bottom: 10%">
                <div class="flex-1 border-t border-gray-300"></div>
                <span class="text-gray-500 text-sm">O</span>
                <div class="flex-1 border-t border-gray-300"></div>
            </div>

            <a href="/perfil/editar/credenciales">
                <button class="w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600">
                    Cambia Tus Credenciales De Acceso
                </button>
            </a>
            
        </div>
    </div>
@endsection
