@extends('layouts.admin')
@section('content')
{!!Form::open(['route'=>'admin.store', 'method'=>'POST'])!!}
<div class="row">
     <div class="col-lg-6">
        <div class="card">
        <div class="card-body">
        <h4 class="card-title">ESTADOS</h4>
        <form class="form p-t-20">
                                    
            <div class="form-group">
                {!!Form::label('Id del Estado.')!!}
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-key"></i></div>
                {!!Form::text('id_estado',null,['class'=>'form-control'])!!}
                 </div>
            </div>
            <div class="form-group">
                {!!Form::label('Estado.')!!}
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('estado',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.'])!!}
            </div>
     </div> 
             {!!Form::submit('Guardar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}
             {!!Form::submit('Cancelar',[' class'=>'btn btn-inverse waves-effect waves-light'])!!}
            
        </form>
    </div>
    </div>
    </div>
</div>  
{!!Form::close()!!}
@endsection