@extends('adminlte::page')

@section('content_header')
    <h1 align="center">Medicos</h1>
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
                        <p><strong>id: </strong> {{ $medico->id }}</p>
                        <p><strong>Nombre: </strong> {{ $medico->persona->name }}</p>
                        <p><strong>Email: </strong> {{ $medico->persona->email }}</p>
                        <p><strong>CI: </strong> {{ $medico->persona->ci }}</p>
                        <p><strong>Genero: </strong> {{ $medico->persona->ci }}</p>
                        <p><strong>Telefono:</strong> {{ $medico->persona->telefono }}</p>
                        <p><strong>Celular: </strong> {{ $medico->persona->celular }}</p>
                        <p><strong>Telefono Laboral: </strong> {{ $medico->telefono_laboral }}</p>
                        <p><strong>Celular: </strong> {{ $medico->antiguedadd }}</p>

                        @if($medico->estado == '01')
                            <p><strong>Estado: </strong><span class="label label-success"> Activo</p>
                        @else 
                            <p><strong>Estado: </strong><span class="label label-danger"> Inactivo</p>
                        @endif 
                        
                        <p><strong>Especialidad: </strong> {{ $medico->especialidad }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop





