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
			@include('folder.contenido')
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
									  
										@if (Session::has('message'))
										<script>
											alertify.alert("mensaje de confirmación","{{Session::get('message')}}", function(){
											alertify.message('OK');
										});
										</script>
									@endif
				
				
					 {!!Form::open(['route'=>'reservacion.store', 'method'=>'POST','class'=>'colorlib-form'])!!}
					@include('folder.reservar')
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