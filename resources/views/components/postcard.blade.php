<div>
    <img class="object-cover object-center w-full h-64 rounded-md shadow" src="https://picsum.photos/240/150/?random">
    <h2 class="mt-2 font-medium text-gray-700">{{$vacancy->name}}</h2>
    <p class="text-sm text-gray-600">{{$vacancy->excerpt}}</p>
    <button class='px-4 py-2 font-medium tracking-wide text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500'>
        <a href="{{ route ('vacancy', $vacancy->id) }}">
            <span>Ver vacante</span>
        </a>
    </button>
</div>


<link rel="stylesheet" href="{{asset('css/app.css')}}">