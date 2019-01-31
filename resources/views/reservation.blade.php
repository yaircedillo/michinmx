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
			   	<li style="background-image: url(images/fondo.jpg);" data-stellar-background-ratio="0.5">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
											<div class="centrado">
													<span> <img src="{{asset('/images/icons/restaurant.png')}}" > </span>
											</div>
				   					
					   					<h1>Reservar una mesa</h1>
					   					<p><span><a href="{!!URL::to('/')!!}">Inicio / </a></span> <span>Reservación</span></p>
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
		<div class="colorlib-reservation reservation-page">
		
				<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
								<h2> RESERVAR UNA MESA  </h2>
								<p>Si un día sientes un vacio ... come es Hambre</p>
								<p>¿Realiza tu reservación y nosotros te esperamos ?</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="row">
									<div class="col-md-12">
			
											{!!Form::open(['route'=>'reservacion.store', 'method'=>'GET','class'=>'colorlib-form'])!!}
										  <div class="row">
												<div class="col-md-6 animate-box">
													<div class="form-group">
															{!!Form::label('Nombre Completo.')!!}
														
														<div class="form-field">
																{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Coloca tu nombre completo aquí'])!!}
														
														</div>
													</div>
												</div>
												<div class="col-md-6 animate-box">
													<div class="form-group">
															{!!Form::label('Correo Electronico')!!}
														
														<div class="form-field">
															{!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'ejemplo@gmail.com'])!!}
															
														</div>
													</div>
												</div>
												<div class="col-md-6 animate-box">
													<div class="form-group">
															{!!Form::label('Telefono')!!}
														
														<div class="form-field">
															{!!Form::text('phone',null,['class'=>'form-control', 'placeholder'=>'Telefono'])!!}
														</div>
													</div>
												</div>
											   
												<div class="col-md-12 animate-box">
													<div class="row">
														<div class="col-md-4 col-md-offset-4">
																
															<input type="submit" name="submit" id="submit" value="Pedir mesa" class="btn btn-primary btn-block">
														</div>
													</div>
												</div>
											</div>
											{!!Form::close()!!}
								   </div>
								</div>
							</div>
						</div>
					</div>
			
		</div>
@stop