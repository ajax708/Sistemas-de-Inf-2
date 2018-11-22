@extends('adminlte::page')

@section('title', 'Analisis por orden')

@section('content_header')
    <h1>Orden: {{ $orden->nro_orden }}</h1>
    <h3>Paciente: {{ $orden->paciente->persona->apellido }}</h3>
@stop

@section('content')
    <p>You are logged in!</p>
@stop