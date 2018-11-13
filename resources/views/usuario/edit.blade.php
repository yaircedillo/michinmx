@extends('layouts.admin')
@section('content')

{!!Form::model($usuarios,['route' => ['usuarios.update',$usuarios->id],'method'=>'PUT', 'enctype' => 'multipart/form-data','files'=>'true'])!!} 

<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card">
        <div class="card-body">
        <h4 class="card-title">Editar datos de usuario</h4>
        <h6 class= "text-info">Campos obligatorios<span class="text-danger">*</span></h6>
        <br>
        <form class="table-responsive m-t-40">

            <div class="form-group row   {{ $errors->has('name')  ? 'has-error' : '' }}">
                <label class="col-lg-4 col-form-label" >Nombre. <span class="text-danger">*</span></label>
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
                <!-- esta es la caja de email o correo -->
                
            </div>
            {!! $errors->first('email','<span class="text-danger">:message</span>')!!}
            </div>

            <div class="form-group row   {{ $errors->has('password')  ? 'has-error' : '' }}">
                <label class="col-lg-4 col-form-label" >Contraseña. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="icon-eye"></i></div>
                {!!Form::text('password',base64_decode($usuarios->password),['class'=>'form-control', 'placeholder'=>'Cambiar contraseña.'])!!}
            </div>
            {!! $errors->first('password','<span class="text-danger">:message</span>')!!}
            </div> 
            
            <div class="form-group">
                <img src="img_usuario/{{$usuarios->archivo}}" alt="" style=" width: 200px; height: 100px;">
                <label class="col-lg-4 col-form-label" >Imagen. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-user"></i></div>
                <input type="file" id="img" name="img"> 
            </div>
            {!! $errors->first('img','<span class="text-danger">:message</span>')!!}
            </div>
          
            </form>
             {!!Form::submit('Actualizar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}

            
             {!!Form::close()!!}
             
    </div>
    </div>
    </div>
</div>



@endsection