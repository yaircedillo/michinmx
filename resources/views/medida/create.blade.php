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

            <div class="form-group row {{ $errors->has('medida')  ? 'has-error' : '' }} ">
                <label class="col-lg-4 col-form-label" >Unidad de Medida <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="icon-equalizer"></i></div>
                {!!Form::text('medida',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre de la medida.'])!!}
                
            </div>
            {!! $errors->first('medida','<span class="text-danger">:message</span>')!!}
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