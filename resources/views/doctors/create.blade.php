@extends('layouts.app')
@section('content')
<div class="col-sm-6 offset-sm-3">
  <h2>Nuevo Doctor <a href="{{ route('doctors.index') }}" class="btn btn-secondary float-right">Listado</a></h2>
  @include('users.fragment.error')
      <div class="card">
        <div class="card-body">
          {!! Form::open(['route' => 'doctors.store']) !!}

            @include('doctors.fragment.form')

          {!! Form::close() !!}
        </div>
      </div>
</div>
@endsection
