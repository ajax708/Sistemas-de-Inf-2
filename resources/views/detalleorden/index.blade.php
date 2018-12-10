@extends('adminlte::page')

@section('title', 'Analisis por orden')

@section('content_header')
    <h1>Orden: {{ $orden->nro_orden }}</h1>
    <h3>Paciente: {{ $orden->paciente->persona->apellido }}</h3>
@stop

@section('content')
<h1>Listado de Analisis</h1>
    @foreach ($orden->analisis as $analisis)
    	<h3>{{ $analisis->clave }}</h3>
        <p>{{$analisis->nombre}}</p>
        @foreach ($analisis->parametros as $item)
            <p>{{$item->nombre}}</p>
        @endforeach
    	<p>--------------------------</p>
    @endforeach
@stop