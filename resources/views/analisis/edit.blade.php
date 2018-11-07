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
                    Editar Analisis
                </div>

                <div class="panel-body">
                    {!! Form::model($analisi, ['route' => ['analisis.update', $analisi->id], 'method' => 'PUT']) !!}
                        
                        @include('analisis.partials.form')
                        
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
    
@stop