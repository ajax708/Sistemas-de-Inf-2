	
<div class="form-group">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('fecha_naciemiento', 'Fecha de Nacimiento') }}
    {{ Form::date('fecha_nacimiento', \Carbon\Carbon::now()) }}
</div>
<div class="form-group">
    {{ Form::label('emailLB', 'E-mail') }}
    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', null, ['class' => 'awesome', 'id' => 'password']) }}
</div>
<div class="form-group">
	{{ Form::label('estado_civil', 'Estado Civil') }}
	{{ Form::select('estado_civil', array('01' => 'Soltero(a)', '02' => 'Casado(a)','03' => 'Viudo(a)'), '01',  ['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::label('genero', 'Genero') }}
	{{ Form::select('genero', array('M' => 'Masculino', 'F' => 'Femenino'), null,  ['class' => 'form-control'])}}
</div>
<div class="form-group">
	<a href="{{route('paciente.index')}}" class="btn btn-sm btn-primary btn-warning">Volver</a>
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}

</div>
