@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Crear nueva categoría</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.categories.store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre categoría') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre de la categoría']) !!}

            @error('name')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        {!! Form::submit('Crear categoría', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

