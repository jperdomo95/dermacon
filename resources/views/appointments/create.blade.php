@extends('layouts.app')
@section('content')
<div class="col-sm-6 offset-sm-3">
  @include('appointments.fragment.error')
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Pedir Citas</h3>
          <form action="/appointments/store" method="post">
            {{ csrf_field() }}
            @include('appointments.fragment.form')
          </form>
        </div>
      </div>
</div>
@endsection
