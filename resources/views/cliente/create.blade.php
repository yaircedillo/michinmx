@extends('layouts.admin')
@section('content')

{{csrf_field()}}

{!!Form::open(['route'=>'cliente.store', 'method'=>'POST' ,'enctype'=>'multipart/form-data' ])!!}



<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card  ">
        <div class="card-body ">
        <h4 class="card-title">Ingresar un nuevo Cliente.</h4>
        <form class="table-responsive m-t-40">
            

            <div class="form-group row  {{ $errors->has('nombre')  ? 'has-error' : '' }} ">
                <label class="col-lg-4 col-form-label" >Nombre. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-user"></i></div>
                {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.'])!!}
                
            </div>
            {!! $errors->first('nombre','<span class="text-danger">:message</span>')!!}
            </div> 
            
            <div class="form-group row {{ $errors->has('ap_pat')  ? 'has-error' : '' }} ">
                <label class="col-lg-4 col-form-label" >Apellido Paterno. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-user"></i></div>
                {!!Form::text('ap_pat',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.'])!!}
                
            </div>
            {!! $errors->first('ap_pat','<span class="text-danger">:message</span>')!!}
            </div> 

            <div class="form-group row {{ $errors->has('ap_mat')  ? 'has-error' : '' }} ">
                <label class="col-lg-4 col-form-label" >Apellido Materno. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-user"></i></div>
                {!!Form::text('ap_mat',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.'])!!}
                
            </div>
            {!! $errors->first('ap_mat','<span class="text-danger">:message</span>')!!}
            </div> 

            <div class="form-group row   {{ $errors->has('genero')  ? 'has-error' : '' }} ">
                <label class="col-lg-4 col-form-label" >Genero. <span class="text-danger">*</span></label>
                <div class="col-md-9">
                    <div class="input-group-addon"><i class="ti-user"></i></div>
                    
                        <input type = 'radio' name = 'genero' value = 'M' checked >M
                    <input type = 'radio' name = 'genero' value = 'F'>F
                    </select>
                </div>
                <div class="input-group">
          
            </div>
            {!! $errors->first('genero','<span class="text-danger">:message</span>')!!}
            </div> 
        

            <div class="form-group row {{ $errors->has('calle')  ? 'has-error' : '' }} ">
                    <label class="col-lg-4 col-form-label" >Calle. <span class="text-danger">*</span></label>
                    <div class="input-group">
                    <div class="input-group-addon"><i class="ti-direction"></i></div>
                    {!!Form::text('calle',null,['class'=>'form-control', 'placeholder'=>'Nombre de la Calle.'])!!}
                    
                </div>
                {!! $errors->first('calle','<span class="text-danger">:message</span>')!!}
                </div>

                <div class="form-group row {{ $errors->has('colonia')  ? 'has-error' : '' }} ">
                        <label class="col-lg-4 col-form-label" >Colonia. <span class="text-danger">*</span></label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="icon-cursor-move"></i></div>
                        {!!Form::text('colonia',null,['class'=>'form-control', 'placeholder'=>'Nombre de la Colonia.'])!!}
                        
                </div>
                {!! $errors->first('colonia','<span class="text-danger">:message</span>')!!}
                </div>   

                <div class="form-group row  {{ $errors->has('cp')  ? 'has-error' : '' }}">
                        <label class="col-lg-4 col-form-label" >Código  Postal. <span class="text-danger">*</span></label>
                       <div class="input-group">
                        <div class="input-group-addon"><i class="icon-pin"></i></div>
                        {!!Form::text('cp',null,['class'=>'form-control', 'placeholder'=>'Colocar el código postal'])!!}
                           
                </div>
                {!! $errors->first('cp','<span class="text-danger">:message</span>')!!}
                        </div>  

                        <div class="form-group row  {{ $errors->has('correo')  ? 'has-error' : '' }}">
                                <label class="col-lg-4 col-form-label" >Dirección de Correo.<span class="text-danger">*</span></label>
                                <div class="input-group">
                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                {!!Form::text('correo',null,['class'=>'form-control', 'placeholder'=>'ejemplo@gmail.com'])!!}
                                
                            </div>
                            {!! $errors->first('correo','<span class="text-danger">:message</span>')!!}
                            </div>

                            <div class="form-group row {{ $errors->has('telefono_c')  ? 'has-error' : '' }} ">
                                    <label class="col-lg-4 col-form-label" >Telefono.<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="icon-screen-smartphone"></i></div>
                                    {!!Form::text('telefono_c',null,['class'=>'form-control', 'placeholder'=>'Coloca el numero de telefono'])!!}
                                    
                                </div>
                                {!! $errors->first('telefono_c','<span class="text-danger">:message</span>')!!}
                                </div>
                                
                                
                                <div class="form-group row {{ $errors->has('id_municipios')  ? 'has-error' : '' }} ">
                                    <label class="col-lg-4 col-form-label" >Municipio. <span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <div class="input-group-addon"><i class="icon-key"></i></div>
                                        <select class="form-control " name='id_municipios'>
                                            <option value="">--Escoje un Municipio--</option>
                                            @foreach ($municipios as $municipio)
                                        <option value="{{$municipio['id_municipios']}}">{{$municipio['municipio']}}

                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group">
                                    
                                    
                                </div>
                                {!! $errors->first('id_municipios','<span class="text-danger">:message</span>')!!}
                              </div> 
                                 
                                    
                                    
                                        
                                   
                                    
     </form>
   
        {!!Form::submit('Guardar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}
     {!!Form::reset('Limpiar',[' class'=>'btn btn-inverse waves-effect waves-light'])!!}
    </div>
    </div>
    </div>
</div>  


 
{!!Form::close()!!}
@endsection