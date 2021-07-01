@extends('adminlte::page')

@section('title', 'vacante')

@section('content_header')
    <h1>Editar vacante</h1>
@stop
@section('content')

<div class="card">
    <div class="card-body">
        {!! Form::model($vacancy,['route' => ['admin.vacancies.update', $vacancy],
         'autocomplete' => 'off', 'method' => 'put']) !!}
        <!-- con model y la variable vancacy hago que se cargue la infrmación de la vacante
         para poderla editar -->
        @include('admin.vacancies.partials.form')
        
        {!! Form::submit('Actualizar vacante', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop