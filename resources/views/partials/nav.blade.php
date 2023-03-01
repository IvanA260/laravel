{{--<nav class="navbar bg-white shadow-sm">
	<a class="navbar-brand" href="{{ route('home')}}">
		{{ config('app.name')}}
	</a>
		<ul class="nav nav-pills nav-fill">
			<li class="nav-item">
				<a class="nav-link {{ setActive('home') }}" aria-current="page" href="{{ route('home') }}">@lang('Home')</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">@lang('Projects')</a></li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a></li>
			@auth
				<li class="nav-item">
					<a class="nav-link" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Cerrar sesion</a>
                </li>
			@else
                <li class="nav-item">
                	<a class="nav-link {{ setActive('login')}}" href="{{ route('login') }}">Login</a>
                </li>
			@endauth
		</ul>
</nav>--}}
<nav class="navbar navbar-dark bg-dark fixed-top px-4 d-flex justify-content">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home')}}">
		Coctel<span>MAD</span>
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="CoctelMAD">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="CoctelMAD">Coctel<span>MAD</span></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        	@auth
				<li class="nav-item">
					<a class="nav-link color-pagina" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Cerrar sesion</a>
                </li>
			@else
                <li class="nav-item">
                	<a class="nav-link color-pagina {{ setActive('login')}}" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                	<a class="nav-link color-pagina opacity-50 {{ setActive('register')}}" href="{{ route('register') }}">Registrarse</a>
                </li>
			@endauth
		<hr>
          <li class="nav-item">
				<a class="nav-link {{ setActive('home') }}" aria-current="page" href="{{ route('home') }}">@lang('Home')</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">@lang('Projects')</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a>
			</li>
        </ul>
        {{--<form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>--}}
      </div>
    </div>
  </div>
</nav><br><br>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>