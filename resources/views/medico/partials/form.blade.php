@include('partials.formPersona')
<div class="form-group">
    {{ Form::label('telefono_laboral', 'Telefono Laboral') }}
    {{ Form::text('telefono_laboral', null, ['class' => 'form-control', 'id' => 'telefono_laboral']) }}
</div>
<div class="form-group">
    {{ Form::label('antiguedad', 'Antiguedad') }}
    {{ Form::date('antiguedad', \Carbon\Carbon::now()) }}
</div>
<div class="form-group">
	{{ Form::label('estado', 'Estado') }}
	{{ Form::select('estado', ['01' => 'Activo', '02' => 'Inactiivo']) }}
</div>
<div class="form-group">
	{{ Form::label('especialidad', 'Especialidad') }}
	{{ Form::select('especialidad', ['01' => 'Activo', '02' => 'Inactiivo']) }}
</div>
<div class="form-group">
	<a href="{{route('analisis.index')}}" class="btn btn-sm btn-primary btn-warning">Volver</a>
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
