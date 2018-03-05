@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h2>
			Listado de Pacientes
			<a href="{{ route('patients.create') }}" class="btn btn-primary float-right">Nuevo</a>
		</h2>
		@include('doctors.fragment.info')
		<table class="table">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th width="20px">Nombre</th>
					<th width="20px">CI</th>
					<th width="20px">Email</th>
					<th>Local</th>
					<th>Personal</th>
					<th colspan="3">Acción</th>
				</tr>
			</thead>
			<tbody>
				@foreach($patients as $patient)
					<tr>
						<td>{{ $patient->id }}</td>
						<td>{{ $patient->name }}</td>
						<td>{{ $patient->ci }}</td>
						<td>{{ $patient->email }}</td>
						<td>{{ $patient->local_phone }}</td>
						<td>{{ $patient->personal_phone }}</td>
						<td><a href="{{ route('patients.show', $patient->id) }}" class="btn btn-link">Ver</a></td>
						<td><a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-link">Editar</a></td>
						<td>
							<form action="{{ route('patients.destroy', $patient->id) }}" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="delete">
								<button class="btn btn-link">Borrar</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $patients->links('pagination::bootstrap-4') }}
	</div>
	<div class="col-md-4">
		@include('patients.fragment.aside')
	</div>
</div>
@endsection
