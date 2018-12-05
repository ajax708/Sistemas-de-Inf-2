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
                        Ver Ficha Personal
                    </div>

                    <div class="panel-body">
                        <p><strong>Nombre </strong> {{ $persona->nombre }}</p>
                        <p><strong>CI </strong> {{ $persona->ci }}</p>
                        <p><strong>E-mail </strong> {{ $persona->email }}</p>persona
                        <p><strong>Telefono </strong> {{ $persona->telefono }}</p>
                        <p><strong>Celular </strong> {{ $persona->celular }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop





