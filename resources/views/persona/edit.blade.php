@extends('adminlte::page')

@section('content_header')
	<h1 align="center">Personal Medico</h1>
@stop

@section('content')
	
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Datos
                </div>

                <div class="panel-body">
                    {!! Form::model($persona, ['route' => ['persona.update', $persona->id], 'method' => 'PUT']) !!}
                        
                        @include('persona.partials.form')
                        
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
    
@stop