
@extends('adminlte::page')

@section('content_header')
	<h1 align="center">Empleados</h1>
@stop

@section('content')
		@include('partials._errors')
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Registrar Empleado
	                </div>

	                <div class="panel-body">
	                    {!! Form::open(['route' => 'empleado.store']) !!}
	                        
	                        @include('empleado.partials.form')

	                    {!! Form::close() !!}
	                </div>
	            </div>
	        </div>
	    </div>
	
@stop




