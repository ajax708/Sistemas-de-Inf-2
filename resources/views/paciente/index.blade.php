
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
	                  <th>ID</th>
	                  <th>Nombre</th>
	                  <th>Fecha de Nacimiento</th>
	                  <th>Email</th>
	                  <th>Estado Civil</th>
	                  <th>Genero</th>
	                  <th colspan="4">&nbsp;</th>
	                </tr>
	            </thead>
	            <tbody>
	            	@foreach($pacientes as $paciente)

						<tr  role="row" class="odd" >
							<td >{{ $paciente->id }}</td>
							
							<td >{{ $paciente->user->name  }}</td>

							<td>{{ $paciente->fecha_nacimiento }}</td>
							
							<td>{{ $paciente->user->email }}</td>

							@if($paciente->estado_civil==1)
								<td>Soltero(a)</td>
							@elseif($paciente->estado_civil==2)
								<td>Casado(a)</span></td>
							@else
								<td>Viudo(a)</span></td>
							@endif

							@if($paciente->genero==1)
								<td><span class="fa-male">Masculino</span></td>
							@else
								<td><span class="fa-female">Femenino</span></td>
							@endif
							
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
