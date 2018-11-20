@extends('adminlte::page')

@section('content_header')
	<h1 align="center">Analisis</h1>
@stop

@section('content')


<section  id="contenido_principal">

<div class="box box-primary box-gris">

     <div class="box-header">
        <h4 class="box-title">Analisis</h4>	 
        <input type="hidden"  id="url_raiz_proyecto" value="{{ url("/") }}" />
        <form   action="{{ url('buscar_usuario') }}"  method="post"  >
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
				<div class="input-group input-group-sm">
					<input type="text" class="form-control" id="dato_buscado" name="dato_buscado" required>
					<span class="input-group-btn">
					<input type="submit" class="btn btn-primary" value="buscar" >
					</span>

				</div>
						
        </form>


		<div class="margin" id="botones_control">
              <a href="javascript:void(0);" class="btn btn-xs btn-primary" onclick="cargar_formularios('/Analisis/create');">Agregar Analisis</a>
              <a href="{{ url("/listado_analisis") }}"  class="btn btn-xs btn-primary" >Listado Analisis</a> 
              <a href="javascript:void(0);" class="btn btn-xs btn-primary" onclick="cargar_formulario_analisis(2);">Areas</a> 
              <a href="javascript:void(0);" class="btn btn-xs btn-primary" onclick="cargar_formulario_analisis(3);" >Clinicas</a>                                 
		</div>

    </div>

<div class="box-body box-white">

    <div class="table-responsive" >

	    <table  class="table table-hover table-striped text-left" cellspacing="0" width="100%">
				<thead>
						<tr>    <th>codigo</th>
								<th>Clave</th>
								<th>Nombre</th>
							    <th>Area</th>
							    <th>Opciones</th>
						</tr>
				</thead>
	    <tbody>

	    @foreach($analisis as $analis)
		<tr  role="row" class="odd" >
			<td >{{ $analis->id }}</td>
			
			<td class="mailbox-messages mailbox-name"><a href="javascript:void(0);"  style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp;{{ $analis->clave  }}</a></td>

			<td>{{ $analis->nombre }}</td>

			<td>{{ $analis->area->nombre }}</td>
			
			<td>
			<button type="button" class="btn  btn-default btn-xs" onclick="editar_formulario('/Analisis',{{  $analis->id }})" ><i class="fa fa-fw fa-edit"></i></button>
			<a href="{{route('parametroanalisis.index', ['analisis' => $analis->id])}}"><button type="button" class="btn  btn-default btn-xs" ><i class="fa fa-fw fa-wrench"></i></button>	</a>
			
			<button type="button"  class="btn  btn-danger btn-xs"  onclick="borrado_usuario({{  $analis->id }});"  ><i class="fa fa-fw fa-remove"></i></button>
			</td>
		</tr>
	    @endforeach



		</tbody>
		</table>

	</div>
</div>




{{ $analisis->links() }}

@if(count($analisis)==0)


<div class="box box-primary col-xs-12">

<div class='aprobado' style="margin-top:70px; text-align: center">
 
<label style='color:#177F6B'>
              ... no se encontraron resultados para su busqueda...
</label> 

</div>

 </div> 


@endif

</div></section>
@stop

