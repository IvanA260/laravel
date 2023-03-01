@extends('layout')

@section('title','About')

@section('content')
	<div class="container">
	<div class="row">
		<div class="col-12 col-lg-6">
				<img class="img-fluid mb-4" style="width: 50%;" src="/img/about.svg" alt="Persona con coctel en la mano">
				<p class="lead blanco">Además las empresas que quieran hacer pedidos superiores a 1.000 € pueden contactarnos para aprovechar de condiciones privilegiadas.
				Para cualquier duda o necesidad, quedamos a tu disposición a través de chat, por teléfono (en horario de oficina, 10-14 y 15-19 de lunes a viernes), o por correo electrónico a <strong class="color-pagina">info@coctelmad.com.</strong></p>
		</div>
		<div class="col-12 col-lg-6">
			<h1 class="display-4 blanco" style="font-family: 'Ravi Prakash', cursive; ">¿Quienes somos?</h1>
			<p class="lead color-pagina"><strong class="color-pagina">Somos una de las Mejores coctelerias de Madrid, somos especialistas en todo este mundo desde hace años</strong></p>
			<p class="lead blanco">CoctelMAD es el comercio electrónico (eCommerce) al servicio de los profesionales del bar.
			Nuestra empresa se encarga de distribuir los mejores equipos de bar profesionales en toda Europa (y también otros países del mundo) en el menor tiempo posible.
			La asistencia constante, antes, durante y después de la compra, distingue la calidad del servicio CoctelMAD.
			Tanto para distribuidores, cocteleros, propietarios, como clientes en general, CoctelMAD está a tu entera disposición para todos los suministros de coctelería y restauración que puedas necesitar.
			</p>
			<div class="d-grid gap-2">
				<a class="btn btn-lg btn-block btn-success bg-gradient " href="{{ route('projects.index') }}">Cocteles actuales</a>
				<a class="btn btn-lg btn-block btn-outline-success " href="{{ route('contact') }}">Contactanos</a>
			</div>
		</div>
	</div>
</div>
@endsection