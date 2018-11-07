@extends('layouts.admin')
@section('content')

@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
             
<div class="card ">
                            <div class="card-title">
                                <h4 aling-text='center'>Promociones  Registrados.. </h4>
                            <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('promociones.create')}}"   role="button"> + Agregar una nueva Promoción</a></td> 
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive  m-t-40">
                                    
                                    <table class=" table display ">
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Descripción</th>
                                                <th>Fecha Inicio</th>
                                                <th>Fecha Final</th>
                                                <th>Horario</th>
                                                <th>operaciones</th>  
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                                    <th>#</th>
                                                <th>Descripción</th>
                                                <th>Fecha Inicio</th>
                                                <th>Fecha Final</th>
                                                <th>Horario</th>
                                                <th>operaciones</th>
                                                
                                              
                                            </tr>
                                    </tfoot>
                                        @foreach($promociones as $promocion)
                                        <tbody>
                                        <td>{{$promocion->id_promocion}}</td>
                                       <td>{{$promocion->descripcion}}</td>
                                       <td>{{$promocion->fecha_inicio}}</td>
                                       <td>{{$promocion->fecha_final}}</td>
                                       <td>{{$promocion->horario}}</td>
                                       <td>
                                        {!!link_to_route('promociones.edit', $title = 'Editar', $parameters = $promocion->id_promocion, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['promociones.destroy',$promocion->id_promocion],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'  ])!!}
                                        {!!Form::close()!!}

                                       </td>
                                        </tbody>
                                       @endforeach
                                   </table>
                                </div>
                               </div>
                             </div>   
                           </div>
</div>
      
@endsection