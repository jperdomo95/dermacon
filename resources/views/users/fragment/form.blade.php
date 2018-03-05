<div class="form-group">
  {!! Form::label('name', 'Nombre Completo') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('username', 'Login') !!}
  {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('email', 'Correo Electrónico') !!}
  {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('password', 'Contraseña') !!}
  {!! Form::password('password', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
