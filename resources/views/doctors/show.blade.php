@extends('layouts.app')
@section('content')
<div class="col-sm-6 offset-sm-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $doctor->name }}
            <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary float-right">Editar</a>
          </h5>
          <p class="card-text">{{ $doctor->email }} <br> {{ $doctor->description }}</p>
        </div>
      </div>
</div>
@endsection
