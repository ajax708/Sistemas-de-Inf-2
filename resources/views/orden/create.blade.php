@extends('adminlte::page')

@section('title', 'Nueva Orden')

@section('content_header')
    <h1>Nueva Orden de Analisis</h1>
@stop

@section('content')
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
    		<div class="box box-solid box-success">
    			<div class="box-header">
    				<h3 class="box-title">Crear Nueva Orden de Analisis</h3>
    			</div>
    			<div class="box-body">
    				{!! Form::open(['route' => 'orden.store']) !!}
                            
                            @include('orden.partials.form')

                    {!! Form::close() !!}
    			</div>
    		</div>
    	</div>
    </div>
@stop