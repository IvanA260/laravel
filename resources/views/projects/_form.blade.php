@csrf
@if($project->image)
<img class="card-img-top mb-2 w-50 mx-auto d-block img-thumbnail rounded" src="/storage/{{ $project->image }}" class="card-img-top" alt="{{ $project->title}}">
@endif

<div class="row">
	<div class="col-12 col-md-6 py-3">
		<div class="custom-file mb-2">
			<label for="image" class="form-label">Imagen del Coctel:</label>
			<input name="image" type="file" id="image" class="form-control" id="customFile">
		</div>


		<div class="mb-3">
			<label for="title" class="form-label">Titulo del coctel</label>
			<input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
		</div>

		<div class="mb-3">
			<label for="url" class="form-label">URL del coctel</label>
			<input type="text" name="url" id="url" class="form-control" value="{{ old('url', $project->url) }}">
		</div>
	</div>
	<div class="col-12 col-md-6 py-3">
		<div class="mb-3">
			<label for="descripcion"  class="form-label"> Descripcion del coctel </label>
			<textarea name="description" class="form-control" id="descripcion" rows="4">{{ old('description', $project->description) }}</textarea>
		</div>
		<div class="mb-3 d-grid gap-2">
			<button class="btn btn-success">{{ $btnText }}</button>
			<a class="btn btn-danger btn-block" href="{{ route('projects.index') }}">Cancelar</a>
		</div>
	</div>
</div>
