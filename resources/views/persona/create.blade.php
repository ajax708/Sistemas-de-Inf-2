
@extends('adminlte::page')

@section('content_header')
	<h1 align="center">Personal</h1>
@stop

@section('content')
		@include('partials._errors')
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Registar Personal
	                </div>

	                <div class="panel-body">
	                    {!! Form::open(['route' => 'persona.store']) !!}
	                        
	                        @include('persona.partials.form')

	                    {!! Form::close() !!}
	                </div>
	            </div>
	        </div>
	    </div>
	
@stop




