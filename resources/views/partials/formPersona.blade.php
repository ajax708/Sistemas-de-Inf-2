<div class="form-group">
    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
    {{ Form::label('apellido', 'Apellido') }}
    {{ Form::text('apellido', null, ['class' => 'form-control', 'id' => 'apellido']) }}
</div>
<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', ['class' => ' form-control awesome']) }}
</div>
<div class="form-group">
    {{ Form::label('ci', 'Ci') }}
    {{ Form::text('ci', null, ['class' => 'form-control', 'id' => 'ci']) }}
</div>

<div class="form-group">
	{{ Form::label('genero', 'Genero') }}
	{{ Form::select('genero', ['01' => 'Masculino', '02' => 'Femenino']) }}
</div> 
<div class="form-group">
    {{ Form::label('telefono', 'Telefono') }}
    {{ Form::text('telefono', null, ['class' => 'form-control', 'id' => 'telefono']) }}
</div>
<div class="form-group">
    {{ Form::label('celular', 'Celular') }}
    {{ Form::text('celular', null, ['class' => 'form-control', 'id' => 'celular']) }}
</div>