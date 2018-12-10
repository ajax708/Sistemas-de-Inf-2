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
	{{ Form::radio('estado', '1') }}Activo
	{{ Form::radio('estado', '0') }}Inactivo
</div>
<div class="form-group">
        <a href="{{route('analisis.index')}}" class="btn btn-sm btn-primary btn-warning">Volver</a>
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    </div>
    
