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
                    Editar Registro Pacientes
                </div>

                <div class="panel-body">
                    {!! Form::model($paciente, ['route' => ['paciente.update', $paciente->id], 'method' => 'PUT']) !!}
                        
                        @include('paciente.partials.form')
                        
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
    
@stop