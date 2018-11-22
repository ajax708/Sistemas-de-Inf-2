@extends('adminlte::page')

@section('title', 'Nueva Orden')

@section('content_header')
    <h1>Nueva Orden de Analisis</h1>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
<style >
	input[type=number type=date]::-webkit-inner-spin-button, 
input[type=number type=date]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.font-label{
	color: black;
}
</style>
@stop
@section('content')
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
    		<form action="{{ route('orden.store') }}" method="POST" class="form-horizontal" role="form">
    			@csrf
    			<input type="hidden" name="empleado_id" value="{{Auth::user()->persona->id}}">
    		<div class="box box-solid bg-light-blue-gradient">
    			<div class="box-header">
    				<i class="fas fa-table"></i>
    				<h3 class="box-title">Datos</h3>	
    				 <div class="box-tools pull-right">
		                <button type="button" class="btn bg-light-blue btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
    			</div>
    			
				<div class="box-body">
	                <div class="form-group">
	                  <label for="nro_orden" class="col-sm-2 control-label">Nro de Orden</label>

	                  <div class="col-sm-10">
	                    <input type="number" class="form-control" id="nro_orden" name="nro_orden" placeholder="Nro de Orden">
	                  </div>
	                </div>
	                <div class="form-group">
	                	<label for="paciente_id" class="col-sm-2 control-label">Paciente</label>

	                	<div class="col-sm-10">
	                		<select name="paciente_id" id="paciente_id" class="form-control select2" required="required">
	                				<option value="">--SELECCIONE AL PACIENTE--</option>
	                			@foreach (App\Paciente::all() as $paciente)
	                				<option value="{{ $paciente->id }}">{{ $paciente->persona->apellido}} {{ $paciente->persona->nombre }} - {{ $paciente->persona->ci }}</option>
	                			@endforeach
	                		</select>
	                	</div>
	                </div>
	                <div class="form-group">
	                	<label for="medico_id" class="col-sm-2 control-label">Medico</label>

	                	<div class="col-sm-10">
	                		<select name="medico_id" id="medico_id" class="form-control select2" >
	                			<option value="">--SELECCIONE AL MEDICO--</option>
	                			@foreach (App\Medico::all() as $medico)
	                				<option value="{{ $medico->id }}">{{ $medico->persona->apellido}} {{ $medico->persona->nombre }}</option>
	                			@endforeach
	                		</select>
	                	</div>
	                </div>
	                <div class="form-group">
	                	<label for="establecimiento_id" class="col-sm-2 control-label">Establecimiento Medico</label>

	                	<div class="col-sm-10">
	                		<select name="establecimiento_id" id="establecimiento_id" class="form-control select2" >
	                			<option value="">--SELECCIONE Estableciemiento--</option>

	                			@foreach (App\Establecimiento::all() as $establecimiento)
	                				<option value="{{ $establecimiento->id }}">{{ $establecimiento->nombre }}</option>
	                			@endforeach
	                		</select>
	                	</div>
	                </div>
	                <div class="form-group">
	                	<label for="seguro_id" class="col-sm-2 control-label">Seguro</label>

	                	<div class="col-sm-10">
	                		<select name="seguro_id" id="seguro_id" class="form-control select2" >
	                			<option value=''>--Seleccione Aseguradora--</option>
	                			@foreach (App\Aseguradora::all() as $ase)
	                				<option value="{{ $ase->id }}">{{ $ase->nombre }}</option>
	                			@endforeach
	                		</select>
	                	</div>
	                </div>
	                <div class="form-group">
	                  <label for="ingreso" class="col-sm-2 control-label">Fecha de ingreso</label>

	                  <div class="col-sm-10">
	                     <div class="input-group date">
			                  <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                  </div>
			                  <input type="date" class="form-control pull-right mydatepicker" id="ingreso" name="fecha_ingreso">
			             </div>
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="egreso" class="col-sm-2 control-label">Fecha de egreso</label>

	                  <div class="col-sm-10">
	                     <div class="input-group date">
			                  <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                  </div>
			                  <input type="date" class="form-control pull-right mydatepicker" id="egreso" name="fecha_egreso">
			             </div>
	                  </div>
	                </div>   
              </div>		
    			<div class="box-footer">
    				 <div class="form-group">
	                	<label for="analisis[]" class="col-sm-2 control-label font-label">Analisis</label>

	                	<div class="col-sm-10">
	                		<select name="analisis[]" id="analisis[]" class="form-control select2" multiple="multiple">
	                			@foreach (App\Analisis::all() as $anal)
	                				<option value="{{ $anal->id }}" title="{{ $anal->nombre }}">{{ $anal->clave }}</option>
	                			@endforeach
	                		</select>
	                		{{-- @php
	                			$analisis = App\Analisis::all();
	                		@endphp
	                		{!! Form::select("analisis[]", $analisis->pluck('clave','id'), null, ['id'=>'analisis','multiple'=>'multiple','class'=>'form-control select2']) !!} --}}
	                	</div>
	                </div>
    				<button type="submit" class="btn btn-success">Confirmar Orden</button>
    			</div>
    		</div>
    		</form>
    	</div>
    </div>
@stop
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
	<script src="{{ asset('js/orden.js') }}"></script>
@stop