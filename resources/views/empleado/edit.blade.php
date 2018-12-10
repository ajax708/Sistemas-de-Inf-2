@extends('adminlte::page')

@section('content_header')
	<h1 align="center">Empleado</h1>
@stop

@section('content')
	
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Registro Pacientes
                </div>

                <div class="panel-body">
                    {!! Form::model($empleado, ['route' => ['paciente.update', $empleado->id], 'method' => 'PUT']) !!}
                        
                        @include('empleado.partials.form')
                        
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
    
@stop