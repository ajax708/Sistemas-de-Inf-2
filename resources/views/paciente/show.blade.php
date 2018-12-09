@extends('adminlte::page')

@section('content_header')
    <h1 align="center">Analisis</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ver Analisis
                    </div>

                    <div class="panel-body">
                        <p><strong>Clave</strong> {{ $analisis->clave }}</p>
                        <p><strong>Nombre</strong> {{ $analisis->nombre }}</p>
                        <p><strong>Area</strong> {{ $analisis->area->nombre }}</p>
                        <p><strong>Estado</strong> {{ $analisis->estado }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop





