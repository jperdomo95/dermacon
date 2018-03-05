<div class="form-group">
  {!! Form::label('name', 'Nombre Completo') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('ci', 'N° de Cédula') !!}
  {!! Form::text('ci', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('email', 'Correo Electrónico') !!}
  {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('local_phone', 'Local') !!}
  {!! Form::text('local_phone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('personal_phone', 'Celular') !!}
  {!! Form::text('personal_phone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('address', 'Dirección') !!}
  {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
