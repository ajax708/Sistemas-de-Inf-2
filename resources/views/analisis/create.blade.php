
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
	                    Crear Analisis
	                </div>

	                <div class="panel-body">
	                    {!! Form::open(['route' => 'analisis.store']) !!}
	                        
	                        @include('analisis.partials.form')

	                    {!! Form::close() !!}
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@stop




