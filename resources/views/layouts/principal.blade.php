<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>	Michinmx</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href=" {{asset('/sistema/favicon.ico')}}">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
	
	

	{!!Html::style('/css/style.css')!!}
	{!!Html::style('/css/bootstrap-datepicker.css')!!}
	{!!Html::style('/fonts/flaticon/font/flaticon.css')!!}
	{!!Html::style('/css/flexslider.css')!!}
	{!!Html::style('/css/magnific-popup.css')!!}
	{!!Html::style('/css/owl.theme.default.min.css')!!}
	{!!Html::style('/css/owl.carousel.min.css')!!}
	{!!Html::style('/css/bootstrap.css')!!}
	{!!Html::style('/css/icomoon.css')!!}
	{!!Html::style('/css/animate.css')!!}
	{!!Html::script('/js/modernizr-2.6.2.min.js')!!}	

	<link href="https://fonts.googleapis.com/css?family=Raleway+Dots" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


	</head>
	<body>

	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-group">
							<input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
							<button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<ul>
							<li class="active"><a href="{!!URL::to('/')!!}">INICIO</a></li>
							<li><a href="{!!URL::to('menu')!!}">MENU</a></li>
							<li><a href="{!!URL::to('especialidad')!!}">ESPECIALIDADES</a></li>
							<li><a href="{!!URL::to('reservacion')!!}">RESERVACIÓN</a></li>
							
							<li><a href="{!!URL::to('nosotros')!!}">SOBRE NOSOTROS</a></li>
							<li><a href="{!!URL::to('contactanos')!!}">CANTACTANOS</a></li>
							<li><a href="{!!URL::to('iniciar_sesión')!!}">LOGIN</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </nav>
 <!-- contenido de todas las vistas -->
	@yield('content')
 <!-- Fin -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-pb-sm">
								<section>
										<h2>REDES SOCIALES.</h2>
										<ul id="services">
												
												<li>
											<div class="facebook ">
											  <a href="https://facebook.com/colorlib/">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											  </a>
											</div>
											<span>Facebook</span>
										  </li>

										  <li>
												<div class="twitter">
												<a href="https://twitter.com/colorlib/">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										  </div>
										  <span>Twitter</span>
										</li>
									
										</ul>
										
									  </section> 
					
					</div>
					<div class="col-md-3 col-pb-sm">
							<h2>DESCRIPCIÓN</h2>
							<div class="f-entry">
								<div class="desc">
									<span>Servicios</span>
									<h3><a>Pedidos a domicilio</a></h3>
									<h3><a>Comida para llevar</a></h3>
								</div>
							</div>
							<div class="f-entry">
								
								<div class="desc">
									<span>Especialidades</span>
									<h3><a >Almuerzo</a></h3>
									<h3><a >Bebidas</a></h3>
									<h3><a >Café</a></h3>
								
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url{{asset('images/dessert-3.jpg')}}"></a>
								<div class="desc">
									<span>Promociones</span>
									<h3><a>Cerveza nacional al 2x1 de 3 a 6 pm</a></h3>
									<h3><a >En desayunos de paquete y comidas del día obtén un 10% de descuento en tu consumo total.</a></h3>
								</div>
							</div>
						</div>
			
						<div class="col-md-3 col-pb-sm">
								<h2>INFORMACIÓN</h2>
								<div class="f-entry">
									<div class="desc">
										<span>UBICACIÓN</span>
										<h3><a >Av. Paseo de las Asunción 552, Plaza Bellavista (1,37 km) 52148 Metepec</a></h3>
									</div>
								</div>
								<div class="f-entry">
									
									<div class="desc">
										<span>Hora de apertura</span>
										<h3><a >Lunes - Domingo</a></h3>
										<h3><a >8am - 7pm</a></h3>
										
									</div>
								</div>
								<div class="f-entry">
									<div class="desc">
										<span>Telefono</span>
										<h3><a >+01 722 402 0893</a></h3>
									</div>
								</div>
								<div class="f-entry">
										<div class="desc">
											<span>Correo Electronico</span>
											<h3><a >info@michinmx.online</a></h3>
											<h3><a >contacto@michinmx.online</a></h3>
											
										</div>
									</div>
							</div>
						
							<div class="col-md-3 col-pb-sm">
									<h2>Newsletter</h2>
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia</p>
									<div class="subscribe text-center">
										<div class="form-group">
											<input type="text" class="form-control text-center" placeholder="Enter Email address">
											<input type="submit" value="Subscribe" class="btn btn-primary btn-custom">
										</div>
									</div>
								</div>
		</div>
						<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<span class="block">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br></span> 
								<span class="block">Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexel</a></span>
							</p>
						</div>
</div>
				</div>
				
			</div>
		</footer>
		<br>
		
	
</div>

	<!-- jQuery -->
	{!!Html::script('/js/jquery.min.js')!!}
	{!!Html::script('/js/jquery.easing.1.3.js')!!}
	{!!Html::script('/js/bootstrap.min.js')!!}
	{!!Html::script('/js/jquery.waypoints.min.js')!!}
	{!!Html::script('/js/jquery.stellar.min.js')!!}
	<!-- Owl Carousel -->
	{!!Html::script('/js/owl.carousel.min.js')!!}
	<!-- Magnific Popup -->
	{!!Html::script('/js/jquery.magnific-popup.min.js')!!}
	{!!Html::script('/js/magnific-popup-options.js')!!}
	<!-- Flexslider -->
	{!!Html::script('/js/jquery.flexslider-min.js')!!}
	<!-- Date Picker -->
	{!!Html::script('/js/bootstrap-datepicker.js')!!}
    <!-- Google Map -->
	{!!Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false')!!}
	{!!Html::script('/js/google_map.js')!!}
	<!-- Main JS (Do not remove) -->
	{!!Html::script('/js/main.js')!!}

	</body>
</html>

