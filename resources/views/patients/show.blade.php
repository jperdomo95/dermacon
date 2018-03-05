@extends('layouts.app')
@section('content')
<div class="col-sm-6 offset-sm-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $patient->name }}
            <a href="{{ route('doctors.edit', $patient->id) }}" class="btn btn-primary float-right">Editar</a>
          </h5>
          <p class="card-text">{{ $patient->email }} <br> {{ $patient->description }} <br> {{ $patient->local_phone }} <br> {{ $patient->personal_phone }}</p>
        </div>
      </div>
</div>
@endsection
