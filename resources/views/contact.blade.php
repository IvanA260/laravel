@extends('layout')

@section('title','Contact')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto py-3">
			<form class="blanco shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store') }}">
				@csrf
				<h1 class="display-4" style="font-weight: bold;">Contacto</h1>
				<hr>
				<div class="form-group">
					<label for="name">Nombre</label>{{-- is-valid --}}
					<input class="form-control bg-light shadow-sm @error('name')is-invalid @else border-0 @enderror" id="name" name="name" placeholder="Nombre..." value="{{ old('name') }}" >

					@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					{{--{!! $errors->first('name','<small>:message</small><br>') !!}--}}
				</div>

				<div class="form-group">
					<label for="email">Correo electronico</label>
					<input class="form-control bg-light shadow-sm @error('email')is-invalid @else border-0 @enderror" id="email" type="text" name="email" placeholder="Email..." value="{{ old('email') }}" >
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					{{--{!! $errors->first('email','<small>:message</small><br>') !!}--}}
				</div>
				<div class="form-group">
					<label for="subject">Asunto</label>
					<input class="form-control bg-light shadow-sm @error('subject')is-invalid @else border-0 @enderror" id="subject" name="subject" placeholder="Asunto..." value="{{ old('subject') }}" >
					@error('subject')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					{{--{!! $errors->first('subject','<small>:message</small><br>') !!}--}}
				</div>

				<div class="form-group">
					<label for="content">Contenido</label>
						<textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror" id="content" name="content" rows="3" placeholder="Mensaje...">{{ old('content') }}</textarea>
						{{--{!! $errors->first('content','<small>:message</small><br>') !!}--}}
					@error('content')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					<br>
				</div>
				<div class="d-grid gap-2">
					<button class="btn btn-success bg-gradient btn-lg">@lang('Send')</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection