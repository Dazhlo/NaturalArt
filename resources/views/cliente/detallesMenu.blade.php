
@extends('cliente.layout')
@section('title', 'Catalogo')
@section('content')

<div class="grid grid-cols-5 grid-rows-5 gap-4">
    <div class="px-20 py-5 row-span-4">  
     <img src="" alt="" class="w-full h-48 object-cover mb-4 rounded">
     <img src="" alt="" class="w-full h-48 object-cover mb-4 rounded">
     <img src="" alt="" class="w-full h-48 object-cover mb-4 rounded">
        
    </div>
    <div class="col-span-2 row-span-4">
        <div class="col-span-2 row-span-2 col-start-2 row-start-2">
           

            <img src="" alt="" class="w-full h-48 object-cover mb-4 rounded">
           
            {{-- name del articulo raza --}}
            <h3 class="text-xl font-bold mb-2">Mueble epico del tio</h3>
            {{-- never forget el price --}}
            <p class=" ">$22,553.00 claudiaCoins</p>


            <div class="flex space-x-2 mt-2">
                {{-- form to restar raza --}}
                <form class="" action=" "><button
                        class="w-10 bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700"> -
                    </button></form>

                <input class="px-2 py-1 w-6 hover:grey  " type="text" placeholder="1">
                {{-- form para sumar --}}
                <form action=" "><button class="w-10 bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700"> +
                    </button></form>
            </div>
            <form class="" action=" ">
            <label for="color" class="py-5 block mb-2 text-sm font-medium text-gray-900">Color:</label>
  <select id="Color" name="color" class="">
    <option selected>Madera</option>
    <option value="Cafe">Cafe</option>
    {{-- <option value="">Canada</option>
    <option value="">France</option>
    <option value="">Germany</option> --}}
  </select>
</form>
            <input class="w-100 hover:grey  " type="text" placeholder="" >


            <div class="py-2 grid grid-cols-2 gap-2 mt-2">
                {{-- materiales, colores, y algunas especificaciones se pueden poner aqui --}}
                <div>
                    <p class="font-bold">Disponible :</p> <input class="w-20 hover:grey  " type="text" placeholder="55+">
                </div>
                <div>
                   
                </div>

                <div class="row-start-2">
                    <p class="font-bold">Material:</p>  <input class="w-20 hover:grey  " type="text" placeholder="Roble">
                </div>
                <div class="row-start-2">
                    <p class="font-bold">material</p>  <input class="w-20 hover:grey  " type="text" placeholder="Roble">
                </div>
                {{-- informacion adiicional --}}


            </div>
            <p class="py-0"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nisi eos earum vitae
                consequatur praesentium cumque libero voluptates molestias repellendus, minus, quod molestiae, dolore
                adipisci commodi qui vero facilis. Soluta.</p>


            <button class="w-full bg-red-500 text-white py-2 rounded-md mt-2 hover:bg-red-700">Agregar al carrito
            </button>
          


        
    </div>
    <div class="row-span-4 col-start-4">3</div>
</div></div>
    

  
  





@endsection
