
@extends('adminlte::page')

@section('content_header')
	<h1 align="center">ANALISIS - RESULTADOS</h1>
@stop

@section('content')
    
	<div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header bg-info with-border">
	          	
	          	<h3 class="box-title pull-left">Listado Analisis</h3>
	        
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-striped table-hover">
              	<thead>
	                <tr>
	                  <th>ID</th>
	                  
	                  <th>Nombre</th>
	                  
	                  <th colspan="4">&nbsp;</th>
	                </tr>
	            </thead>
	            <tbody>
	            	@foreach($analisis as $analis)
						@if($analis->estado==1)
						<tr  role="row" class="odd" >
							
								<td >{{ $analis->id }}</td>

								<td>{{ $analis->nombre }}</td>	

								<td>
								<button type="button" 
								class="btn btn-primary btn-sm" 
								data-toggle="modal" 
								data-target="#editModal" 
								data-action='{{ route('resultado.update',['analisis'=>$analis->id]) }}' 
								data-analisis="{{$analis->id}}" >
								
								<i class="fas fa-pencil-alt"></i> 
								</button>
								</td>
						</tr>
						@endif
					@endforeach
                </tbody>
              </table>
              {{$analisis->render()}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

@include('resultado.partials._modals')

@stop
@section('js')
	<script src="{{ asset('js/resultado.js') }}"></script>
@stop