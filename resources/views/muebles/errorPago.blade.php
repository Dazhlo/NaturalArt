@extends('cliente.layout')
@section('title', 'Error en Pago')
@section('content')

<div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Error de pago</h5>
    {{-- <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Lamentamos no poder haber procesado tu pago, intenta de nuevo o utiliza otra forma de pago.</p> --}}
    <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Transaccion CANCELADA, puedes proceder al pago en cualquier otro momento.</p>
    <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
        
        
</div>

@endsection
