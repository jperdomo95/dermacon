@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-8">

		@include('appointments.fragment.info')
		<table class="table">
			<thead>
				<tr>
					<th>Paciente</th>
					<th>Motivo</th>
					<th>Fecha</th>
					<!--<th colspan="3">Acción</th>-->
				</tr>
			</thead>
			<tbody>
				@foreach($patients as $patient)
					<tr>
						<td>{{ $patient->name }}</td>
						<td>{{ $patient->appointment->motive }}</td>
						<td>{{ $patient->appointment->date }}</td>
						<!--<td><a href="{{ route('doctors.show', $patient->appointment->doctor_id) }}" class="btn btn-link">Ver</a></td>
						<td><a href="{{ route('doctors.edit', $patient->appointment->doctor_id) }}" class="btn btn-link">Editar</a></td>
						<td>
							<form action="appointments/delete/{$patient->appointment->doctor_id}" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="delete">
								<button class="btn btn-link">Borrar</button>
							</form>
						</td>-->
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $patients->links('pagination::bootstrap-4') }}
	</div>
	<div class="col-md-4">
		@include('appointments.fragment.aside')
	</div>
</div>
@endsection
