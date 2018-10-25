@extends('layouts.admin')
@section('content')

{{csrf_field()}}

{!!Form::open(['route'=>'proveedor.store', 'method'=>'POST'])!!}



<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card  ">
        <div class="card-body ">
        <h4 class="card-title">Ingresar un nuevo Proveedor.</h4>
        <form class="table-responsive m-t-40">

            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Nombre. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-user"></i></div>
                {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.'])!!}
                
            </div>
                @if($errors->first('nombre')) 
                <i> {{ $errors->first('nombre') }} </i> 
                @endif	<br>
            </div> 
            
            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Apellido Paterno. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-user"></i></div>
                {!!Form::text('ap_pat',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.'])!!}
                
            </div>
                @if($errors->first('ap_pat')) 
                <i> {{ $errors->first('ap_pat') }} </i> 
                @endif	<br>
            </div> 

            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Apellido Materno. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-user"></i></div>
                {!!Form::text('ap_mat',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.'])!!}
                
            </div>
                @if($errors->first('ap_mat')) 
                <i> {{ $errors->first('ap_mat') }} </i> 
                @endif	<br>
            </div> 

            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Genero. <span class="text-danger">*</span></label>
                <div class="col-md-9">
                    <div class="input-group-addon"><i class="ti-user"></i></div>
                    <select class="form-control custom-select" name="genero">
                        <option value="M">M</option>
                        <option value="F">F</option>
                    </select>
                </div>
                <div class="input-group">
          
            </div>
                @if($errors->first('ap_mat')) 
                <i> {{ $errors->first('ap_mat') }} </i> 
                @endif	<br>
            </div> 

            <div class="form-group row ">
                    <label class="col-lg-4 col-form-label" >Calle. <span class="text-danger">*</span></label>
                    <div class="input-group">
                    <div class="input-group-addon"><i class="ti-direction"></i></div>
                    {!!Form::text('calle',null,['class'=>'form-control', 'placeholder'=>'Nombre de la Calle.'])!!}
                    
                </div>
                    @if($errors->first('calle')) 
                    <i> {{ $errors->first('calle') }} </i> 
                    @endif	<br>
                </div>

                <div class="form-group row ">
                        <label class="col-lg-4 col-form-label" >Colonia. <span class="text-danger">*</span></label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="icon-cursor-move"></i></div>
                        {!!Form::text('colonia',null,['class'=>'form-control', 'placeholder'=>'Nombre de la Colonia.'])!!}
                        
                </div>
                        @if($errors->first('colonia')) 
                        <i> {{ $errors->first('colonia') }} </i> 
                        @endif	<br>
                </div>   

                <div class="form-group row ">
                        <label class="col-lg-4 col-form-label" >Código  Postal. <span class="text-danger">*</span></label>
                       <div class="input-group">
                        <div class="input-group-addon"><i class="icon-pin"></i></div>
                        {!!Form::text('cp',null,['class'=>'form-control', 'placeholder'=>'Colocar el código postal'])!!}
                           
                </div>
                            @if($errors->first('cp')) 
                            <i> {{ $errors->first('cp') }} </i> 
                            @endif	<br>
                        </div>  

                        <div class="form-group row ">
                                <label class="col-lg-4 col-form-label" >Dirección de Correo.<span class="text-danger">*</span></label>
                                <div class="input-group">
                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                {!!Form::text('correo',null,['class'=>'form-control', 'placeholder'=>'ejemplo@gmail.com'])!!}
                                
                            </div>
                                @if($errors->first('correo')) 
                                <i> {{ $errors->first('correo') }} </i> 
                                @endif	<br>
                            </div>

                            <div class="form-group row ">
                                    <label class="col-lg-4 col-form-label" >Telefono.<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="icon-screen-smartphone"></i></div>
                                    {!!Form::text('telefono',null,['class'=>'form-control', 'placeholder'=>'Coloca el numero de telefono'])!!}
                                    
                                </div>
                                    @if($errors->first('telefono')) 
                                    <i> {{ $errors->first('telefono') }} </i> 
                                    @endif	<br>
                                </div>
                                
                                <div class="form-group row ">
                                        <label class="col-lg-4 col-form-label" >Municipio. <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <div class="input-group-addon"><i class="icon-key"></i></div>
                                            <select class="form-control custom-select" name='id_municipios'>
                                                @foreach ($municipios as $municipio)
                                            <option value="{{$municipio['id_municipios']}}">{{$municipio['municipio']}}

                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-group">
                                        
                                        
                                    </div>
                                        @if($errors->first('id_municipios')) 
                                        <i> {{ $errors->first('id_municipios') }} </i> 
                                        @endif	<br>
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