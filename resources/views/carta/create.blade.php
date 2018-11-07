@extends('layouts.admin')
@section('content')

{{csrf_field()}}

{!!Form::open(['route'=>'carta.store', 'method'=>'POST' ,'enctype'=>'multipart/form-data' ])!!}



<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card  ">
        <div class="card-body ">
        <h4 class="card-title">Ingresar un nueva Carta.</h4>
        <form class="table-responsive m-t-40">
            

            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Nombre. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-user"></i></div>
                {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre de la  Carta.'])!!}
                
            </div>
                @if($errors->first('nombre')) 
                <i> {{ $errors->first('nombre') }} </i> 
                @endif	<br>
            </div> 
            
            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Descripciòn. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-user"></i></div>
                {!!Form::text('descripcion',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre de la  Carta.'])!!}
                
            </div>
                @if($errors->first('descripcion')) 
                <i> {{ $errors->first('descripcion') }} </i> 
                @endif	<br>
            </div> 

            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Precio. <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-user"></i></div>
                {!!Form::text('precio',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre de la  Carta.'])!!}
                
            </div>
                @if($errors->first('precio')) 
                <i> {{ $errors->first('precio') }} </i> 
                @endif	<br>
            </div>                  
                                
                                    
                                        
                                    
                                    <div class="form-group row ">
                                            <label class="col-lg-4 col-form-label" >Tipo de Carta. <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                    <div class="input-group-addon"><i class="icon-key"></i></div>
                                               <select class="form-control " name="id_tipo_c">
                                                    @foreach($tipos as $tipo)
                                                    <option value="{{$tipo['id_tipo_c']}}"> {{$tipo['nombre']}}
                                                    </option>
                                                   @endforeach
                                                </select>
                                                </div>
                                                <div class="input-group">
    
    
                                                                                                    
                                        </div>
                                            @if($errors->first('id_tipo_c')) 
                                            <i> {{ $errors->first('id_tipo_c') }} </i> 
                                            @endif	<br>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="col-lg-4 col-form-label" >Personales. <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                    <div class="input-group-addon"><i class="icon-key"></i></div>
                                               <select class="form-control " name="id_personal">
                                                    @foreach($personales as $personal)
                                                    <option value="{{$personal['id_personal']}}">{{$personal['nombre']}}
                                                    </option>
                                                   @endforeach
                                                </select>
                                                </div>
                                                <div class="input-group">
    
    
                                                                                                    
                                        </div>
                                            @if($errors->first('id_personal')) 
                                            <i> {{ $errors->first('id_personal') }} </i> 
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