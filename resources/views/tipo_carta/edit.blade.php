@extends('layouts.admin')
@section('content')
{{csrf_field()}}

{!!Form::model($tipo_cartas,['route' => ['tipo_carta.update',$tipo_cartas->id_tipo_c],'method'=>'PUT'])!!} 

<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card">
        <div class="card-body">
        <h4 class="card-title">Actualizar información del tipo de carta ( {{ $tipo_cartas->nombre}} )</h4>
        <h6 class= "text-info">Campos obligatorios<span class="text-danger">*</span></h6>
        <br>
        <form class="form p-t-20">
       
     
        
            <div class="form-group">
                {!!Form::label('ID.')!!}
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-key"></i></div>
                {!!Form::text('id_tipo_c',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.', 'readonly' => 'readonly'])!!}
            </div>
            <div class="form-group {{ $errors->has('nombre')  ? 'has-error' : '' }} ">
                <label class="col-lg-4 col-form-label" >Nombre <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.'])!!}
            </div>
            {!! $errors->first('nombre','<span class="text-danger">:message</span>')!!}
     </div> 
     </form>
             {!!Form::submit('Actualizar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}

            
             {!!Form::close()!!}
             
    </div>
    </div>
    </div>
</div>



@endsection