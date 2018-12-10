@include('partials.formPersona')

<div class="form-group">
    {{ Form::label('fecha_nacimiento', 'Fecha de Nacimiento') }}
    {{ Form::date('fecha_nacimiento', \Carbon\Carbon::now()) }}
</div>
<div class="form-group">
        {{ Form::label('antiguedad', 'Antiguedad') }}
        {{ Form::date('antiguedad', \Carbon\Carbon::now()) }}
</div>

<div class="form-group">
        <a href="{{route('analisis.index')}}" class="btn btn-sm btn-primary btn-warning">Volver</a>
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    </div>
    
