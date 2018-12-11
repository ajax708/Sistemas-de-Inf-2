
@extends('adminlte::page')
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
	<h1 align="center">Parametros - Resultados</h1>
@stop
@section('css')
<style >
	input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
@stop	
@section('content')
	<div class="row">
	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
		<a href="{{ route('orden.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-circle-left"></i> Atras</a>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
		<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Listado de Analisis</H3>
					</div>
					<div class="box-body">	
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr class="bg-info">
										<th>Nombre</th>
										<th>Clave</th>
										<th>Tipo</th>
										<th>Area</th>
										<th>Opciones</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($analisisx as $analisis)
												<tr>
													
													<td>{{ $analisis->nombre  }}</a></td>
													
													<td>{{$analisis->clave}}</td>
													<td>{{$analisis->tipo}}</td>
													<td>{{$analisis->area->nombre}}</td>
													<td>
													@if(count($resultado->where('analisis_id',$analisis->id)->where('orden_id',$ordenId))==0)
														<button 
															type="button" 
															class="btn  btn-success btn-xs" 
															data-toggle="modal" 
															data-target="#ResultadoModal" 
															data-analisis="{{ $analisis->id}}"
															data-orden="{{ $ordenId }}">
															<i class="fas fa-plus"></i>
														</button>	
													</td>
													@endif
												</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
			</div>
	</div>
</div>
@include('resultado._modals')

@stop

@section('js')
	<script src="{{ asset('js/resultado.js') }}"></script>
@stop

