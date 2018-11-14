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
<!--===============================================================================================-->
    {!!Html::style('/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/login/vendor/animate/animate.css')!!}
<!--===============================================================================================-->	
    {!!Html::style('/login/vendor/css-hamburgers/hamburgers.min.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/login/vendor/animsition/css/animsition.min.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/login/vendor/select2/select2.min.css')!!}
<!--===============================================================================================-->	
    {!!Html::style('/login/vendor/daterangepicker/daterangepicker.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/login/css/util.css')!!}
    {!!Html::style('/login/css/main.css')!!}
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/login/images/bg-02.jpg');">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(/login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Iniciar Sesión
					</span>
				</div>

				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Correo</span>
						<input class="input100" type="text" name="username" placeholder="Ingresa tu correo">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Coloca tu password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Recuérdame
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Olvide mi contraseña?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
    <script src=""></script>
    {!!Html::script('/login/vendor/jquery/jquery-3.2.1.min.js')!!}
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    {!!Html::script('/login/vendor/jquery/jquery-3.2.1.min.js')!!}
<!--===============================================================================================-->

    {!!Html::script('/login/vendor/bootstrap/js/popper.js')!!}
    {!!Html::script('/login/vendor/bootstrap/js/bootstrap.min.js')!!}
<!--===============================================================================================-->
    {!!Html::script('/login/vendor/select2/select2.min.js')!!}
<!--===============================================================================================-->
    {!!Html::script('/login/vendor/daterangepicker/moment.min.jss')!!}
    {!!Html::script('/login/vendor/daterangepicker/daterangepicker.js')!!}
<!--===============================================================================================-->
    {!!Html::script('/login/vendor/countdowntime/countdowntime.js')!!}
<!--===============================================================================================-->
   
    {!!Html::script('/login/js/main.js')!!}

</body>
</html>