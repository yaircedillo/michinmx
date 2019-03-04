@extends('layouts.principal')
@section('content')
<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
								<img style="width:40.90%;" {!!URL::to('iniciar_secion')!!} src="{{asset('/images/logo.png')}}" > 
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
					   					<p><span><a href="{!!URL::to('/')!!}">Inicio /</a></span> <span>Contacto </span></p>
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
									<li><span><i class="icon-envelope2"></i></span>info@michinmx.online</li>
									<li><span><i class="icon-envelope2"></i></span>contacto@michinmx.online</li>
								
								</ul>
							</div>

							{!!Form::open(['route'=>'correo.store', 'method'=>'POST','class'=>'col-md-7 col-md-push-1 animate-box'])!!}
			
														
				@if (Session::has('message'))
					<script>
						alertify.alert("mensaje de confirmación","{{Session::get('message')}}", function(){
            			alertify.message('OK');
		            });
					</script>
				@endif
							
							
							<div class="row">
									<div class="col-md-12  {{ $errors->has('area')  ? 'has-error' : '' }}">
										<div class="form-group">
											
										{!!Form::textarea('area',null,['class'=>'form-control', 'cols'=>'30', 'rows'=> '7','placeholder'=>'Mensaje'])!!}
										</div>
										{!! $errors->first('area','<span class="text-danger">:message</span>')!!}
									</div>

									<div class="col-md-6 {{ $errors->has('name')  ? 'has-error' : '' }}">
										<div class="form-group">
                     						{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
										</div>
										{!! $errors->first('name','<span class="text-danger">:message</span>')!!}
									</div>

									<div class="col-md-6 {{ $errors->has('email')  ? 'has-error' : '' }}">
										<div class="form-group">
											{!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Correo Electronico'])!!}
										</div>
										{!! $errors->first('email','<span class="text-danger">:message</span>')!!}
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
	
		<div >
			<div class="overlay" onClick="style.pointerEvents='none'"></div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d559.8981268437735!2d-99.57151635892372!3d19.259277661567005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8b19b8ac6199%3A0x5ac4e88be847edc1!2sCocina+de+Michin+MX!5e0!3m2!1ses!2smx!4v1551675119856" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div> <!-- end .mapWrapper-->
@stop