@extends('layouts.admin')
@section('content')

{{csrf_field()}}

{!!Form::model($cartas,['route' => ['carta.update',$cartas->id_carta],'method'=>'PUT', 'enctype' => 'multipart/form-data','files'=>'true'])!!}



<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card  ">
        <div class="card-body ">
        <h4 class="card-title">Ingresar un nueva Carta.</h4>
        <form class="table-responsive m-t-40">
            
                <div class="form-group row ">
                        <label class="col-lg-4 col-form-label" >ID. <span class="text-danger">*</span></label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="ti-user"></i></div>
                        {!!Form::text('id_carta',null,['class'=>'form-control', 'readonly' => 'readonly'])!!}
                        
                    </div>
                        @if($errors->first('id_carta')) 
                        <i> {{ $errors->first('id_carta') }} </i> 
                        @endif  <br>
                    </div>
            
                    <div class="form-group row  {{ $errors->has('nombre')  ? 'has-error' : '' }} ">
                        <label class="col-lg-4 col-form-label" >Nombre. <span class="text-danger">*</span></label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre.'])!!}
                        
                    </div>
                    {!! $errors->first('nombre','<span class="text-danger">:message</span>')!!}
                    </div> 
            
                    <div class="form-group row {{ $errors->has('descripcion')  ? 'has-error' : '' }}">
                        <label class="col-lg-4 col-form-label" >Descripciòn. <span class="text-danger">*</span></label>
                        <div class="input-group">
                        <div class="input-group-addon"><i class="icon-menu"></i></div>
                        {!!Form::text('descripcion',null,['class'=>'form-control', 'placeholder'=>'Colocar una descripción.'])!!}
                        
                    </div>
                    {!! $errors->first('descripcion','<span class="text-danger">:message</span>')!!}
                </div> 

                <div class="form-group row {{ $errors->has('precio')  ? 'has-error' : '' }}">
                    <label class="col-lg-4 col-form-label" >Precio. <span class="text-danger">*</span></label>
                    <div class="input-group">
                    <div class="input-group-addon"><i class="icon-note"></i></div>
                    {!!Form::text('precio',null,['class'=>'form-control', 'placeholder'=>'Colocar el Precio.'])!!}
                    
                </div>
                {!! $errors->first('precio','<span class="text-danger">:message</span>')!!}
                </div>                  
                                
                                   
                                        
                                    
                <div class="form-group row  {{ $errors->has('id_tipo_c')  ? 'has-error' : '' }} ">
                    <label class="col-lg-4 col-form-label" >Tipo de Carta. <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                            <div class="input-group-addon"><i class="icon-key"></i></div>
                       <select class="form-control " name="id_tipo_c" id="$tipos">
                            <option value = '{{$id_tipo_c}}'> {{$tipos}}</option>
                            @foreach($demastipos as $tipo)
                            <option value="{{$tipo->id_tipo_c}}"> {{$tipo->nombre}}
                            </option>
                           @endforeach
                        </select>
                        </div>
                <div class="input-group">


                                                                            
                </div>
                {!! $errors->first('id_tipo_c','<span class="text-danger">:message</span>')!!}
                </div>
                                        
                <div class="form-group row {{ $errors->has('id_personal')  ? 'has-error' : '' }}">
                    <label class="col-lg-4 col-form-label" >Personales. <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                            <div class="input-group-addon"><i class="icon-key"></i></div>
                       <select class="form-control " name="id_personal">
                            <option value = '{{$id_personal}}'> {{$personales}}</option>
                            @foreach($demaspersonales as $personal)
                            <option value="{{$personal->id_personal}}">{{$personal->nombre}}
                            </option>
                           @endforeach
                        </select>
                        </div>
                        <div class="input-group">


                                                                            
                </div>
                {!! $errors->first('id_tipo_c','<span class="text-danger">:message</span>')!!}
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