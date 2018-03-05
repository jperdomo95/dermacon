@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h2>
			Listado de Doctores
			<a href="{{ route('doctors.create') }}" class="btn btn-primary float-right">Nuevo</a>
		</h2>
		@include('doctors.fragment.info')
		<table class="table">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th width="20px">Nombre</th>
					<th width="20px">CI</th>
					<th width="20px">Email</th>
					<th>Descripción</th>
					<th colspan="3">Acción</th>
				</tr>
			</thead>
			<tbody>
				@foreach($doctors as $doctor)
					<tr>
						<td>{{ $doctor->id }}</td>
						<td>{{ $doctor->name }}</td>
						<td>{{ $doctor->ci }}</td>
						<td>{{ $doctor->email }}</td>
						<td>{{ $doctor->description }}</td>
						<td><a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-link">Ver</a></td>
						<td><a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-link">Editar</a></td>
						<td>
							<form action="{{ route('doctors.destroy', $doctor->id) }}" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="delete">
								<button class="btn btn-link">Borrar</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $doctors->links('pagination::bootstrap-4') }}
	</div>
	<div class="col-md-4">
		@include('doctors.fragment.aside')
	</div>
</div>
@endsection
