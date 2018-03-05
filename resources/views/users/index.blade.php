@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-8">
		<h2>
			Listado de Usuarios
			<a href="{{ route('users.create') }}" class="btn btn-primary float-right">Nuevo</a>
		</h2>
		@include('users.fragment.info')
		<table class="table">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th width="20px">Nombre</th>
					<th width="20px">Login</th>
					<th width="20px">Email</th>
					<th colspan="3">Acción</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->username }}</td>
						<td>{{ $user->email }}</td>
						<td><a href="{{ route('users.show', $user->id) }}" class="btn btn-link">Ver</a></td>
						<td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-link">Editar</a></td>
						<td>
							<form action="{{ route('users.destroy', $user->id) }}" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="delete">
								<button class="btn btn-link">Borrar</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $users->links('pagination::bootstrap-4') }}
	</div>
	<div class="col-md-4">
		@include('users.fragment.aside')
	</div>
</div>
@endsection
