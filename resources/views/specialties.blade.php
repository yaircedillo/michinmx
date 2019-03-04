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
			   	<li style="background-image: url(images/blog-6.jpg);" data-stellar-background-ratio="0.5">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
											<div class="centrado">
													<span> <img src="{{asset('/images/icons/salad.png')}}" > </span>
											</div>
					   					<h1>Nuestras Deliciosas Especialidades</h1>
					   					<p><span><a href="{!!URL::to('/')!!}">Inicio / </a></span> <span>Nuestras Especialidades</span></p>
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

			
			<div class="colorlib-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
							<span> <img src="{{asset('/images/icons/menu.png')}}" > </span>
						
							<h2>Nuestras Deliciosas Especialidades</h2>
							<p>En Michinmx lo primordial es la calidad no solo de los ingredientes, sino, especialmente la presentación de los platos así como su sabor.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="row">
								<div class="col-md-12 text-center">
									<ul class="nav nav-tabs text-center" role="tablist">
									
									
										<li role="presentation"><a href="#main" aria-controls="desserts" role="tab" data-toggle="tab">Plantillos</a></li>
										<li role="presentation"><a href="#Comida" aria-controls="desserts" role="tab" data-toggle="tab">Bebidas</a></li>
										<li role="presentation"><a href="#Snacks" aria-controls="desserts" role="tab" data-toggle="tab">Snacks</a></li>
				
									</ul>
								</div>
							</div>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="main">
									<div class="row">
											<ul class="menu-dish">
										  <div class="row">
												<div class="col-md-4 animate-box">
													<div class="dish-wrap">
														<p class="price"><span>$?</span></p>
														<div class="addtocart">
															<div class="dis-tc">
																<span><a  href="images/dish-1.jpg"><i class="icon-search3"></i></a></span>	
															</div>
														</div>
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
														<p class="price"><span>$?</span></p>
														<div class="addtocart">
															<div class="dis-tc" data-animate="fadeInDown">
																<span><a data-rel="prettyPhoto" href="images/dish-6.jpg" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search"></i></a></span>
															</div>
														</div>
														<div class="wrap">
															<div class="dish-img" style="background-image: url(images/dish-6.jpg);"></div>
															<div class="desc">
																<h2><a href="#">Pizza with strawberries</a></h2>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 animate-box">
													<div class="dish-wrap">
														<p class="price"><span>$?</span></p>
														<div class="addtocart">
															<div class="dis-tc">
																
																<span><a href="images/dish-3.jpg"><i class="icon-search3"></i></a></span>
															</div>
														</div>
														<div class="wrap">
															<div class="dish-img" style="background-image: url(images/dish-3.jpg);"></div>
															<div class="desc">
																<h2><a href="#">Luto Grilled Beef</a></h2>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 animate-box">
													<div class="dish-wrap">
														<p class="price"><span>$?</span></p>
														<div class="addtocart">
															<div class="dis-tc">
																
																<span><a href="images/dish-4.jpg"><i class="icon-search3"></i></a></span>
															</div>
														</div>
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
														<p class="price"><span>$?</span></p>
														<div class="addtocart">
															<div class="dis-tc">
																
																<span><a href="images/imagen-5.jpg"><i class="icon-search3"></i></a></span>
															</div>
														</div>
														<div class="wrap">
															<div class="dish-img" style="background-image: url(images/imagen-5.jpg);"></div>
															<div class="desc">
																<h2><a href="#">Pizza with strawberries</a></h2>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 animate-box">
													<div class="dish-wrap">
														<p class="price"><span>$?</span></p>
														<div class="addtocart">
															<div class="dis-tc">
														
																<span><a href="images/imagen-6.jpg"><i class="icon-search3"></i></a></span>
															</div>
														</div>
														<div class="wrap">
															<div class="dish-img" style="background-image: url(images/imagen-6.jpg);"></div>
															<div class="desc">
																<h2><a href="#">Luto Grilled Beef</a></h2>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 animate-box">
														<div class="dish-wrap">
															<p class="price"><span>$?</span></p>
															<div class="addtocart">
																<div class="dis-tc">
																
																	<span><a href="images/dish-11.jpg"><i class="icon-search3"></i></a></span>
																</div>
															</div>
															<div class="wrap">
																<div class="dish-img" style="background-image: url(images/dish-11.jpg);"></div>
																<div class="desc">
																	<h2><a href="#">Luto Grilled Beef</a></h2>
																</div>
															</div>
														</div>
												</div>
												<div class="col-md-4 animate-box">
														<div class="dish-wrap">
															<p class="price"><span>$75.00</span></p>
															<div class="addtocart">
																<div class="dis-tc">
																
																	<span><a href="images/dish-12.jpg"><i class="icon-search3"></i></a></span>
																</div>
															</div>
															<div class="wrap">
																<div class="dish-img" style="background-image: url(images/dish-12.jpg);"></div>
																<div class="desc">
																	<h2><a href="#">Chilaquiles verdes o rojos.</a></h2>
																</div>
															</div>
														</div>
												</div>
												<div class="col-md-4 animate-box">
														<div class="dish-wrap">
															<p class="price"><span>$?</span></p>
															<div class="addtocart">
																<div class="dis-tc">
																
																	<span><a href="images/dish-13.jpg"><i class="icon-search3"></i></a></span>
																</div>
															</div>
															<div class="wrap">
																<div class="dish-img" style="background-image: url(images/dish-13.jpg);"></div>
																<div class="desc">
																	<h2><a href="#">Luto Grilled Beef</a></h2>
																</div>
															</div>
														</div>
												</div>
												<div class="col-md-4 animate-box">
														<div class="dish-wrap">
															<p class="price"><span>$?</span></p>
															<div class="addtocart">
																<div class="dis-tc">
																
																	<span><a href="images/dish-14.jpg"><i class="icon-search3"></i></a></span>
																</div>
															</div>
															<div class="wrap">
																<div class="dish-img" style="background-image: url(images/dish-14.jpg);"></div>
																<div class="desc">
																	<h2><a href="#">Luto Grilled Beef</a></h2>
																</div>
															</div>
														</div>
													</div>
												<div class="col-md-4 animate-box">
														<div class="dish-wrap">
															<p class="price"><span>$65</span></p>
															<div class="addtocart">
																<div class="dis-tc">
																
																	<span><a href="images/dish-18.jpg"><i class="icon-search3"></i></a></span>
																</div>
															</div>
															<div class="wrap">
																<div class="dish-img" style="background-image: url(images/dish-18.jpg);"></div>
																<div class="desc">
																	<h2><a href="#">Desayuno light</a></h2>
																</div>
															</div>
														</div>
											   </div>	
											   <div class="col-md-4 animate-box">
													<div class="dish-wrap">
														<p class="price"><span>$?</span></p>
														<div class="addtocart">
															<div class="dis-tc">
															
																<span><a href="images/dish-20.jpg"><i class="icon-search3"></i></a></span>
															</div>
														</div>
														<div class="wrap">
															<div class="dish-img" style="background-image: url(images/dish-20.jpg);"></div>
															<div class="desc">
																<h2><a href="#">Luto Grilled Beef</a></h2>
															</div>
														</div>
													</div>
											   </div>
											   <div class="col-md-4 animate-box">
													<div class="dish-wrap">
														<p class="price"><span>$20.00</span></p>
														<div class="addtocart">
															<div class="dis-tc">
															
																<span><a href="images/dish-21.jpg"><i class="icon-search3"></i></a></span>
															</div>
														</div>
														<div class="wrap">
															<div class="dish-img" style="background-image: url(images/dish-21.jpg);"></div>
															<div class="desc">
																<h2><a href="#">Plato de Arroz</a></h2>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 animate-box">
														<div class="dish-wrap">
															<p class="price"><span>$?</span></p>
															<div class="addtocart">
																<div class="dis-tc">
																
																	<span><a href="images/dish-22.jpg"><i class="icon-search3"></i></a></span>
																</div>
															</div>
															<div class="wrap">
																<div class="dish-img" style="background-image: url(images/dish-22.jpg);"></div>
																<div class="desc">
																	<h2><a href="#">Luto Grilled Beef</a></h2>
																</div>
															</div>
														</div>
												</div>
												<div class="col-md-4 animate-box">
														<div class="dish-wrap">
															<p class="price"><span>$?</span></p>
															<div class="addtocart">
																<div class="dis-tc">
																
																	<span><a href="images/dish-26.jpg"><i class="icon-search3"></i></a></span>
																</div>
															</div>
															<div class="wrap">
																<div class="dish-img" style="background-image: url(images/dish-26.jpg);"></div>
																<div class="desc">
																	<h2><a href="#">Luto Grilled Beef</a></h2>
																</div>
															</div>
														</div>
												</div>
												<div class="col-md-4 animate-box">
														<div class="dish-wrap">
															<p class="price"><span>$?</span></p>
															<div class="addtocart">
																<div class="dis-tc">
																
																	<span><a href="images/dish-27.jpg"><i class="icon-search3"></i></a></span>
																</div>
															</div>
															<div class="wrap">
																<div class="dish-img" style="background-image: url(images/dish-27.jpg);"></div>
																<div class="desc">
																	<h2><a href="#">Luto Grilled Beef</a></h2>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 animate-box">
															<div class="dish-wrap">
																<p class="price"><span>$75.00</span></p>
																<div class="addtocart">
																	<div class="dis-tc">
																	
																		<span><a href="images/dish-28.jpg"><i class="icon-search3"></i></a></span>
																	</div>
																</div>
																<div class="wrap">
																	<div class="dish-img" style="background-image: url(images/dish-28.jpg);"></div>
																	<div class="desc">
																		<h2><a href="#">Tacos Dorados</a></h2>
																	</div>
																</div>
															</div>
													</div>
													<div class="col-md-4 animate-box">
															<div class="dish-wrap">
																<p class="price"><span>$?</span></p>
																<div class="addtocart">
																	<div class="dis-tc">
																	
																		<span><a href="images/dish-29.jpg"><i class="icon-search3"></i></a></span>
																	</div>
																</div>
																<div class="wrap">
																	<div class="dish-img" style="background-image: url(images/dish-29.jpg);"></div>
																	<div class="desc">
																		<h2><a href="#">Luto Grilled Beef</a></h2>
																	</div>
																</div>
															</div>
														</div>
										  </div> 
										</ul>				
									</div>
								</div>
		
								<div role="tabpanel" class="tab-pane" id="Comida">
									<div class="row">
										<ul class="menu-dish">
											<div class="row">
												<div class="col-md-4 animate-box">
															<div class="dish-wrap">
																<p class="price"><span>$?</span></p>
																<div class="addtocart">
																	<div class="dis-tc">
																	
																		<span><a href="images/about.jpg"><i class="icon-search3"></i></a></span>
																	</div>
																</div>
																<div class="wrap">
																	<div class="dish-img" style="background-image: url(images/about.jpg);"></div>
																	<div class="desc">
																		<h2><a href="#">Café</a></h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-4 animate-box">
																<div class="dish-wrap">
																	<p class="price"><span>$?</span></p>
																	<div class="addtocart">
																		<div class="dis-tc">
																			
																			<span><a href="images/dish-5.jpg"><i class="icon-search3"></i></a></span>
																		</div>
																	</div>
																	<div class="wrap">
																		<div class="dish-img" style="background-image: url(images/dish-5.jpg);"></div>
																		<div class="desc">
																			<h2><a href="#">ABSOLUT ELYX</a></h2>
																		</div>
																	</div>
																</div>
														</div>
														
														<div class="col-md-4 animate-box">
																<div class="dish-wrap">
																	<p class="price"><span>$?</span></p>
																	<div class="addtocart">
																		<div class="dis-tc">
																		
																			<span><a href="images/dish-9.jpg"><i class="icon-search3"></i></a></span>
																		</div>
																	</div>
																	<div class="wrap">
																		<div class="dish-img" style="background-image: url(images/dish-9.jpg);"></div>
																		<div class="desc">
																			<h2><a href="#">Hennessy X.O</a></h2>
																		</div>
																	</div>
																</div>
														</div>
														
														<div class="col-md-4 animate-box">
																<div class="dish-wrap">
																	<p class="price"><span>$?</span></p>
																	<div class="addtocart">
																		<div class="dis-tc">
																		
																			<span><a href="images/dish-10.jpg"><i class="icon-search3"></i></a></span>
																		</div>
																	</div>
																	<div class="wrap">
																		<div class="dish-img" style="background-image: url(images/dish-10.jpg);"></div>
																		<div class="desc">
																			<h2><a href="#">Buchanans Deluxe</a></h2>
																		</div>
																	</div>
																</div>
														</div>
														<div class="col-md-4 animate-box">
																<div class="dish-wrap">
																	<p class="price"><span>$?</span></p>
																	<div class="addtocart">
																		<div class="dis-tc">
																		
																			<span><a href="images/dish-16.jpg"><i class="icon-search3"></i></a></span>
																		</div>
																	</div>
																	<div class="wrap">
																		<div class="dish-img" style="background-image: url(images/dish-16.jpg);"></div>
																		<div class="desc">
																			<h2><a href="#">Donjulio 70</a></h2>
																		</div>
																	</div>
																</div>
															</div>

															<div class="col-md-4 animate-box">
																	<div class="dish-wrap">
																		<p class="price"><span>$?</span></p>
																		<div class="addtocart">
																			<div class="dis-tc">
																			
																				<span><a href="images/dish-15.jpg"><i class="icon-search3"></i></a></span>
																			</div>
																		</div>
																		<div class="wrap">
																			<div class="dish-img" style="background-image: url(images/dish-15.jpg);"></div>
																			<div class="desc">
																				<h2><a href="#">Luto Grilled Beef</a></h2>
																			</div>
																		</div>
																	</div>
															</div>
															<div class="col-md-4 animate-box">
																	<div class="dish-wrap">
																		<p class="price"><span>$?</span></p>
																		<div class="addtocart">
																			<div class="dis-tc">
																			
																				<span><a href="images/dish-17.jpg"><i class="icon-search3"></i></a></span>
																			</div>
																		</div>
																		<div class="wrap">
																			<div class="dish-img" style="background-image: url(images/dish-17.jpg);"></div>
																			<div class="desc">
																				<h2><a href="#">TORRES 15.</a></h2>
																			</div>
																		</div>
																	</div>
															</div>
															<div class="col-md-4 animate-box">
																<div class="dish-wrap">
																	<p class="price"><span>$?</span></p>
																	<div class="addtocart">
																		<div class="dis-tc">
																		
																			<span><a href="images/bebidas-8.jpg"><i class="icon-search3"></i></a></span>
																		</div>
																	</div>
																	<div class="wrap">
																		<div class="dish-img" style="background-image: url(images/bebidas-8.jpg);"></div>
																		<div class="desc">
																			<h2><a href="#">TORRES 15.</a></h2>
																		</div>
																	</div>
																</div>
														</div>
															<div class="col-md-4 animate-box">
																<div class="dish-wrap">
																	<p class="price"><span>$?</span></p>
																	<div class="addtocart">
																		<div class="dis-tc">
																		
																			<span><a href="images/bebida-13.jpg"><i class="icon-search3"></i></a></span>
																		</div>
																	</div>
																	<div class="wrap">
																		<div class="dish-img" style="background-image: url(images/bebida-13.jpg);"></div>
																		<div class="desc">
																			<h4><a style="color:#000000" href="#">JOHNNIE WALKER BLACK LABEL</a></h4>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-4 animate-box">
																<div class="dish-wrap">
																	<p class="price"><span>$?</span></p>
																	<div class="addtocart">
																		<div class="dis-tc">
																		
																			<span><a href="images/bebidas-2.jpg"><i class="icon-search3"></i></a></span>
																		</div>
																	</div>
																	<div class="wrap">
																		<div class="dish-img" style="background-image: url(images/bebidas-2.jpg);"></div>
																		<div class="desc">
																			<h2><a href="#">BUCHANAN'S 18</a></h2>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="col-md-4 animate-box">
																<div class="dish-wrap">
																	<p class="price"><span>$?</span></p>
																	<div class="addtocart">
																		<div class="dis-tc">
																		
																			<span><a href="images/bebidas-4.jpg"><i class="icon-search3"></i></a></span>
																		</div>
																	</div>
																	<div class="wrap">
																		<div class="dish-img" style="background-image: url(images/bebidas-4.jpg);"></div>
																		<div class="desc">
																			<h2><a href="#">ABSOLUT VODKA</a></h2>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-4 animate-box">
																<div class="dish-wrap">
																	<p class="price"><span>$?</span></p>
																	<div class="addtocart">
																		<div class="dis-tc">
																		
																			<span><a href="images/bebidas-5.jpg"><i class="icon-search3"></i></a></span>
																		</div>
																	</div>
																	<div class="wrap">
																		<div class="dish-img" style="background-image: url(images/bebidas-5.jpg);"></div>
																		<div class="desc">
																			<h2><a href="#">Martell cognac V.S.O.P</a></h2>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-4 animate-box">
																<div class="dish-wrap">
																	<p class="price"><span>$?</span></p>
																	<div class="addtocart">
																		<div class="dis-tc">
																		
																			<span><a href="images/bebidas-6.jpg"><i class="icon-search3"></i></a></span>
																		</div>
																	</div>
																	<div class="wrap">
																		<div class="dish-img" style="background-image: url(images/bebidas-6.jpg);"></div>
																		<div class="desc">
																			<h2><a href="#">Cerveza 2X1</a></h2>
																		</div>
																	</div>
																</div>
															</div>
															
														
															
												
											</div>
										</ul>
									</div>
								</div>
									
								
		
								<div role="tabpanel" class="tab-pane" id="Snacks">
										<div class="row">
												<ul class="menu-dish">
													<div class="row">
															<div class="col-md-4 animate-box">
																	<div class="dish-wrap">
																		<p class="price"><span>$ 15.00</span></p>
																		<div class="addtocart">
																			<div class="dis-tc">
																			
																				<span><a href="images/dish-19.jpg"><i class="icon-search3"></i></a></span>
																			</div>
																		</div>
																		<div class="wrap">
																			<div class="dish-img" style="background-image: url(images/dish-19.jpg);"></div>
																			<div class="desc">
																				<h2><a href="#">Plato de Fruta.</a></h2>
																			</div>
																		</div>
																	</div>
															</div>
															
															<div class="col-md-4 animate-box">
																	<div class="dish-wrap">
																		<p class="price"><span>$ 35.00</span></p>
																		<div class="addtocart">
																			<div class="dis-tc">
																			
																				<span><a href="images/dish-23.jpg"><i class="icon-search3"></i></a></span>
																			</div>
																		</div>
																		<div class="wrap">
																			<div class="dish-img" style="background-image: url(images/dish-23.jpg);"></div>
																			<div class="desc">
																				<h2><a href="#"> Ensalada de lechuga,jitomate </a>
																			       <a href="#">  y aguacate</a></h2>
																			</div>
																		</div>
																	</div>
															</div>
															<div class="col-md-4 animate-box">
																	<div class="dish-wrap">
																		<p class="price"><span>$ 15.00</span></p>
																		<div class="addtocart">
																			<div class="dis-tc">
																			
																				<span><a href="images/dish-25.jpg"><i class="icon-search3"></i></a></span>
																			</div>
																		</div>
																		<div class="wrap">
																			<div class="dish-img" style="background-image: url(images/dish-25.jpg);"></div>
																			<div class="desc">
																				<h2><a href="#">Plato de Fruta.</a></h2>
																			</div>
																		</div>
																	</div>
															</div>
															<div class="col-md-4 animate-box">
																<div class="dish-wrap">
																	<p class="price"><span>$ 15.00</span></p>
																	<div class="addtocart">
																		<div class="dis-tc">
																		
																			<span><a href="images/snacks-10.jpg"><i class="icon-search3"></i></a></span>
																		</div>
																	</div>
																	<div class="wrap">
																		<div class="dish-img" style="background-image: url(images/snacks-10.jpg);"></div>
																		<div class="desc">
																			<h2><a href="#">Plato de Fruta.</a></h2>
																		</div>
																	</div>
																</div>
														</div>
															
														
															
													</div>
												</ul>
										</div>
									</div>
							</div>

							
									
							</div>
						</div>
						<div class="col-md-12 animate-box text-center">
							<p>¿ Te dio hambre de repente ?....</p>
							
							<p><a href="{!!URL::to('reservaciones')!!}" class="btn btn-primary btn-outline btn-md">Pedir una mesa </a></p>
						</div>
					</div>
				</div>
			</div>
		



@stop