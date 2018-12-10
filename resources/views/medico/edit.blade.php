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
                    Editar Registro
                </div>

                <div class="panel-body">
                    {!! Form::model($medico, ['route' => ['medico.update', $medico->id], 'method' => 'PUT']) !!}
                        
                        @include('medico.partials.form')
                        
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
    
@stop