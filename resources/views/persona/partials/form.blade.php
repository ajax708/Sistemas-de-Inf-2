

<div class="form-group">
    {{ Form::label('nombreLb', 'Nombre') }}
    {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
    {{ Form::label('apellidoLb', 'Apellido') }}
    {{ Form::text('apellido', null, ['class' => 'form-control', 'id' => 'apellido']) }}
</div>
<div class="form-group">
    {{ Form::label('ciLB', 'Cedula de Identidad') }}
    {{ Form::text('ci', null, ['class' => 'form-control', 'id' => 'ci']) }}
</div>
<div class="form-group">
    {{ Form::label('emailLB', 'E-mail') }}
    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
    {{ Form::label('telefonoLB', 'Telefono') }}
    {{ Form::text('telefono', null, ['class' => 'form-control', 'id' => 'telefono']) }}
</div>
<div class="form-group">
    {{ Form::label('celularLB', 'Celular') }}
    {{ Form::text('celular', null, ['class' => 'form-control', 'id' => 'celular']) }}
</div>
<div class="form-group">
    {{ Form::label('passwordLb', 'Password') }}
    {{ Form::password('password', null, ['class' => 'awesome 
    ', 'id' => 'password']) }}
</div>
<div class="form-group">
	{{ Form::label('tipo', 'Tipo') }}
	{{ Form::select('tipo', array('01' => 'Medico', '02' => 'Tecnico Especialista'), '01',  ['class' => 'form-control'])}}
</div>
<div class="form-group">
	<a href="{{route('persona.index')}}" class="btn btn-sm btn-primary btn-warning">Volver</a>
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

