@extends('adminlte::page')
@section('title', 'Dashboard')

@if (Auth::user()->hasRole('Developers'))
    @section('content_header')
        <div class="text-center">
            <h1 class="text-3xl text-gray-700 mb-2 uppercase">Vacantes</h1>
        </div>
    @stop

    @section('content')
        <livewire:vacancies-list>
    @stop

@elseif (Auth::user()->hasRole('Recruiter'))
    @section('content_header')
        <div class="text-center">
            <h1 class="text-3xl text-gray-700 mb-2 uppercase">Vacantes publicadas</h1>
        </div>
    @stop

    @section('content')
        <livewire:vacancies-list>
    @stop
    
@elseif (Auth::user()->hasRole('Admin'))
    @section('content_header')
        <div class="text-center">
            <h1 class="text-3xl text-gray-700 mb-2 uppercase">Administrador</h1>
        </div>
    @stop

    @section('content')
        <h1 class="d-flex justify-content-center">¡Bienvenido administrador!</h1>
    @stop

@endif

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@stop

@section('js')
    <script>
    console.log('Hi!');
    </script>
@stop