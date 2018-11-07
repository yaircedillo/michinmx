@extends('layouts.admin')
@section('content')
{{csrf_field()}}


{!!Form::model($promociones,['route' => ['promociones.update',$promociones->id_promocion],'method'=>'PUT'])!!} 
<div class="row justify-content-center">
     <div class="col-lg-6">
        <div class="card">
        <div class="card-body">
        <h4 class="card-title">Ingresar un nuevo Estado</h4>
        <form class="form p-t-20">
       
     
        
            <div class="form-group">
                {!!Form::label('ID.')!!}
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-key"></i></div>
                {!!Form::text('id_promocion',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.', 'readonly' => 'readonly'])!!}
            </div>
            <div class="form-group">
                <label class="col-lg-4 col-form-label" >Descripción <span class="text-danger">*</span></label>
                <div class="input-group">
                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                {!!Form::text('descripcion',null,['class'=>'form-control', 'placeholder'=>'Colocar el Nombre del Estado.'])!!}
            </div>
            @if($errors->first('descripcion')) 
            <i> {{ $errors->first('descripcion') }} </i> 
            @endif  <br>
     </div> 

            <div class="form-group row">
                 <label class="control-label text-right col-md-3">Fecha Inicio.<span class="text-danger">*</span></label>
                 <div class="col-md-9">
                 {!!Form::date('fecha_inicio',null,['class'=>'form-control', 'placeholder'=>'dd/mm/yyyy', 'type'=>'date'])!!}     
                 </div>
                 @if($errors->first('fecha_inicio')) 
                <i> {{ $errors->first('fecha_inicio') }} </i> 
                 @endif	<br>
            </div>
            <div class="form-group row">
                    <label class="control-label text-right col-md-3">Fecha Final.<span class="text-danger">*</span></label>
                    <div class="col-md-9">
                            
                    {!!Form::date('fecha_final',null,['class'=>'form-control', 'placeholder'=>'dd/mm/yyyy'])!!}     
                    </div>
                    @if($errors->first('fecha_final')) 
                    <i> {{ $errors->first('fecha_final') }} </i> 
                    @endif	<br>
            </div>
            <div class="form-group row ">
                    <label class="col-lg-4 col-form-label" >Horario. <span class="text-danger">*</span></label>
                    <div class="input-group">
                    <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                    {!!Form::text('horario',null,['class'=>'form-control', 'placeholder'=>'Colocar el Horario.'])!!}
                    </div>
                    @if($errors->first('horario')) 
                    <i> {{ $errors->first('horario') }} </i> 
                    @endif	<br>
            </div> 


     </form>
             {!!Form::submit('Actualizar',[' class'=>'btn btn-success waves-effect waves-light m-r-10'])!!}

            
             {!!Form::close()!!}
             
    </div>
    </div>
    </div>
</div>



@endsection