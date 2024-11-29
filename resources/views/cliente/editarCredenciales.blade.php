@extends('cliente.layout')
@section('title', 'Completar perfil')
@section('content')

    <div class="bg-gray-100 flex items-center justify-center m-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Cambia tus claves de acceso</h2>
            <h3>Modifica tú correo o contraseña</h3> <br>

            {{-- En este formulario solo cambia correo y contraseña --}}
            <form accion="/perfil/editar/credenciales" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4"> 
                    <label for="correo" class="block text-gray-700">Correo Electronico
                        <span class="text-red-500">*</span>
                    </label> 
                    <input type="email" name="correo" value="{{$cliente->correo}}" placeholder="ejemplo@correo.com"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                    @error('correo')
                        <span class="text-red-500"> Ingrese un correo valido </span>
                    @enderror
                </div>

                <div class="mb-4"> 
                    <label for="contraseña" class="block text-gray-700">Contraseña
                        <span class="text-red-500">*</span>
                    </label> 
                    <input type="password" name="contraseña" placeholder="********"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"> 
                    @error('contraseña')
                        <span class="text-red-500"> {{$message}} </span>
                    @enderror
                </div>

                <div class="mb-4"> 
                    <label for="contraseña2" class="block text-gray-700">Confirma Contraseña
                        <span class="text-red-500">*</span>
                    </label> 
                    <input type="password" name="contraseña2" placeholder="********"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"> 
                    @error('contraseña2')
                        <span class="text-red-500"> {{$message}} </span>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600">
                    Cambiar Credenciales
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
            
        </div>
    </div>
@endsection
