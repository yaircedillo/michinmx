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
					   					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn">Book a table</a></p>
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
					   					<p>La comida más rica y saludable la encontrarás con nosotros..</p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn">Book a table</a></p>
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
					   					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn">Book a table</a></p>
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
					   					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					   					<p><a href="#" class="btn btn-primary btn-lg btn-learn">Book a table</a></p>
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
							<h2>Opening Time</h2>
							<p>Monday - Sunday</p>
							<span>8am - 9pm</span>
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
									<h2>Taste a delicious food here in Italy &amp; We are inspired since 1895</h2>
								</div>
								<div class="col-md-12 animate-box">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
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
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-1.jpg);"></div>
								<div class="desc">
									<h2><a href="#">Luto Strawberry Dish</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-2.jpg);"></div>
								<div class="desc">
									<h2><a href="#">Pizza with strawberries</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-3.jpg);"></div>
								<div class="desc">
									<h2><a href="#">Luto Grilled Beef</a></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-introduction" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-push-3">
						<div class="intro-box animate-box">
							<h2><a href="#"></a>Foods you love to taste</h2>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							<p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary btn-lg btn-outline popup-vimeo"><i class="icon-play3"></i> Watch Video</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">	
							<div class="centrado" style="width:10.90%;"> 
									<img src="{{asset('/images/icons/reading.png')}}" >
							</div>
							
			
						<h2>Lo Nuevo de Nuestro Menu...</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-4.jpg);"></div>
								<div class="desc">
									<h2><a href="#">Luto Strawberry Dish</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-2.jpg);"></div>
								<div class="desc">
									<h2><a href="#">Pizza with strawberries</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-3.jpg);"></div>
								<div class="desc">
									<h2><a href="#">Luto Grilled Beef</a></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-testimony" style="background-image: url(images/cover_bg_2.jpg);" data-stellar-background-ratio="0.5">
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

		<div class="colorlib-menu">
			<div class="container">
				<div class="colorlib-menu-2">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
							<span class="icon"><i class="flaticon-cutlery"></i></span>
							<h2>Lutong Bahay Menu</h2>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="row">
								<div class="col-md-12 text-center">
									<ul class="nav nav-tabs text-center" role="tablist">
										<li role="presentation" class="active"><a href="#main" aria-controls="mains" role="tab" data-toggle="tab">Main</a></li>
										<li role="presentation"><a href="#desserts" aria-controls="desserts" role="tab" data-toggle="tab">Desserts</a></li>
										<li role="presentation"><a href="#drinks" aria-controls="drinks" role="tab" data-toggle="tab">Drinks</a></li>
									</ul>
								</div>
							</div>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="main">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-3.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$25.99</span>
							                  <h3>Grilled Beef with potatoes</h3>
							                  <p class="cat">Meat / Potatoes / Rice / Tomatoe</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-4.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$30.99</span>
							                  <h3>Tuna Roast Source</h3>
							                  <p class="cat">Tuna / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-5.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$40.00</span>
							                  <h3>Roast Beef (4 sticks)</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-6.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Salted Fried Chicken</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-7.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Lumpia Shanghai</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-8.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Chicken Adobo</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							            </ul>
										</div>
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-9.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$25.99</span>
							                  <h3>Marinated Beef</h3>
							                  <p class="cat">Meat / Potatoes / Rice / Tomatoe</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-10.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$30.99</span>
							                  <h3>Fried Tokwa</h3>
							                  <p class="cat">Tuna / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-11.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$40.00</span>
							                  <h3>Letson Kawali</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-12.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Fried Pork</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-13.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Chopsuey</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dish-14.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Sunny sideup egg</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							            </ul>
										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="desserts">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dessert-1.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$25.99</span>
							                  <h3>Special Cake</h3>
							                  <p class="cat">Meat / Potatoes / Rice / Tomatoe</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dessert-2.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$30.99</span>
							                  <h3>Froost Sweeten Vanilla</h3>
							                  <p class="cat">Tuna / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dessert-3.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$40.00</span>
							                  <h3>Halo Halo </h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dessert-4.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Nicker Backer</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dessert-5.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Choco Cake</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dessert-6.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Sweet Caramel Bread</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							            </ul>
										</div>
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dessert-7.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$25.99</span>
							                  <h3>Choco Bread</h3>
							                  <p class="cat">Meat / Potatoes / Rice / Tomatoe</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dessert-8.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$30.99</span>
							                  <h3>Cream Puffs Delicious</h3>
							                  <p class="cat">Sugar / Dough / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dessert-9.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$40.00</span>
							                  <h3>Fruit Salad</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dessert-10.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Special Macaronni</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dessert-11.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Biko Sweet</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/dessert-12.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Burger King</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							            </ul>
										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="drinks">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/drink-1.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$25.99</span>
							                  <h3>Cold Lemonade Juice</h3>
							                  <p class="cat">Meat / Potatoes / Rice / Tomatoe</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/drink-2.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$30.99</span>
							                  <h3>May Wine</h3>
							                  <p class="cat">Tuna / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/drink-3.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$40.00</span>
							                  <h3>Ice tea juice</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/drink-4.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Orange Juice</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/drink-5.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Fresh Fruits Juice</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/drink-6.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Coconut Juice</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							            </ul>
										</div>
										<div class="col-md-6">
											<ul class="menu-dish">
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/drink-7.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$25.99</span>
							                  <h3>Mango Juice</h3>
							                  <p class="cat">Meat / Potatoes / Rice / Tomatoe</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/drink-8.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$30.99</span>
							                  <h3>Lemon Juice</h3>
							                  <p class="cat">Tuna / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/drink-9.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$40.00</span>
							                  <h3>Softdrinks Coke</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/drink-10.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Softdrinks Pepsi</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/drink-11.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Can Juice</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="dish-entry">
							                	<div class="dish-img" style="background-image: url(images/drink-12.jpg);"></div>
							                </figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Choco Juice</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							            </ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 animate-box text-center">
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
							<p><a href="#" class="btn btn-primary btn-outline btn-md">Book a table</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-reservation reservation-img" style="background-image: url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<h2>Make A Reservation</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="row">
							<div class="col-md-12">
								<form method="post" class="colorlib-form">
				              	<div class="row">
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="name">Fullname</label>
												<div class="form-field">
													<input type="text" class="form-control" placeholder="name">
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="email">Email</label>
												<div class="form-field">
													<input type="text" class="form-control" placeholder="email">
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="phone">Phone</label>
												<div class="form-field">
													<input type="text" class="form-control" placeholder="phone">
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="date">Date:</label>
												<div class="form-field">
													<i class="icon icon-calendar2"></i>
													<input type="text" id="date" class="form-control date" placeholder="Date">
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="time">Time</label>
												<div class="form-field">
													<i class="icon icon-arrow-down3"></i>
													<select name="time" id="time" class="form-control">
														<option value="#">6:30am</option>
														<option value="#">7:00am</option>
														<option value="#">7:30am</option>
														<option value="#">8:00am</option>
														<option value="#">8:30am</option>
														<option value="#">9:00am</option>
														<option value="#">9:30am</option>
														<option value="#">10:00am</option>
														<option value="#">10:30am</option>
														<option value="#">11:00am</option>
														<option value="#">11:30am</option>
														<option value="#">12:00am</option>
														<option value="#">12:30am</option>
														<option value="#">1:00pm</option>
														<option value="#">1:30pm</option>
														<option value="#">2:00pm</option>
														<option value="#">2:30pm</option>
														<option value="#">3:00pm</option>
														<option value="#">3:30pm</option>
														<option value="#">4:00pm</option>
														<option value="#">4:30pm</option>
														<option value="#">5:00pm</option>
														<option value="#">5:30pm</option>
														<option value="#">6:00pm</option>
														<option value="#">6:30pm</option>
														<option value="#">7:00pm</option>
														<option value="#">7:30pm</option>
														<option value="#">8:00pm</option>
														<option value="#">8:30pm</option>
														<option value="#">9:00pm</option>
														<option value="#">9:30pm</option>
														<option value="#">10:00pm</option>
														<option value="#">10:30pm</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="person">Person</label>
												<div class="form-field">
													<i class="icon icon-arrow-down3"></i>
													<select name="people" id="people" class="form-control">
														<option value="#">1</option>
														<option value="#">2</option>
														<option value="#">3</option>
														<option value="#">4</option>
														<option value="#">5+</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12 animate-box">
											<div class="row">
												<div class="col-md-4 col-md-offset-4">
													<input type="submit" name="submit" id="submit" value="Book a table" class="btn btn-primary btn-block">
												</div>
											</div>
										</div>
									</div>
				            </form>
			           	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@stop