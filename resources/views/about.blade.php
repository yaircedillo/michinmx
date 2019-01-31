@extends('layouts.principal')
@section('content')
<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
								<img style="width:40.90%;"  href="{!!URL::to('/')!!}" src="{{asset('/images/logo.png')}}" >
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/portada.jpg);" data-stellar-background-ratio="0.5">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
											<div class="centrado">
													<span> <img src="{{asset('/images/icons/chef.png')}}" > </span>
											</div>
					   					<h1>Sobre Nosotros</h1>
					   					<p><span><a href="{!!URL::to('/')!!}">Inicio /</a></span> <span>Sobre Nosotros</span></p>
					   					<div class="desc2"></div>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 text-center">
							<div class="intro animate-box">
								<span class="icon">
									<i class="icon-map4"></i>
								</span>
								<h2>Ubicación</h2>
								<p>Av. Paseo de las Asunción 552, Plaza Bellavista (1,37 km) 52148 Metepec</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 text-center">
							<div class="intro animate-box">
								<span class="icon">
									<i class="icon-clock4"></i>
								</span>
								<h2>Hora de apertura</h2>
								<p>Lunes - Domingo</p>
								<span>8am - 7pm</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 text-center">
							<div class="intro animate-box">
								<span class="icon">
									<i class="icon-mobile2"></i>
								</span>
								<h2>Telefono</h2>
								<p>+01 722 402 0893</p>
								
							</div>
						</div>
						<div class="col-md-3 col-sm-6 text-center">
							<div class="intro animate-box">
								<span class="icon">
									<i class="icon-envelope"></i>
								</span>
								<h2>Correo Electronico</h2>
								<p><a href="#">info@michinmx.online</a><br><a href="#">contacto@michinmx.online</a></p>
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="colorlib-about" class="colorlib-light-grey">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<div class="row">
									<div class="about-desc">
										<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
											<span>Bienvenido a Michinmx</span>
											<h2>No dejes para mañana lo que puedes comer hoy.</h2>
										</div>
										<div class="col-md-12 animate-box">
											<p>En Michinmx, sentirás un ambiente de tranquilidad, desde el primer momento que llegas Inmediatamente te darán ganas de tomarte un café, comer algo y descansar.</p>
									<p>Disfrute de la auténtica tradición gastronómica de esta nación, entradas especiales, desayunos, almuerzos, cafés,snacks, una amplia lista de vinos y licores.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="row">
									<div class="col-md-6 animate-box">
										<div class="about-img" style="background-image: url(images/about.jpg);">
										</div>
									</div>
									<div class="col-md-6 animate-box">
										<div class="about-img about-img-2" style="background-image: url(images/about-2.jpg);">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	


@stop