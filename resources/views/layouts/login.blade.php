@extends('layouts.contenido.estilos')
@section('content')



				<form action ="{{route('valida')}}" method = 'POST' class="login100-form validate-form">
                       {{ csrf_field() }}
					<div class="wrap-input100  m-b-26 {{ $errors->has('user')  ? 'has-error' : '' }}"   >
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name='user' placeholder="Ingresa tu correo">
						<span class="focus-input100"></span>
						{!! $errors->first('user','<span class="text-danger">:message</span>')!!}
					</div>

					<div class="wrap-input100  m-b-18 {{ $errors->has('password')  ? 'has-error' : '' }}" >
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Coloca tu password">
						<span class="focus-input100"></span>
						{!! $errors->first('password','<span class="text-danger">:message</span>')!!}
					</div>

					

					<div class="container-login100-form-btn">
							<input  class="login100-form-btn" type = 'submit' value = 'Iniciar Sesion'>
						
					</div>
				</form>
				
				@if (Session::has('error'))
  				
			    <script>
    		    alertify.confirm('Michinmx dice ', '{{Session::get('error')}}', function(){ alertify.success('success') }
               , function(){ alertify.error('Cancel')});
					
        				
				</script>
				@endif
				
				
			
	@endsection
	
