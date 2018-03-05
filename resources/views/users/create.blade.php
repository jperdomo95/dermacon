@extends('layouts.app')
@section('content')
<div class="col-sm-6 offset-sm-3">
  <h2>Nuevo usuario <a href="{{ route('users.index') }}" class="btn btn-secondary float-right">Listado</a></h2>  
  @include('users.fragment.error')
      <div class="card">
        <div class="card-body">
          {!! Form::open(['route' => 'users.store']) !!}

            @include('users.fragment.form')

          {!! Form::close() !!}
        </div>
      </div>
</div>
@endsection
