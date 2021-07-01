@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Crear nueva vacante</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.vacancies.store', 'autocomplete' =>'off']) !!}


            {!! Form::hidden('user_id', auth()->user()->id) !!}
            @include('admin.vacancies.partials.form')
           
           {!! Form::submit('Crear Vacante', ['class' => 'btn btn-primary']) !!}


        {!! Form::close() !!}
    </div>
</div>

@stop