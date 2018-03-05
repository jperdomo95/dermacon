@extends('layouts.app')
@section('content')
<div class="col-sm-6 offset-sm-3">
  <h2>Editar Doctor</h2>
  @include('users.fragment.error')
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $doctor->name }}
            <a href="{{ route('doctors.index') }}" class="btn btn-primary float-right">Listado</a>
          </h5>
          {!! Form::model($doctor, ['route' => ['doctors.update', $doctor->id], 'method' => 'PUT']) !!}

            @include('doctors.fragment.form')

          {!! Form::close() !!}
        </div>
      </div>
</div>
@endsection
