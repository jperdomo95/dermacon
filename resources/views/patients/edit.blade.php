@extends('layouts.app')
@section('content')
<div class="col-sm-6 offset-sm-3">
  <h2>Editar Paciente</h2>
  @include('users.fragment.error')
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $patient->name }}
            <a href="{{ route('patients.index') }}" class="btn btn-primary float-right">Listado</a>
          </h5>
          {!! Form::model($patient, ['route' => ['patients.update', $patient->id], 'method' => 'PUT']) !!}

            @include('patients.fragment.form')

          {!! Form::close() !!}
        </div>
      </div>
</div>
@endsection
