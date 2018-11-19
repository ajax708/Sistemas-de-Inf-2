@extends('adminlte::page')

@section('title', 'Parametrizacion')
@section('css')
<style >
	input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
@stop	
@section('content_header')
<div class="row">
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	<a href="{{ route('analisis.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-circle-left"></i> Atras</a>
</div>
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
	<h3 align="center" style="margin: auto;">Parametrizacion de: <b>{{ $analisis->clave }}</b> </h3>
</div>
</div>
@stop

@section('content')
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">			
	    <div class="box box-primary box-solid">
	    	<div class="box-header with-border">
	    		<h3 class="box-title">Crear parametro</h3>
	    	</div>
	    	<div class="box-body">
	    		<form action="{{ route('paranalisis.store') }}" method="POST" class="form-inline" role="form">
	    			@csrf
	    			<input type="hidden" name="analisis_id" value="{{ $analisis->id }}">

	    			<div class="form-group ">
	    				<input type="text" class="form-control" name="nombre" placeholder="Parametro" required="true" >
	    			</div>
	    			
	    			<div class="form-group ">
	    				<input type="number" name="cant_resultados" required="true" placeholder="# Resul" size="5" class="form-control">
	    			</div>
	    			<div class="form-group ">
	    				{!! Form::select('tipo', ['01'=>'01','02'=>'02','03'=>'03'], '01', ['placeholder' => 'Tipo', 'class'=>'form-control', 'required'=>'true']) !!}
	    			</div>
	    			<div class="form-group ">
	    				{!! Form::select('unidad_medida_id', $unidades->pluck('nombre','id'), $unidades->first()->id,['placeholder' => 'Unidad', 'class'=>'form-control', 'required'=>'true']) !!}
	
	    			</div>
	    			<div class="form-group ">
	    				<button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
	    			</div>
	    			
	    		</form>
	    	</div>
	    </div>		
    	</div>
    </div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
			<div class="box box-primary">
	    			<div class="box-header with-border">
	    				<h3 class="box-title">Listado de parametros</H3>
	    			</div>
	    			<div class="box-body">	
	    				<div class="table-responsive">
	    					<table class="table table-hover">
	    						<thead>
	    							<tr class="bg-info">
	    								<th>Nombre</th>
	    								<th># Resultados</th>
	    								<th>Tipo</th>
	    								<th>Unidad</th>
	    								<th>Val. Cuantitativos</th>
	    								<th>Val. Cualitativos</th>
	    								<th>Opciones</th>
	    							</tr>
	    						</thead>
	    						<tbody>
	    						@foreach($parametros as $parametro)
                					<tr>
                						
                						<td>{{ $parametro->nombre  }}</a></td>
				                		
				                		<td>{{$parametro->cant_resultados}}</td>
				                		<td>{{$parametro->tipo}}</td>
				                		<td>{{$parametro->unidadDeMedida->nombre}}</td>
				                		<td>
				                			@foreach($parametro->cuantitativos as $cuantitativo)
				                			<button type="button" class="btn  btn-default btn-xs" onclick="" >{{$cuantitativo->rango_inicial}} - {{$cuantitativo->rango_final}} <i class="fas fa-pencil-alt"></i></button>
				                			@endforeach
				                			<button type="button" class="btn  btn-success btn-xs" data-toggle="modal" data-target="#cuantitativoModal" data-parametro={{ $parametro->id }}><i class="fas fa-plus"></i></button>
				                		</td>
				                		<td>
				                			@foreach($parametro->cualitativos as $cualitativo)
				                			<button type="button" class="btn  btn-default btn-xs" onclick="" >{{$cualitativo->valor}} <i class="fas fa-times"></i></button>
				                			
				                			@endforeach
				                			
				                			<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#cualitativoModal" data-parametro={{ $parametro->id }}><i class="fas fa-plus"></i></button>
				                		</td>
				                		<td>
				                			<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal" data-action='{{ route('paranalisis.update',['parametro'=>$parametro->id]) }}' data-analisis="{{$analisis->id}}" data-nombre="{{ $parametro->nombre}}" data-res="{{ $parametro->cant_resultados}}" data-tipo="{{ $parametro->tipo }}" data-uni='{{ $parametro->unidad_medida_id }}'><i class="fas fa-pencil-alt"></i> </button>
				                			{!! Form::open(['route' => ['paranalisis.destroy', $parametro->id], 'method' => 'DELETE', 'class'=>'inline']) !!}
                                       			 <button class="btn btn-sm btn-danger" title="Borrar"><i class="fas fa-trash-alt"></i>
                                        		</button>                           
                                 			{!! Form::close() !!}
				                		</td>
                					</tr>
                				@endforeach
	    						</tbody>
	    					</table>
	    				</div>
	    			</div>
	    	</div>
		</div>
	</div>

@include('paranalisis._modals')

@stop

@section('js')
	<script src="{{ asset('js/paranalisis.js') }}"></script>
@stop