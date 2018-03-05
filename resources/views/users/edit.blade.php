@extends('layouts.app')
@section('content')
<div class="col-sm-6 offset-sm-3">
  <h2>Editar usuario</h2>
  @include('users.fragment.error')
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $user->name }} - {{ $user->username }}
            <a href="{{ route('users.index') }}" class="btn btn-primary float-right">Listado</a>
          </h5>
          {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}

            @include('users.fragment.form')

          {!! Form::close() !!}
        </div>
      </div>
</div>
@endsection
