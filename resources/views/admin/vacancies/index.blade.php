@extends('adminlte::page')

@section('title', 'vacante')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.vacancies.create')}}">
        Crear nueva vacante
    </a>
    <h1>Listado de vacantes</h1>

@stop

@section('content')

    {{-- componente de livewire  --}}
    @livewire('admin.vacancyindex')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    console.log('Hi!');
    </script>
@stop