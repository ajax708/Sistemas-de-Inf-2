	
<div class="form-group">
    {{ Form::label('clave', 'Clave') }}
    {{ Form::text('clave', null, ['class' => 'form-control', 'id' => 'clave']) }}
</div>
<div class="form-group">
    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
	{{ Form::label('area_id', 'Area') }}
	{{ Form::select('area_id', $areas, null, ['class' => 'form-control']) }}
</div> 
<div class="form-group">
	{{ Form::radio('estado', '1') }}Activo
	{{ Form::radio('estado', '0') }}Inactivo
</div>
<div class="form-group">
	<a href="{{route('analisis.index')}}" class="btn btn-sm btn-primary btn-warning">Volver</a>
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}

</div>
