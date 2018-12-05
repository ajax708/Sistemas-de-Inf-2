@extends('adminlte::page')

@section('title', 'Ordenes de analisis')

@section('content_header')
    <a href="{{ route('persona.create') }}"><button  type="button" class="btn btn-success"> <i class="fas fa-flask"></i> Nuevo Personal Medico</button></a>   
@stop

@section('content')
    <div class="row">
    	<div class="col-xs-12 ">
            <div class="box box-primary">
        		<div class="box-header bg-info with-border">
        			<div class="box-header">
        				<h3 class="box-title">Personal Medico</h3>
        			</div>
        			<div class="box-body">
        				 	<table id="myTable" class="table table-condensed table-hover">
        				 		<thead>
        				 			<tr>
        				 				<th>Nro. Persona</th>
        				 				<th>Nombre</th>
        				 				<th>Apellido</th>
        				 				<th>ci</th>
        				 				<th>Genero</th>
        				 				<th>email</th>
                                        

        				 			</tr>
        				 		</thead>
        				 		<tbody>
        				 			@foreach ($personas as $persona)
        				 				<tr>
        				 					<td>{{ $persona->id }}</td>
        				 					<td>{{ $persona->nombre}}</td>
        				 					<td>{{ $persona->apellido}}</td>
        				 					<td>{{ $persona->ci }}</td>
        				 					<td>{{ $persona->genero }}</td>
        				 					<td>{{ $persona->email }}</td>
                                            <td width="5px">
                                            <a href="{{route('persona.show',$persona->id)}}" 
                                                class="btn btn-sm btn-success" title="Ver"><i class="fas fa-eye"></i></a>
                                            </td>
                                        
                                            <td width="5px">
                                            <a href="{{route('persona.edit',$persona->id)}}" 
                                                class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td width="5px">
                                                {!! Form::open(['route' => ['persona.destroy', $persona->id], 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-sm btn-danger" title="Borrar">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
        				 				</tr>
        				 			@endforeach
        				 		</tbody>
        				 	</table>
        			</div>
        		</div>
            </div>
    	</div>
    </div>
@stop 
@section('js')
<script src="{{ asset('js/orden.js') }}"></script>
@stop