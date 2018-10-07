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
					   					<h1>Contact</h1>
					   					<p><span><a href="#">Home</a></span> <span>Contact</span></p>
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

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<h2>Contact Us</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0">
						<div class="row">
							<div class="col-md-4 animate-box">
								<h3>My Address</h3>
								<ul class="contact-info">
									<li><span><i class="icon-map5"></i></span>88 West 21th Street, Suite 721 New York NY 10016</li>
									<li><span><i class="icon-phone4"></i></span>+ 1235 2355 98</li>
									<li><span><i class="icon-envelope2"></i></span><a href="#">info@yoursite.com</a></li>
									<li><span><i class="icon-globe3"></i></span><a href="#">www.yoursite.com</a></li>
								</ul>
							</div>
							<div class="col-md-7 col-md-push-1 animate-box">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Email">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="submit" value="Send Message" class="btn btn-primary">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="map" class="colorlib-map"></div>
@stop