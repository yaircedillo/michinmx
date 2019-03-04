@extends('layouts.admin')
@section('content')

{{csrf_field()}}
<!-- esta vista es llamada por el boton del index y contine un formulario  -->
{!!Form::open(['route'=>'usuarios.store', 'method'=>'POST', 'enctype' => 'multipart/form-data','files'=>'true'])!!}
<!-- esto es el form que mandara los datos a la ruta store del controlador con el metodo post -->


<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card  ">
        <div class="card-body ">
        <h4 class="card-title">Ingresar un nuevo usuario.</h4>
        
        <h6 class= "text-info">Campos obligatorios<span class="text-danger">*</span></h6>
        <br>
        <form class="table-responsive m-t-40">

            <div class="form-group row   {{ $errors->has('name')  ? 'has-error' : '' }}">
                <label class="col-lg-4 col-form-label" >Nombre Completo. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="icon-user"></i></div>
                {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Usuario.'])!!}
               
                
            </div>
            {!! $errors->first('name','<span class="text-danger">:message</span>')!!}
            </div> 

            

            
                        <div class="form-group row  {{ $errors->has('email')  ? 'has-error' : '' }} ">
                                <label class="col-lg-4 col-form-label" >Dirección de Correo.<span class="text-danger">*</span></label>
                                <div class="input-group">
                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'ejemplo@gmail.com'])!!}
                               
                                
                            </div>
                            {!! $errors->first('email','<span class="text-danger">:message</span>')!!}
                            </div>

            <div class="form-group row   {{ $errors->has('password')  ? 'has-error' : '' }}">
                <label class="col-lg-4 col-form-label" >Contraseña. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="icon-eye"></i></div>
                {!!Form::text('password',null,['class'=>'form-control', 'placeholder'=>'Colocar contraseña del usuario.'])!!}
              
                
            </div>
            {!! $errors->first('password','<span class="text-danger">:message</span>')!!}
            </div>

            <div class="form-group row   {{ $errors->has('user')  ? 'has-error' : '' }}">
                <label class="col-lg-4 col-form-label" >Nombre del usuario. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="icon-user"></i></div>
                {!!Form::text('user',null,['class'=>'form-control', 'placeholder'=>'Colocar el nombre para el inicio de sesión.'])!!}
               
                
            </div>
            {!! $errors->first('name','<span class="text-danger">:message</span>')!!}
            </div>  

            <div class="form-group row   {{ $errors->has('tipo')  ? 'has-error' : '' }} ">
                <div class="input-group-addon"><i class="ti-user"></i></div> <label class="col-lg-4 col-form-label" >Tipo de usuario. <span class="text-danger">*</span></label>
                <div class="col-md-9">
                    
                    
                    <input type = 'radio' name = 'tipo' value = 'admin' checked > Administrador
                    <input type = 'radio' name = 'tipo' value = 'user'>  Usuario
                    </select>
                </div>
                <div class="input-group">
          
            </div>
            {!! $errors->first('tipo','<span class="text-danger">:message</span>')!!}
            </div> 

            <div class="form-group row {{ $errors->has('img')  ? 'has-error' : '' }}">
                <label class="col-lg-4 col-form-label" >Imagen. </label>
                <div class="input-group">
                <div class="input-group-addon"><i class="icon-camera"></i></div>
                <input type="file" id="img" name="img">
            </div>
            <div>
            </div>
        </div>
        {!! $errors->first('img','<span class="text-danger">:message</span>')!!}
    </div>
            </div>
          
            </form>
     {!!Form::submit('Guardar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}
     <!-- el boton de arriba accionara el formulario el cual lo enviara a la funcion de store del controler usuario -->
     {!!Form::reset('Cancelar',[' class'=>'btn btn-inverse waves-effect waves-light'])!!}

    </div>
    </div>
    </div>
</div>  
 
{!!Form::close()!!}
@endsection
