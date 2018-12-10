@extends('layouts.admin')
@section('content')

{!!Form::model($puesto,['route' => ['puesto.update',$puesto->id_puesto],'method'=>'PUT'])!!} 

<div class="row  justify-content-center">
     <div class="col-lg-6">
        <div class="card">
        <div class="card-body">
        <h4 class="card-title">Actualizar Informaciòn del Puesto ( {{ $puesto->puesto}} )</h4>
        <h6 class= "text-info">Campos obligatorios<span class="text-danger">*</span></h6>
        <br>
        <form class="form p-t-20">
       
     
        
            <div class="form-group">
                {!!Form::label('ID.')!!}
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-key"></i></div>
                {!!Form::text('id_puesto',null,['class'=>'form-control', 'readonly' => 'readonly'])!!}
            </div>
            
            <div class="form-group row {{ $errors->has('puesto')  ? 'has-error' : '' }} ">
                <label class="col-lg-4 col-form-label" >Puesto <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('puesto',null,['class'=>'form-control', 'placeholder'=>'Colocar el Puesto.'])!!}
                
            </div>
            {!! $errors->first('puesto','<span class="text-danger">:message</span>')!!}
     </div> 
     </form>
             {!!Form::submit('Actualizar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}

            
             {!!Form::close()!!}
             
    </div>
    </div>
    </div>
</div>



@endsection