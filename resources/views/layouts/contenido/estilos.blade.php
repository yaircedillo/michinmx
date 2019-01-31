<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar seción</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="{{asset('login/images/icons/favicon.ico')}}"/>
   
<!--===============================================================================================-->
    {!!Html::style('/login/vendor/bootstrap/css/bootstrap.min.css')!!}

    {!!Html::style('/login/vendor/animate/animate.css')!!}
<!--===============================================================================================-->	
   
    {!!Html::style('/login/vendor/animsition/css/animsition.min.css')!!}
    

    {!!Html::style('/login/css/util.css')!!}
    {!!Html::style('/login/css/main.css')!!}
 

</head>
<body>
		

		
	
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">
				<div class="login100-form-title" >
					<span class="login100-form-title-1">
						Iniciar Sesión
					</span>
                </div>
                @yield('content')
            </div>
		</div>
	</div>
                <!--===============================================================================================-->
    
         {!!Html::script('/login/vendor/jquery/jquery-3.2.1.min.js')!!}
    <!--===============================================================================================-->
       
        {!!Html::script('/login/vendor/jquery/jquery-3.2.1.min.js')!!}
        {!!Html::script('/login/vendor/animsition/js/animsition.min.js')!!}
    <!--===============================================================================================-->
    
        {!!Html::script('/login/vendor/bootstrap/js/popper.js')!!}
        {!!Html::script('/login/vendor/bootstrap/js/bootstrap.min.js')!!}
    <!--===============================================================================================-->

       
        {!!Html::script('/login/js/main.js')!!}
  
</body>
    </html>