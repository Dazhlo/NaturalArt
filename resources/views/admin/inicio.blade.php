<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin- @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="{{ mix('js/plantillaadmin.js') }}"></script> --}}
    <script src="/js/plantillaadmin.js"></script>




</head>

<body >
    

<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/login/logoorg.png') }}" class="h-10" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Natural Art</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
   
            <a href="#" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Cerrar Seccion</a>
        </div>
    </div>
</nav>

<nav class="bg-gray-50 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Inicio</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">Pedidos</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">Administar Muebles</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">Clientes</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">Ventas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>



    @yield('content')










   

<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/login/logoorg.png') }}" class="h-12" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Natural Art</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Acerca de </a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Politica de Privacidad</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licencias</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contacto</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="" class="hover:underline">X Force™</a>. Todos los derechos reservados.</span>
    </div>
</footer>





</body>


</html>
