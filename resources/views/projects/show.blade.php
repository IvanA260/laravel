@extends('layout')

@section('title', 'Portfolio | ' . $project->title)

@section('content')
<div class="container">
	<div class="row bg-white p-5 shadow rounded">
		<div class="col-12 col-md-6 mx-auto">
			@if($project->image)
				<img src="/storage/{{ $project->image }}" class="card-img-top" alt="{{ $project->title}}">
			@endif
		</div>
		<div class="col-12 col-md-6">
			<h1>{{ $project->title }}</h1>
			<p class="text-secondary">{{ $project->description }}</p>
			<p class="text-black-50">{{ $project->created_at->diffForHumans() }}</p>
			<div class="d-flex justify-content-between align-items-center">
				<a class="btn btn-success" href="{{ route('projects.index') }}">Regresar</a>
				@auth
				<div class="btn-group btn-group-sm">
					<a class="btn btn-primary p-2" href="{{ route('projects.edit', $project) }}">Editar</a>
					<a class="btn btn-danger p-2" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
				</div>
					<form id="delete-project" class="d-none" method="POST" action="{{ route('projects.destroy', $project) }}">
						@csrf @method('DELETE')
					</form>
				@endauth
			</div>
		</div>
		</div>
	</div>
</div>
@endsection
