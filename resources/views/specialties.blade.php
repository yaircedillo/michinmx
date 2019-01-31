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
					   					<p><span><a href="index.html">Inicio / </a></span> <span>Nuestras Especialidades</span></p>
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

		<div class="colorlib-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<span class="icon"><i class="flaticon-cutlery"></i></span>
						<h2>Nuestras Deliciosas Especialidades</h2>
						<p>En Michinmx lo primordial es la calidad no solo de los ingredientes, sino, especialmente la presentación de los platos así como su sabor.</p>
					  </div>
				</div>
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
								<div class="dis-tc">
									
									<span><a href="images/dish-6.jpg"><i class="icon-search3"></i></a></span>
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
								
									<span><a href="images/about.jpg"><i class="icon-search3"></i></a></span>
								</div>
							</div>
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/about.jpg);"></div>
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
									
									<span><a href="images/dish-5.jpg"><i class="icon-search3"></i></a></span>
								</div>
							</div>
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-5.jpg);"></div>
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
								
									<span><a href="images/dish-9.jpg"><i class="icon-search3"></i></a></span>
								</div>
							</div>
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/dish-9.jpg);"></div>
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
									
										<span><a href="images/dish-10.jpg"><i class="icon-search3"></i></a></span>
									</div>
								</div>
								<div class="wrap">
									<div class="dish-img" style="background-image: url(images/dish-10.jpg);"></div>
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
												
													<span><a href="images/dish-16.jpg"><i class="icon-search3"></i></a></span>
												</div>
											</div>
											<div class="wrap">
												<div class="dish-img" style="background-image: url(images/dish-16.jpg);"></div>
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
															
																<span><a href="images/dish-19.jpg"><i class="icon-search3"></i></a></span>
															</div>
														</div>
														<div class="wrap">
															<div class="dish-img" style="background-image: url(images/dish-19.jpg);"></div>
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
																		<p class="price"><span>$35.00</span></p>
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
			</div>
		</div>

@stop