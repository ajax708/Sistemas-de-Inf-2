
@extends('adminlte::page')

@section('content_header')
	<h1 align="center">Analisis</h1>
@stop

@section('content')
    
	<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header bg-info">
	          	<div class="col-xs-6 col-md-4">
	          		<h3 class="box-title">Listado de Analisis</h3>
	          	</div>

	          	<div class="box-tools col-xs-6 col-md-2" >
	                <div class="input-group mb-3" style="width: 150px;">
	                  	<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
	                  	<div class="input-group-btn">
	                    	<button type="submit" class="btn btn-default pull-left"><i class="fa fa-search"></i></button>
	                  	</div>
	                </div>
	          	</div>
	          	<div class="col-xs-6 col-md-4">
	              	<a href="{{route('analisis.create')}}" class="btn btn-default btn-primary">Crear</a>
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
	                  <th>Status</th>
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
							
							<td width="10px">
								<a href="{{route('analisis.show',$analis->id)}}" 
									class="btn btn-sm btn-success">Ver</a>
							</td>
							<td width="10px">
								<a href="{{route('analisis.edit',$analis->id)}}" 
									class="btn btn-sm btn-warning">Editar</a>
							</td>
							<td width="10px">
								 {!! Form::open(['route' => ['analisis.destroy', $analis->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
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
