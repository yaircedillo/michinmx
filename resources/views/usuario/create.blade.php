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
        <form class="table-responsive m-t-40">

            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Nombre. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class=0input-group-addon"><i class="ti-user"></i></div>
                {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Usuario.'])!!}
                <!-- esta es la caja de nombre -->
                
            </div>
                @if($errors->first('name')) 
                <i> {{ $errors->first('name') }} </i> 
                @endif	<br>
            </div> 
            

            
                        <div class="form-group row ">
                                <label class="col-lg-4 col-form-label" >Dirección de Correo.<span class="text-danger">*</span></label>
                                <div class="input-group">
                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'ejemplo@gmail.com'])!!}
                                <!-- esta es la caja de email o correo -->
                                
                            </div>
                                @if($errors->first('email')) 
                                <i> {{ $errors->first('email') }} </i> 
                                @endif	<br>
                            </div>

            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Contraseña. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-user"></i></div>
                {!!Form::text('password',null,['class'=>'form-control', 'placeholder'=>'Colocar contraseña del usuario.'])!!}
                <!-- esta es la caja de contraseña -->
                
            </div>
                @if($errors->first('password')) 
                <i> {{ $errors->first('password') }} </i> 
                @endif	<br>
            </div> 
            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Imagen. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-user"></i></div>
                <input type="file" id="img" name="img">
            </div>
            <div>
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