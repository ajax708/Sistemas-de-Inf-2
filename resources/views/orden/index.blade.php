@extends('adminlte::page')

@section('title', 'Ordenes de analisis')

@section('content_header')
    <a href="{{ route('orden.create') }}"><button  type="button" class="btn btn-success"> <i class="fas fa-flask"></i> Nueva Orden</button></a>   
@stop

@section('content')
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
    		<div class="box box-solid box-primary">
    			<div class="box-header">
    				<h3 class="box-title">Ordenes de analisis</h3>
    			</div>
    			<div class="box-body">
    				 	<table id="myTable" class="table table-condensed table-hover">
    				 		<thead>
    				 			<tr>
    				 				<th>Nro. Orden</th>
    				 				<th>Paciente</th>
    				 				<th>Medico</th>
    				 				<th>Ingreso</th>
    				 				<th>Egreso</th>
    				 				<th>Total</th>
    				 			</tr>
    				 		</thead>
    				 		<tbody>
    				 			@foreach ($ordenes as $orden)
    				 				<tr>
    				 					<td>{{ $orden->nro_orden }}</td>
    				 					<td>{{ $orden->paciente->persona->nombre}}</td>
    				 					<td>{{ $orden->medico->persona->apellido }}</td>
    				 					<td>{{ $orden->fecha_ingreso }}</td>
    				 					<td>{{ $orden->fecha_egreso }}</td>
    				 					<td>{{ $orden->total }}</td>
    				 				</tr>
    				 			@endforeach
    				 		</tbody>
    				 	</table>
    			</div>
    		</div>
    	</div>
    </div>
@stop 
@section('js')
<script src="{{ asset('js/orden.js') }}"></script>
@stop