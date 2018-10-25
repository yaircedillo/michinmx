@extends('layouts.admin')
@section('content')

{{csrf_field()}}

{!!Form::open(['route'=>'medida.store', 'method'=>'POST'])!!}



<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card  ">
        <div class="card-body ">
        <h4 class="card-title">Ingresar una nueva Unidad de Medida.</h4>
        <form class="form p-t-20">

            <div class="form-group row ">
                <label class="col-lg-4 col-form-label" >Unidad de Medida <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('medida',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.'])!!}
                
            </div>
                @if($errors->first('medida')) 
                <i> {{ $errors->first('medida') }} </i> 
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