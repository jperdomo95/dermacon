@extends('layouts.app')

@section('content')
<h1 class="text-center">Bienvenido al Sistema de Control de Citas</h1>
    <p class="text-center">¿Qué desea hacer?</p>
    <div class="row">
        <div class="col-md-3 offset-md-1">
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/usuarios.png') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Administrar Usuarios</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" id="img1" src="{{ asset('images/doctor.svg') }}" alt="Card image cap">
                <div class="card-body text-center" id="seccionBtn1">
                    <a href="{{ route('doctors.index') }}" class="btn btn-primary">Administrar Doctores</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" id="img2" src="{{ asset('images/patient-icon.png') }}" alt="Card image cap">
                <div class="card-body text-center" id="seccionBtn1">
                    <a href="{{ route('patients.index') }}" class="btn btn-primary">Administrar Pacientes</a>
                </div>
            </div>
        </div>
    </div>
    <!--<div class='row'>
      <div class="col-md-3 offset-md-4">
          <div class="card">
              <img class="card-img-top" id="img2" src="{{ asset('images/calendario.png') }}" alt="Card image cap">
              <div class="card-body text-center" id="seccionBtn1">
                  <a href="appointments/index" class="btn btn-primary">Administrar Citas</a>
              </div>
          </div>
      </div>
    </div>-->
@endsection
