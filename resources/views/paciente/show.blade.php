@extends('adminlte::page')

@section('content_header')
    <h1 align="center">Paciente</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ver Ficha de Paciente
                    </div>

                    <div class="panel-body">
                        
                        <p><strong>Nombre</strong> {{ $paciente->user->name }}</p>
                        <p><strong>E-mail</strong> {{ $paciente->user->email }}</p>
                        <p><strong>Area</strong> {{ $paciente->fecha_nacimiento }}</p>
                        <p><strong>Estado</strong> {{ $paciente->estado_civil }}</p>
                        <p><strong>Estado</strong> {{ $paciente->genero }}</p>
                        <p><strong>Ultima Visita</strong> {{ $paciente->ultima_solicitud }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop





