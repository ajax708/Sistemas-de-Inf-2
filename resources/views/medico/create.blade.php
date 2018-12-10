
@extends('adminlte::page')

@section('content_header')
	<h1 align="center">Medicos</h1>
@stop

@section('content')
		@include('partials._errors')
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Registrar Personal Medico
	                </div>

	                <div class="panel-body">
	                    {!! Form::open(['route' => 'medico.store']) !!}
	                        
	                        @include('medico.partials.form')

	                    {!! Form::close() !!}
	                </div>
	            </div>
	        </div>
	    </div>
	
@stop




