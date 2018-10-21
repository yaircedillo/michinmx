<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('sistema/images/favicon.png')}}">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    
   
      
    {!!Html::style('/sistema/css/helper.css')!!}    
    {!!Html::style('/sistema/css/lib/bootstrap/bootstrap.min.css')!!}
    {!!Html::style('sistema/css/style.css')!!}
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Login</h4>
                                <form>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
        										<input type="checkbox"> Remember Me
        									</label>
                                        <label class="pull-right">
        										<a href="#">Forgotten Password?</a>
        									</label>

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
  
    {!!Html::script('/sistema/js/custom.min.js')!!}  
    {!!Html::script('/sistema/js/lib/sticky-kit-master/dist/sticky-kit.min.js')!!} 
    {!!Html::script('/sistema/js/sidebarmenu.js')!!} 
    {!!Html::script('/sistema/js/jquery.slimscroll.js')!!} 
    {!!Html::script('/sistema/js/lib/bootstrap/js/bootstrap.min.js')!!} 
    {!!Html::script('/sistema/js/lib/bootstrap/js/popper.min.js')!!} 
    {!!Html::script('/sistema/js/lib/jquery/jquery.min.js')!!} 

</body>

</html>