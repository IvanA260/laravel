@extends('layout')

@section('title','Crear Proyecto')

@section('content')
<div class="container">
	<div class="row">
		<div class="bg-white p-5 shadow rounded mx-auto">

			@include('partials.validation-errors')

			<form method="POST" action="{{ route('projects.update', $project) }}" enctype="multipart/form-data">
				@method('PATCH')
				<h1 class="display-4">Editar proyecto</h1>
				<hr>
				@include('projects._form', ['btnText' => 'Actualizar'])

			</form>
		</div>
	</div>
</div>
@endsection