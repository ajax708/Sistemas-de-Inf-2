
@extends('adminlte::page')

@section('content_header')
	<h1 align="center">Listado de Pacientes</h1>
@stop

@section('content')
    
	<div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header bg-info with-border">
	          	
	          	<h3 class="box-title pull-left">Listado</h3>
	        
	          	<div class="box-tools pull-right" >
	                
	             	<a href="{{route('paciente.create')}}" class="btn btn-primary btn-sm" title="Crear nuevo parametro">Nuevo</a>
	                
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
	            	@foreach($pacientes as $paciente)
									<tr  role="row" class="odd" >
										<td >{{ $paciente->id }}</td>
										
										<td >{{ $paciente->persona->user->name  }}</td>
paciente
										<td>{{ $paciente->persona->user->email }}</td>

										<td>{{ $paciente->persona->ci }}</td>
										
										<td>{{ $paciente->persona->telefono }}</td>

										
									
										<td width="5px">
											<a href="{{route('paciente.show',$paciente->id)}}" 
												class="btn btn-sm btn-success" title="Ver"><i class="fas fa-eye"></i></a>
										</td>
										
										<td width="5px">
											<a href="{{route('paciente.edit',$paciente->id)}}" 
												class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-edit"></i></a>
										</td>
										<td width="5px">
											{!! Form::open(['route' => ['paciente.destroy', $paciente->id], 'method' => 'DELETE']) !!}
																							<button class="btn btn-sm btn-danger" title="Borrar">
																									<i class="fas fa-trash-alt"></i>
																							</button>                           
											{!! Form::close() !!}
										</td>
									</tr>
									@endforeach
                </tbody>
              </table>
              {{$pacientes->render()}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

@stop
