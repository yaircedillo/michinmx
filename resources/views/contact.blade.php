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
			   	<li style="background-image: url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
											<div class="centrado">
													<span> <img src="{{asset('/images/icons/find.png')}}" > </span>
											</div>
					   					<h1>Contáctenos</h1>
					   					<p><span><a href="#">Inicio /</a></span> <span>Contacto </span></p>
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
			@include('folder.contenido')
			</div>
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<h2>¿ Tienes alguna pregunta  ?</h2>
						<p>Para preguntas generales, por favor completar el siguiente formulario:</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0">
						<div class="row">
							<div class="col-md-4 animate-box">
								<h3>NUESTRA DIRECCIÓN</h3>
								<ul class="contact-info">
									<li><span><i class="icon-map5"></i></span>Av. Paseo de las Asunción 552, Plaza Bellavista (1,37 km) 52148 Metepec</li>
									<li><span><i class="icon-phone4"></i></span>+01 722 402 0893</li>
									<li><span><i class="icon-envelope2"></i></span><a href="#">info@michinmx.online</a></li>
									<li><span><i class="icon-globe3"></i></span><a href="#">contacto@michinmx.online</a></li>
								</ul>
							</div>

							{!!Form::open(['route'=>'contacto.store', 'method'=>'POST','class'=>'col-md-7 col-md-push-1 animate-box'])!!}
			
							@if(Session::has('message'))
                            <div class="alert alert-info alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              {{Session::get('message')}}
                            </div>
							@endif
							
							
							
							<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											
											{!!Form::textarea('area',null,['class'=>'form-control', 'cols'=>'30', 'rows'=> '7','placeholder'=>'Mensaje'])!!}
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                                                {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											{!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Correo Electronico'])!!}
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											{!!Form::submit('Enviar Mensaje',[' class'=>'btn btn-primary '])!!} 
										</div>
									</div>
								</div>
							
							{!!Form::close()!!}



						</div>
					</div>
				</div>
			</div>
		</div>

	
@stop