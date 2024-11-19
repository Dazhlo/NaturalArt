<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Natural Art México - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body>
    <nav class="border-solid border-gray-200 w-full border-b py-3 bg-white z-50 bg-inherit">
        <div class="bg-gray-100 p-4">
            <div class="container mx-auto"> <!-- Navegación superior -->
                <div class="flex justify-between items-center">
                    <div class="text-center">
                        <h1 class="text-2xl font-bold">Natural Art</h1> <!-- Imagen -->
                    </div>
                    <div class="flex items-center space-x-4"> <a href="#" class="text-gray-600">Mis Compras</a> <a
                            href="/menu" class="text-gray-600">Iniciar sesión</a> <a href="#"
                            class="text-gray-600"><i class="fas fa-lock"></i></a> </div>
                </div> <!-- Barra de búsqueda -->
                <div class="mt-4"> <input type="text" placeholder="Buscar por producto, marca y más..."
                        class="w-full p-2 border border-gray-300 rounded"> </div> <!-- Navegación principal -->
                <div class="mt-4 flex justify-between items-center"> <a href="#" class="text-gray-600">Todo 
                    </a> <a href="#" class="text-gray-600">Muebles</a> <a href="#"
                        class="text-gray-600">Escritorios</a> <a href="#" class="text-gray-600">Colecciones</a> <a
                        href="#" class="text-gray-600">Roperos</a> <a href="#"
                        class="text-gray-600">Decoración</a> <a href="#" class="text-gray-600">Decoración de
                        interior</a> </div> <!-- Subcategorías -->
                <div class="mt-4 bg-white p-4 shadow">

                </nav>


                
@yield('content')










                    <footer class="bg-gray-800 text-white py-8">
                        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
                            <div>
                                <h3 class="font-bold mb-2">Ayuda</h3>
                                <ul>
                                    <li><a href="" class="hover:underline">Preguntas Frecuentes</a></li>
                                    <li><a href="#" class="hover:underline">Información de Envío</a></li>
                                    <li><a href="#" class="hover:underline">Devoluciones</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="font-bold mb-2">Servicios</h3>
                                <ul>
                                    <li><a href="#" class="hover:underline">Mesa de Regalos</a></li>
                                    <li><a href="#" class="hover:underline">Trade Alliance</a></li>
                                    <li><a href="#" class="hover:underline">Facturación</a></li>
                                    <li><a href="#" class="hover:underline">Design Crew</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="font-bold mb-2">Atención al Cliente</h3>
                                <ul>
                                    <li><a href="t#" class="hover:underline">332345667</a></li>
                                    <li><a href="#"
                                            class="hover:underline">postventa@naturalArt.com.mx</a></li>
                                    <li><a href="#" class="hover:underline">Promociones y Sorteos</a></li>
                                </ul>
                                <h3 class="font-bold mt-4 mb-2">Nuestra Compañía</h3>
                                <ul>
                                    <li><a href="#" class="hover:underline">Shop for Good</a></li>
                                    <li><a href="#" class="hover:underline">Acerca de West Elm</a></li>
                                    <li><a href="#" class="hover:underline">Bolsa de trabajo</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="font-bold mb-2">Encuentra nuestra tienda</h3>
                                <ul>
                                    <li><a href="#" class="hover:underline">Ubicaciones</a></li>
                                </ul>
                                <h3 class="font-bold mt-4 mb-2">Tu cuenta</h3>
                                <ul>
                                    <li><a href="#" class="hover:underline">Mis Compras</a></li>
                                    <li><a href="#" class="hover:underline">Administrar Mi Cuenta</a></li>
                                    <li><a href="#" class="hover:underline">Mapa del Sitio</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="container mx-auto text-center text-sm mt-8">
                            <p>El formato de los precios puede verse afectado por las configuraciones y diferencia de
                                navegadores.</p>
                            <p class="mt-2">© Términos y condiciones / Aviso de Privacidad © 2024 / | Natural Art | Todos
                                los derechos reservados N.A. ®</p>
                        </div>
                        <div class="bg-gray-700 text-center py-2 mt-4">
                            <p>Al navegar en este sitio aceptas el uso de cookies, las cuales nos ayudan a mejorar tu
                                experiencia de navegación. <a href="#" class="text-red-500 hover:underline">Más
                                    información</a></p>
                        </div>
                    </footer>



</body>


</html>
