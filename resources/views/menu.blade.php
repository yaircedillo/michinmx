@extends('layouts.principal')
@section('content')
<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="index.html"><i class="flaticon-cutlery"></i><span>Lu</span><span>to</span></a>
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
				   						<span class="icon"><i class="flaticon-cutlery"></i></span>
					   					<h1>Our Menu</h1>
					   					<p><span><a href="#">Home</a></span> <span>Menu</span></p>
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
							<h2>Address</h2>
							<p>198 West 21th Street, Suite 721 New York NY 10016</p>
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
							<h2>Phone</h2>
							<p>+ 001 234 567</p>
							<p>+ 001 234 567</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-envelope"></i>
							</span>
							<h2>Email</h2>
							<p><a href="#">info@domain.com</a><br><a href="#">luto@email.com</a></p>
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

@stop