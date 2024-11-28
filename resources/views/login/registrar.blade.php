<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-700 h-screen flex flex-col items-center justify-center">

    <nav class="bg-white border-gray-200 dark:bg-gray-800 w-full fixed top-0">
        <div class="max-w-screen-xl mx-auto p-4 flex justify-center items-center">
            <a href="###" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/login/logo1.png') }}" class="h-10" alt="logo" />
                <span class="text-2xl font-semibold dark:text-white">Natural Art</span>
            </a>
        </div>
    </nav>

    <hr style="margin-top: 10%">
    
    <div class="flex-grow flex justify-center items-center w-full mt-16">
        <div class="flex flex-col items-center bg-white shadow-lg rounded-lg p-8 space-y-8 w-full max-w-lg">
            @error('e_mensaje') <span class="text-red-500">{{$message}}</span> <br> @enderror
            @error('e_correo') <span class="text-red-500">{{$message}}</span> <br> @enderror
            @error('e_telefono') <span class="text-red-500">{{$message}}</span> <br> @enderror

            <form action="/registrarse" method="POST" class="w-full space-y-6">
                @csrf
                <!-- Usuario -->
                {{-- <div class="mb-4">
                    <label for="usuario" class="block text-gray-700">Usuario <span class="text-red-500">*</span></label>
                    <input type="text" id="usuario" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 "placeholder="Ingrese Usuario">
                    @error('nombre')
                        <span class="text-red-500">Inserta un usuario valido</span>
                    @enderror
                </div> --}}

                <!-- Nombre -->
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700">Nombre <span class="text-red-500">*</span></label>
                    <input type="text" name="nombre" value="" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingrese Nombre">
                    @error('nombre')
                        <span class="text-red-500">Inserta un nombre valido</span>
                        {{-- <span class="text-red-500">{{$message}}</span> de esta forma tambien funciona --}}
                    @enderror
                </div>

                <!-- Apellido -->
                <div class="mb-6">
                    <label for="apellidos" class="block text-gray-700">Apellidos <span class="text-red-500">*</span></label>
                    <input type="text" name="apellido" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingrese apellido">
                    @error('apellido')
                        <span class="text-red-500">Inserta uno o varios apellidos validos</span>
                    @enderror
                </div>
                
                <!-- Correo Electrónico -->
                <div class="mb-6">
                    <label for="correo" class="block text-gray-700">Correo Electrónico <span class="text-red-500">*</span></label>
                    <input type="email" name="correo" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingrese correo">
                    @error('correo')
                        <span class="text-red-500">Inserta un correo electronico valido</span>
                    @enderror
                </div>

                <!-- Contraseña -->
                <div class="mb-6">
                    <label for="contraseña" class="block text-gray-700">Contraseña <span class="text-red-500">*</span></label>
                    <input type="password" name="contraseña" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingrese contraseña">
                    @error('contraseña')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                
                <!-- Repetir Contraseña -->
                <div class="mb-6">
                    <label for="contraseña" class="block text-gray-700">Confirma tu Contraseña <span class="text-red-500">*</span></label>
                    <input type="password" name="contraseña2" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingrese contraseña">
                    @error('contraseña2')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <!-- Teléfono -->
                <div class="mb-6">
                    <label for="telefono" class="block text-gray-700">Número de Teléfono </label>
                    <input type="text" name="telefono" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Ingresa tu número">
                    @error('telefono')
                        <span class="text-red-500">Inserta un telefono valido</span> <br>
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex items-center justify-center">
                    <button type="submit" class="w-52 h-12 shadow-sm rounded-full bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 text-white text-base font-semibold leading-7">Crear Cuenta</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
