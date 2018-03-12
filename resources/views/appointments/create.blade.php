@extends('layouts.app')
@section('content')
<div class="col-sm-6 offset-sm-3">
  @include('appointments.fragment.error')
      <div class="card">
        <div class="card-body">
          {!! Form::open(['route' => 'appointments.store']) !!}

            @include('appointments.fragment.form')

          {!! Form::close() !!}
        </div>
      </div>
</div>
@endsection
