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
			   	<li style="background-image: url(images/dish-14.jpg);" data-stellar-background-ratio="0.5">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
												<div class="centrado">
														<span> <img src="{{asset('/images/icons/chicken-leg.png')}}" > </span>
												</div>
					   					<h1>Nuestro Menú</h1>
					   					<p><span><a href="#">Inicio / </a></span> <span>Menú</span></p>
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
		
		 @include('folder.menu')

@stop