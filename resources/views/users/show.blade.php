@extends('layouts.app')
@section('content')
<div class="col-sm-6 offset-sm-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $user->name }} - {{ $user->username }}
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary float-right">Editar</a>
          </h5>
          <p class="card-text">{{ $user->email }}</p>
        </div>
      </div>
</div>
@endsection
