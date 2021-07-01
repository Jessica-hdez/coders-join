<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plataforma desarrolladores</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        header {
            background:url('https://images.pexels.com/photos/2653362/pexels-photo-2653362.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        }
    </style>

</head>

<body class="antialiased">
    <!-- ++++++++++++++++++++ HEADER BEGIN ++++++++++++++++++++ -->
    <div>
        <header x-data="{ isOpen: false }">
            <nav class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                    <a class="text-xl font-bold text-white transition-colors duration-300 transform md:text-2xl hover:text-indigo-400" href="#"><img src="https://ibb.co/dQF8YZp" alt="" class="w-40 h-20"></a>

                    <!-- Mobile menu button -->
                    <div @click="isOpen = !isOpen" class="flex md:hidden">
                        <button type="button" class="text-gray-200 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                  
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/user/profile') }}" class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition-colors duration-300 transform border rounded hover:bg-indigo-400 underline">Mi cuenta</a>
                        @else
                            <a href="{{ route('login') }}" class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition-colors duration-300 transform border rounded hover:bg-indigo-400 text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-indigo-400">Iniciar sesión</a>
            
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition-colors duration-300 transform border rounded hover:bg-indigo-400">Registrarse</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>

            <section class="flex items-center justify-center" style="height: 500px;">
                <div class="text-center">
                    <p class="text-xl font-medium tracking-wider text-gray-300">Encuentra el trabajo soñado</p>
                    <h2 class="mt-6 mx-4 text-3xl font-bold text-white md:text-5xl">tenemos para ti las mejores ofertas disponibles en el mercado laboral</h2>

                    <div class="flex justify-center mt-8">
                        <a  href="{{ route('register') }}" class="px-2 py-2 text-lg font-medium text-white transition-colors duration-300 transform bg-indigo-600 rounded hover:bg-indigo-500 mr-4 md:mr-10 md:px-8">Publicar perfil</a>
                        <a  href="{{ route('register') }}" class="px-2 py-2 text-lg font-medium text-white transition-colors duration-300 transform bg-indigo-600 rounded hover:bg-indigo-500 md:px-8">Publicar vacante</a>
                    </div>
                </div>              
            </section>
        </header>
        <!-- ++++++++++++++++++++ HEADER CLOSE ++++++++++++++++++++ -->

        
        <!-- ++++++++++++++++++++ FILTER BEGIN ++++++++++++++++++++ -->
        <section>
            <div class="max-w-5xl px-6 pb-6 mx-auto">
                <div class="container px-6 mx-auto">
                    <div class="grid gap-8 mt-6 sm:grid-cols-2 md:grid-cols-4">
                        <select class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>Eqypt</option>
                            <option>Germany</option>
                            <option>US</option>
                        </select>
                        <select class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>I20</option>
                            <option>GXR</option>
                            <option>BMW</option>
                        </select>
                        <select class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>GTX2020</option>
                            <option>GRE2019</option>
                        </select>
                        <button class="px-4 py-2 font-medium tracking-wide text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            Filtrar
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- ++++++++++++++++++++ FILTER CLOSE ++++++++++++++++++++ -->


        <!-- ++++++++++++++++++++ ABOUT US BEGIN ++++++++++++++++++++ -->
        <section class="bg-white">
            <div class="max-w-5xl px-6 pt-14 pb-6 mx-auto text-center">
                <h2 class="text-3xl font-semibold text-gray-800">¿Por qué publicar en <I>platform name</I>?</h2>
                <p class="max-w-lg mx-auto mt-4 text-gray-600">Estamos enfocados en la rama laboral del <B>desarrollo,</B> por lo que aquí encontrarás la recopilación de las mejores ofertas laborales de esta comunidad.</p>
            </div>
        </section>
        <!-- ++++++++++++++++++++ ABOUT US CLOSE ++++++++++++++++++++ -->


        <!-- ++++++++++++++++++++ PROCESS BEGIN ++++++++++++++++++++ -->
        <section class="bg-gray-100">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="md:flex md:justify-between">
                    <h2 class="text-3xl font-semibold text-gray-800">¿Cómo lo hacemos?</h2>
                    <!-- <a href="#" class="block mt-6 text-indigo-700 underline md:mt-0">Experienced team</a> -->
                </div>

                <div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
                    <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md">
                        <h2 class="text-xl font-medium text-gray-800">Paso 1</h2>
                        <p class="max-w-md mt-4 text-gray-500"><B>Publica tu perfil</B> de la menra más completa posible, esto le dará más elementos a la empresa para escoger el talento de la manera más oportuna.</p>
                    </div>

                    <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md">
                        <h2 class="text-xl font-medium text-gray-800">Paso 2</h2>
                        <p class="max-w-md mt-4 text-gray-500"><B>Postulate</B> a aquellas ofertas laborales que te llamen la atención y sean acordes a tu perfil.</p>
                    </div>

                    <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md">
                        <h2 class="text-xl font-medium text-gray-800">Paso 3</h2>
                        <p class="max-w-md mt-4 text-gray-500">Realiza el <B>proceso de selección</B> de las empresas que se comuniquen contigo, y ya está <B>¡Firma la oportunidad de tu vida!</B></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ++++++++++++++++++++ PROCESS CLOSE ++++++++++++++++++++ -->

        
        <!-- ++++++++++++++++++++ IMAGES BEGIN ++++++++++++++++++++ -->
        <div>
            <div class="block md:flex justify-between">
                <div class="w-full lg:w-1/2 mb-4">
                    <div class="bg-white overflow-hidden shadow relative">
                        <img class="h-56 w-full object-cover object-center" src="https://images.unsplash.com/photo-1457282367193-e3b79e38f207?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1654&q=80" alt="">
                        <div class="px-8 py-4 h-auto md:h-40 lg:h-48">
                            <div class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">Alcanza el trabajo de tus sueños</div>
                            <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">Obtén mejores ganancias trabajando en los proyectos que sueñas como desarrollador freelance.</div>
                            <button class="px-4 py-2 my-6 font-medium tracking-wide text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Publica tu perfil</button>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 mb-4">
                    <div class="bg-white overflow-hidden shadow relative">
                        <img class="h-56 w-full object-cover object-center" src="https://images.unsplash.com/photo-1465188162913-8fb5709d6d57?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="">
                        <div class="px-8 py-4 h-auto md:h-40 lg:h-48">
                            <div class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                Encuenta los mejores desarrolladores
                            </div>
                            <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
                                Queremos que obtengas los mejores resultados, por eso aquí encontrarás los mejores desarrolladores para lograr el proyecto que planeas.
                            </div>
                            <button class="px-4 py-2 my-6 font-medium tracking-wide text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                Publica tu proyecto
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ++++++++++++++++++++ IMAGES CLOSE ++++++++++++++++++++ -->
        

        <!-- ++++++++++++++++++++ RECENT OFFERS BEGIN ++++++++++++++++++++ -->
        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto text-center">
                <h2 class="text-3xl font-semibold text-gray-800">Ofertas más recientes</h2>
                <p class="max-w-lg mx-auto mt-4 text-gray-600">¡Queremos que alcances tus propósitos! Por eso aquí encontrarás las mejores ofertas del mercado, especialmente clasificadas para tu perfil como desarrollador.</p>

                <livewire:vacancies-list>
            </div>
        </section>
        <!-- ++++++++++++++++++++ RECENT OFFERS CLOSE ++++++++++++++++++++ -->


        <!-- ++++++++++++++++++++ FOOTER BEGIN ++++++++++++++++++++ -->
        <footer class="w-full h-64 flex   items-center justify-center bg-black">
            <div class="md:w-2/3 w-full px-4 text-white flex flex-col">
                <div class="w-full text-4xl font-bold">
                    <h1 class="w-full md:w-2/3">How can we help you. get in touch</h1>
                </div>
                <div class="flex mt-8 flex-col md:flex-row md:justify-between">
                    <p class="w-full md:w-2/3 text-gray-400">To ensure that all Wikipedia content is verifiable, anyone may question an uncited claim. If your work has been tagged</p>
                    <div class="w-44 pt-6 md:pt-0">
                        <a class="block px-8 py-2 mt-6 text-lg font-medium text-center text-white transition-colors duration-300 transform bg-indigo-600 rounded md:mt-0 hover:bg-indigo-500">Contact US</a>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="bg-black   ">
            <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-left">
                <!-- Col-1 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Getting Started
                    </div>

                    <!-- Links -->

                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Installation
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Release Notes
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Upgrade Guide
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Using with Preprocessors
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Optimizing for Production
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Browser Support
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        IntelliSense
                    </a>
                </div>

                <!-- Col-2 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Core Concepts
                    </div>

                    <!-- Links -->
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Utility-First
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Responsive Design
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Hover, Focus, & Other States
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Dark Mode
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Adding Base Styles
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Extracting Components
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Adding New Utilities
                    </a>
                </div>

                <!-- Col-3 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Customization
                    </div>

                    <!-- Links -->
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Configuration
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Theme Configuration
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Breakpoints
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Customizing Colors
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Customizing Spacing
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Configuring Variants
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Plugins
                    </a>
                </div>

                <!-- Col-3 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Community
                    </div>

                    <!-- Links -->
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        GitHub
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Discord
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Twitter
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        YouTube
                    </a>
                </div>
            </div>

            <!-- Copyright Bar -->
            <div class="pt-2">
                <div class="flex pb-5 px-3 m-auto pt-5 
                border-t border-gray-500 text-gray-400 text-sm 
                flex-col md:flex-row max-w-6xl">
                    <div class="mt-2">
                        © Copyright 1998-year. All Rights Reserved.
                    </div>

                    <!-- Required Unicons (if you want) -->
                    <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                        <a href="#" target="_blank" class="w-6 mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" target="_blank" class="w-6 mx-1">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" target="_blank" class="w-6 mx-1">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" target="_blank" class="w-6 mx-1">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" target="_blank" class="w-6 mx-1">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ++++++++++++++++++++ FOOTER CLOSE ++++++++++++++++++++ -->
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>      
    <!-- ++++++++++++++++++++ FOOTER BEGIN ++++++++++++++++++++ -->
<!-- <x-footer /> -->
  


        
