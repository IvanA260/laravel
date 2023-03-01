<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title', 'CoctelMAD')</title>
		<link rel="stylesheet" href="/css/app.css">

		<!-- Bootstrap -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		@vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body>
		<div id="app" class="d-flex flex-column h-pantalla justify-content-between">
			<header>
				@include('partials.nav')
				@include('partials.session-status')
			</header>

			<main>
				<div class="container py-3">
					@yield('content')
				</div>
			</main>

			<footer class="bg-dark text-white-50 py-3 shadow text-center">
				{{ config('app.name') }} | Copyright @ {{ date('Y') }}
			</footer>
		</div>
	</body>
</html>
