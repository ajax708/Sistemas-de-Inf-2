@extends('adminlte::page')

@section('content_header')
    <h1 align="center">Empleados</h1>
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
                        <p><strong>id: </strong> {{ $empleado->id }}</p>
                        <p><strong>Nombre: </strong> {{ $empleado->persona->name }}</p>
                        <p><strong>Email: </strong> {{ $empleado->persona->email }}</p>
                        <p><strong>CI: </strong> {{ $empleado->persona->ci }}</p>
                        <p><strong>Genero: </strong> {{ $empleado->persona->ci }}</p>
                        <p><strong>Telefono:</strong> {{ $empleado->persona->telefono }}</p>
                        <p><strong>Celular: </strong> {{ $empleado->persona->celular }}</p>
                        @if($empleado->estado == '01')
                            <p><strong>Estado: </strong><span class="label label-success"> Activo</p>
                        @else 
                            <p><strong>Estado: </strong><span class="label label-danger"> Inactivo</p>
                        @endif 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop





