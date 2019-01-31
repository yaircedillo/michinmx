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
			   	<li style="background-image:  url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
												<div class="centrado">
														<span> <img src="{{asset('/images/icons/chef.png')}}" > </span>
												</div>
											 <h1>¿Aún no sabes dónde comer?</h1>
					   					<h2>En desayunos de paquete y comidas del día obtén un 10% de descuento en tu consumo total.</h2>
					   					<p><a href="{!!URL::to('reservacion')!!}" class="btn btn-primary btn-lg btn-learn">Hacer un pedido.</a></p>
					   					<div class="desc2"></div>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image:  url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
												<div class="centrado" > 
													<img  src="{{asset('/images/icons/tray.png')}}" >
												 </div>
					   					<h1>¡Estas delicias te esperan!...</h1>
					   					<h2>La comida más rica y saludable la encontrarás con nosotros..</h2>
					   					<p><a href="{!!URL::to('reservacion')!!}" class="btn btn-primary btn-lg btn-learn">Hacer un pedido.</a></p>
					   					<div class="desc2"></div>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
												<div class="centrado" > 
														<img  src="{{asset('/images/icons/cheers.png')}}" >
													 </div>
											 
					   					<h1>¿Qué planes tienes para hoy?</h1>
											 <h2>¿Y tú ya conoces nuestra variedad de bebidas?🍸.</h2>
											 <h2> Cerveza nacional al 2x1 de 3 a 6 pm</h2>
					   					<p><a href="{!!URL::to('reservacion')!!}" class="btn btn-primary btn-lg btn-learn">Hacer un pedido.</a></p>
					   					<div class="desc2"></div>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
												<div class="centrado" > 
														<img  src="{{asset('/images/icons/cooking.png')}}" >
													 </div>
											 
					   					<h1>¡Los mejores desayunos los encontrarás en MICHIN MX!</h1>
					   					<h2>La vida es corta cómete el postre primero..</h2>
					   					<p><a href="{!!URL::to('reservacion')!!}" class="btn btn-primary btn-lg btn-learn">Hacer un pedido.</a></p>
					   					<div class="desc2"></div>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	
			  	</ul>
			  	<div class="mouse">
				   <a href="#" class="mouse-icon">
				   	<div class="mouse-wheel"></div>
				   </a>
				</div>
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

		<div class="goto-here"></div>

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
		
		<div class="colorlib-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<span class="icon"><img   src="{{asset('/images/icons/michinmx.png')}}" ></i></span>
						<h2>Nuestas Deliciosas Especialidades</h2>
						<p>En Michinmx lo primordial es la calidad no solo de los ingredientes, sino, especialmente la presentación de los platos así como su sabor.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-1.jpg);"></div>
								<div class="desc">
									<h2><a href="#">  </a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-2.jpg);"></div>
								<div class="desc">
									<h2><a href="#">  </a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-3.jpg);"></div>
								<div class="desc">
									<h2><a href="#">  </a></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">	
						 
								<span class="icon">	<img src="{{asset('/images/icons/reading.png')}}"> </i></span>
						<h2>Lo Nuevo de Nuestro Menu...</h2>
						<p>hemos creado un menú especial usando los mejores ingredientes locales disponibles, la preparación enfocada a los sabores y combinaciones interesantes para su paladar</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-4.jpg);"></div>
								<div class="desc">
									<h2><a href="#">  </a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/imagen-5.jpg);"></div>
								<div class="desc">
									<h2><a href="#"> </a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/imagen-6.jpg);"></div>
								<div class="desc">
									<h2><a href="#"> </a></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-testimony" style="background-image: url(images/portada.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<h2>Nuestros Clientes dicen: </h2>
					</div>
				</div>
				<div class="row animate-box">
					<div class="owl-carousel">
						<div class="item">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="testimony">
									<blockquote>
										<p>"La comida muy rica, un lugar está muy lindo y agradable, lo súper recomiendo, desde el desayuno hasta la comida.</p>
										<span>" &mdash; Nancy Guadalupe</span>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="testimony">
									<blockquote>
										<p>"La comida muy rica, el ambiente ideal para un desayuno con super amigas.</p>
										<span>" &mdash; Bombon Kear </span>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="testimony">
									<blockquote>
										<p>"Un lugar de excelente calidad al igual que la comida y la atención al cliente.
											Muy Recomendado, como si estuviera en casa.</p>
										<span>" &mdash; Eder AC</span>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="testimony">
									<blockquote>
										<p>"El menú es diferente todos los días, buen servicio y muy rico. La verdad lo recomiendo!!!.</p>
										<span>" &mdash;	Interaccion Bio</span>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@include('folder.menu')
<section id="formulario">
		<div class="colorlib-reservation reservation-img" style="background-image: url(images/portada2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>

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
								@if(Session::has('message'))
								<div class="alert alert-info alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								  {{Session::get('message')}}
								</div>
								@endif
                                    {!!Form::open(['route'=>'reservacion.store', 'method'=>'POST','class'=>'colorlib-form'])!!}
									{{csrf_field()}}
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
													{!!Form::submit('Pedir mesa',[' class'=>'btn btn-primary btn-block'])!!}   
                                         
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
		</section>
		</div>
@stop