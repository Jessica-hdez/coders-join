<div>
    <div class="bg-gray-800">
        <h1 class="text-white text-bold text-center"> Detalle de la vacante </h1>
        <div class="grid row ">
            <!-- component -->
            <div class="grid grid-cols-1 gap-2 p-8 justify-items-center">
                <article class=" bg-gray-100 bg-opacity-25 mb-5 bg-teal-100 border border-gray-200 rounded shadow-md mt-4 w-1/2">
                    <div class="p-3">
                        <a href="#">
                            <img src="https://picsum.photos/240/150/?random" alt="Placeholder" class="rounded rounded-b-none w-full ">
                            <h2
                                class="text-lg text-white text-center font-bold truncate uppercase rounded-xl tracking-wider">
                                {{$vacancy->name}}
                            </h2>
                        </a>
                        <p class="text-lg text-white truncate">{{$vacancy->excerpt}}</p>
                        <img src="{{ $vacancy->user->avatar }}" class="rounded-full mt-4 mx-auto h-16 w-16">
                    </div>
                </article>
            </div>
            <button class='mx-auto bg-blue-800 text-white rounded ml-auto flex items-center gap-1 sm:text-lg  border border-gray-300 px-3 py-1  hover:bg-blue-600 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500 mb-2'>
                <a href="{{ route ('dashboard') }}">
                    <span>Volver</span>
                </a>
            </button>
            <button class='mx-auto bg-blue-800 text-white rounded ml-auto flex items-center gap-1 sm:text-lg  border border-gray-300 px-3 py-1  hover:bg-blue-600 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500 mb-2'>
                <a href="{{ route ('login') }}">
                    <span>Aplicar</span>
                </a>
            </button>
            <h2 class="text-white text-center">Ver más vacantes</h2>
        </div>
        <livewire:vacancies-list>
        <button class='mx-auto bg-blue-800 text-white rounded ml-auto flex items-center gap-1 sm:text-lg  border border-gray-300 px-3 py-1  hover:bg-blue-600 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
            <a href="{{ route ('dashboard') }}">
                <span>Volver</span>
            </a>
        </button>

    </div>
    <x-footer />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</div>