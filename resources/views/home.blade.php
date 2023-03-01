@csrf
@extends('layout')

@section('title','Home')

@section('content')
	@auth
		<div class="container">
			{{--<img class="img-fluid mb-4" style="height: 30%;" src="/img/admin.svg" alt="Persona con coctel en la mano">--}}
			<div class="row">
				<div class="col-12 col-lg-6">
					<h1 class="display-4 blanco mb-4" style="font-family: 'Ravi Prakash', cursive; ">Bienvenido <span>{{auth()->user()->name}}</span> a la administracion de COCTEL<span>MAD</span></h1>
					<p class="lead blanco opacity-75">En este apartado podras gestionar todo lo relacionado con la pagina, asi como crear cocteles nuevos, editarlos, actualizarlos o eliminarlos. Y todo al momento actuaizarse en la pagina inicial</p>
					<div class="d-grid gap-2">
						<a class="btn btn-lg btn-block btn-success bg-gradient " href="{{ route('projects.index') }}">Gestionar cocteles</a>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<img class="img-fluid mb-4" src="/img/admin.svg" alt="Persona con coctel en la mano">
				</div>
			</div>
		</div>
	@else
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">
					<h1 class="display-4 blanco" style="font-family: 'Ravi Prakash', cursive; ">COCTEL<span>MAD</span></h1>
					<p class="lead blanco opacity-75">Somos una de las Mejores coctelerias de Madrid, somos especialistas en todo este mundo desde hace años</p>
					{{--<div>
						<h3>{{ $project->lastest('title') }}</h3>
					</div>--}}
					<div class="d-grid gap-2">
						<a class="btn btn-lg btn-block btn-success bg-gradient " href="{{ route('projects.index') }}">Cocteles actuales</a>
						<a class="btn btn-lg btn-block btn-outline-success " href="{{ route('contact') }}">Contactanos</a>
						<a class="btn btn-lg btn-block btn-success bg-gradient " href="{{ route('leer') }}">Noticias de Panes API</a>
					</div>
				</div>
				<div class="col-12 col-lg-6">
						<img class="img-fluid mb-4" src="/img/home.svg" alt="Persona con coctel en la mano">
				</div>
			</div>
		</div>
	@endauth
@endsection