@extends('layouts.admin')
@section('content')

{!!Form::model($estado,['route' => ['estado.update',$estado->id_estado],'method'=>'PUT'])!!} 

<div class="row">
     <div class="col-lg-6">
        <div class="card">
        <div class="card-body">
        <h4 class="card-title">Ingresar un nuevo Estado</h4>
        <form class="form p-t-20">
       
     
        
            <div class="form-group">
                {!!Form::label('ID.')!!}
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-key"></i></div>
                {!!Form::text('id_estado',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.', 'readonly' => 'readonly'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('Estado.')!!}
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('estado',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.'])!!}
            </div>
     </div> 
     </form>
             {!!Form::submit('Guardar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}
             {!!Form::submit('Cancelar',[' class'=>'btn btn-inverse waves-effect waves-light'])!!}
    </div>
    </div>
    </div>
</div>
             
            
       
{!!Form::close()!!}
@endsection