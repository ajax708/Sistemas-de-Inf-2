
@extends('adminlte::page')

@section('content_header')
	<h1 align="center">Listado de empleados</h1>
@stop

@section('content')
@include('partials._errors')
	<div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header bg-info with-border">
	          	
	          	<h3 class="box-title pull-left">Listado</h3>
	        
	          	<div class="box-tools pull-right" >
	                
	             	<a href="{{route('empleado.create')}}" class="btn btn-primary btn-sm" title="Crear nuevo parametro">Nuevo</a>
	                
	          	</div>
	          	
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-striped table-hover">
              	<thead>
	                <tr>
	                  <th>Id</th>
	                  <th>Nombre</th>
	                  <th>Email</th>
	                  <th>CI</th>
										<th>Telefono</th>
										
	                  <th colspan="4">&nbsp;</th>
	                </tr>
	            </thead>
	            <tbody>
	            	@foreach($empleados as $empleado)
									<tr  role="row" class="odd" >
										<td >{{ $empleado->id }}</td>
										
										<td >{{ $empleado->persona->user->name  }}</td>

										<td>{{ $empleado->persona->user->email }}</td>

										<td>{{ $empleado->persona->ci }}</td>
										
										<td>{{ $empleado->persona->telefono }}</td>

										
									
										<td width="5px">
											<a href="{{route('empleado.show',$empleado->id)}}" 
												class="btn btn-sm btn-success" title="Ver"><i class="fas fa-eye"></i></a>
										</td>
										
										<td width="5px">
											<a href="{{route('empleado.edit',$empleado->id)}}" 
												class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-edit"></i></a>
										</td>
										<td width="5px">
											{!! Form::open(['route' => ['empleado.destroy', $empleado->id], 'method' => 'DELETE']) !!}
																							<button class="btn btn-sm btn-danger" title="Borrar">
																									<i class="fas fa-trash-alt"></i>
																							</button>                           
											{!! Form::close() !!}
										</td>
									</tr>
									@endforeach
                </tbody>
              </table>
              {{$empleados->render()}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

@stop
