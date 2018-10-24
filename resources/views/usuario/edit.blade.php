@extends('layouts.admin')
@section('content')

{!!Form::model($usuarios,['route' => ['usuarios.update',$usuarios->id],'method'=>'PUT', 'enctype' => 'multipart/form-data','files'=>'true'])!!} 

<div class="row">
     <div class="col-lg-6">
        <div class="card">
        <div class="card-body">
        <h4 class="card-title">Editar datos de usuario</h4>
        <form class="form p-t-20">
       
        
            <div class="form-group">
                {!!Form::label('ID.')!!}
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-key"></i></div>
                {!!Form::text('id',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Usuario.', 'readonly' => 'readonly'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('Usuario.')!!}
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Usuario.'])!!}
            </div>

     </div>
            <div class="form-group">
                {!!Form::label('Email')!!}
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-key"></i></div>
                {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Email.'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('Paassword')!!}
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('password',base64_decode($usuarios->password),['class'=>'form-control', 'placeholder'=>'Cambiar contraseña.'])!!}
            </div>
            <div class="form-group">
                <img src="img_usuario/{{$usuarios->archivo}}" alt="" style=" width: 200px; height: 100px;">
                <label class="col-lg-4 col-form-label" >Imagen. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-user"></i></div>
                <input type="file" id="img" name="img"> 
            </div>

     </div>



     </form>
             {!!Form::submit('Actualizar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}

            
             {!!Form::close()!!}
             
    </div>
    </div>
    </div>
</div>



@endsection