@extends('adminlte::page')

@section('content_header')
    <h1 align="center">Pacientes</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ver Registro
                    </div>

                    <div class="panel-body">
                        <p><strong>id: </strong> {{ $paciente->id }}</p>
                        <p><strong>Nombre: </strong> {{ $paciente->persona->name }}</p>
                        <p><strong>Email: </strong> {{ $paciente->persona->email }}</p>
                        <p><strong>CI: </strong> {{ $paciente->persona->ci }}</p>
                        <p><strong>Genero: </strong> {{ $paciente->persona->ci }}</p>
                        <p><strong>Telefono:</strong> {{ $paciente->persona->telefono }}</p>
                        <p><strong>Celular: </strong> {{ $paciente->persona->celular }}</p>
                        <p><strong>Fecha de Nacimiento: </strong> {{ $paciente->fecha_nacimiento }}</p>
                        <p><strong>Celular: </strong> {{ $paciente->antiguedadd }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop





