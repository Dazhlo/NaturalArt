<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body class="bg-gray-700 flex flex-col justify-center items-center min-h-screen">

    <nav class="bg-white border-gray-200 dark:bg-gray-800 w-full fixed top-0">
        <div class="max-w-screen-xl mx-auto p-4 flex justify-center items-center">
            <a href="###" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/login/logoorg.png') }}" class="h-10" alt="logo" />
                <span class="text-2xl font-semibold dark:text-white">Natural Art</span>
            </a>
        </div>
    </nav>

    {{-- Mensajes de error --}}
    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="flex-grow flex justify-center items-center w-full">
        <div class="flex flex-col items-center bg-white shadow-lg rounded-lg p-8 space-y-8 w-full max-w-lg">
            <div class="w-32 h-32">
                <img src="{{ asset('images/login/logoorg.png') }}" alt="Logo" class="object-contain mx-auto">
            </div>

            {{-- Formulario para iniciar sesion --}}
            <form action="/iniciar" method="POST" class="w-full space-y-6">
                @csrf
                <div class="relative text-gray-500 focus-within:text-gray-900">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 21V20.1429C20 19.0805 20 18.5493 19.8997 18.1099C19.5578 16.6119 18.3881 15.4422 16.8901 15.1003C16.4507 15 15.9195 15 14.8571 15H10C8.13623 15 7.20435 15 6.46927 15.3045C5.48915 15.7105 4.71046 16.4892 4.30448 17.4693C4 18.2044 4 19.1362 4 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                stroke-width="1.6" stroke-linecap="round" />
                        </svg>
                    </div>

                    {{-- correo --}}
                    <input type="email" name="correo" placeholder="ejemplo@correo.com"
                        class="block w-full h-11 pr-5 pl-12 py-2.5 text-base font-normal shadow-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-full placeholder-gray-400 focus:ring-red-500 focus:border-red-500 focus:outline-none">
                </div>
                <div class="relative text-gray-500 focus-within:text-gray-900">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="stroke-current" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            height="24" viewBox="0 0 448 512">
                            <path
                                d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                        </svg>
                    </div>

                    {{-- contraseña --}}
                    <input type="password" name="contraseña" placeholder="********"
                        class="block w-full h-11 pr-5 pl-12 py-2.5 text-base font-normal shadow-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-full placeholder-gray-400 focus:ring-red-500 focus:border-red-500 focus:outline-none">
                </div>

                <button type="submit"
                    class="w-full bg-red-500 text-white py-2 rounded-md shadow-md  hover:bg-gray-800">
                    INGRESAR
                </button>

                <div class="flex items-center space-x-2">
                    <div class="flex-1 border-t border-gray-300"></div>
                    <span class="text-gray-500 text-sm">O</span>
                    <div class="flex-1 border-t border-gray-300"></div>
                </div>

                <a href="/registrarse" class="w-full bg-red-500 text-white py-2 rounded-md shadow-md hover:bg-gray-800">
                    REGISTRARSE
                </a>

                <div class="flex justify-center space-x-4">
                    <a href="/auth/google"
                        class="w-10 h-10 rounded-full bg-gray-700 text-white flex items-center justify-center hover:bg-indigo-600">
                        <img src="{{ asset('images/login/LogoGoogle.png') }}" alt="Google"
                            class="object-contain w-6 h-6">
                    </a>
                </div>
            </form>

        </div>
    </div>

</body>

</html>
