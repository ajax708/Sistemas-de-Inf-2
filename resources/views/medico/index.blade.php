
@extends('adminlte::page')

@section('content_header')
	<h1 align="center">Listado del Personal Medico</h1>
@stop

@section('content')
    
	<div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header bg-info with-border">
	          	
	          	<h3 class="box-title pull-left">Listado</h3>
	        
	          	<div class="box-tools pull-right" >
	                
	             	<a href="{{route('medico.create')}}" class="btn btn-primary btn-sm" title="Crear nuevo parametro">Nuevo</a>
	                
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
	                  <th colspan="4">&nbsp;</th>
	                </tr>
	            </thead>
	            <tbody>
	            	@foreach($medicos as $medico)
									<tr  role="row" class="odd" >
										<td >{{ $medico->id }}</td>
										
										<td >{{ $medico->persona->user->name  }}</td>

										<td>{{ $medico->persona->user->email }}</td>

										<td>{{ $medico->persona->ci }}</td>
										
										<td>{{ $medico->persona->telefono }}</td>

										@if($medico->estado==1)
											<td><span class="label label-success">Activo</span></td>
										@else
											<td><span class="label label-danger">Inactivo</span></td>
										@endif
									
										<td width="5px">
											<a href="{{route('medico.show',$medico->id)}}" 
												class="btn btn-sm btn-success" title="Ver"><i class="fas fa-eye"></i></a>
										</td>
										
										<td width="5px">
											<a href="{{route('medico.edit',$medico->id)}}" 
												class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-edit"></i></a>
										</td>
										<td width="5px">
											{!! Form::open(['route' => ['medico.destroy', $medico->id], 'method' => 'DELETE']) !!}
																							<button class="btn btn-sm btn-danger" title="Borrar">
																									<i class="fas fa-trash-alt"></i>
																							</button>                           
																			{!! Form::close() !!}
										</td>
									</tr>
									@endforeach
                </tbody>
              </table>
              {{$medicos->render()}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

@stop
