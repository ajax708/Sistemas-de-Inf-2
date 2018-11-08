
@extends('adminlte::page')

@section('content_header')
	<h1 align="center">Gestion de Analisis</h1>
@stop

@section('content')
    
	<div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header bg-info with-border">
	          	
	          	<h3 class="box-title pull-left">Listado</h3>
	        
	          	<div class="box-tools pull-right" >
	                
	             	<a href="{{route('analisis.create')}}" class="btn btn-primary btn-sm" title="Crear nuevo parametro">Nuevo</a>
	                
	          	</div>
	          	
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-striped table-hover">
              	<thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Clave</th>
	                  <th>Nombre</th>
	                  <th>Area</th>
	                  <th>Estado</th>
	                  <th colspan="3">&nbsp;</th>
	                </tr>
	            </thead>
	            <tbody>
	            	@foreach($analisis as $analis)
						<tr  role="row" class="odd" >
							<td >{{ $analis->id }}</td>
							
							<td >{{ $analis->clave  }}</td>

							<td>{{ $analis->nombre }}</td>

							<td>{{ $analis->area->nombre }}</td>
							
							@if($analis->estado==1)
								<td><span class="label label-success">Activo</span></td>
							@else
								<td><span class="label label-danger">Inactivo</span></td>
							@endif
							
							<td width="5px">
								<a href="{{route('analisis.show',$analis->id)}}" 
									class="btn btn-sm btn-success" title="Ver"><i class="fas fa-eye"></i></a>
							</td>
							<td width="5px">
								<a href="{{route('analisis.edit',$analis->id)}}" 
									class="btn btn-sm btn-primary" title="Parametrizar"><i class="fas fa-cog"></i></a>
							</td>
							<td width="5px">
								<a href="{{route('analisis.edit',$analis->id)}}" 
									class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-edit"></i></a>
							</td>
							<td width="5px">
								 {!! Form::open(['route' => ['analisis.destroy', $analis->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger" title="Borrar">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>                           
                                 {!! Form::close() !!}
							</td>
						</tr>
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

@stop
