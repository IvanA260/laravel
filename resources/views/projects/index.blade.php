@extends('layout')

@section('title','Projects')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0 blanco">Seccion de cocteles</h1>
		@auth
			<a class="btn btn-success " href="{{ route('projects.create') }}">Crear proyecto</a>
		@endauth
	</div>
	<p class="lead blanco opacity-75">Lista de cocteles de la tienda</p>
	<hr class="blanco">
		<div class="row row-cols-1 row-cols-md-3 g-4 text-center">

		@forelse ($projects as $project)
		  <div class="col">
			<div class="card">
				@if($project->image)
			  		<img src="/storage/{{ $project->image }}" class="card-img-top" alt="{{ $project->title}}">
			  	@endif
			  <div class="card-body">
			    <h5 class="card-title">{{ $project->title}}</h5>
			    <p class="card-text">{{ $project->description}}</p>
			    <div class="d-grid gap-2">
			    	<a href="{{ route('projects.show', $project) }}" class="btn btn-success btn-lg">Ver Coctel</a>
			    </div>
			  </div>
			</div>
		</div>
		@empty
			<li>No hay proyectos para mostrar</li>
		@endforelse

	</div>
		{{--<br>{{ $projects->links() }}--}}
	<br>
</div>
@endsection