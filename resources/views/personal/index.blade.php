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
                                <h4 aling-text='center'>Registros del Personal... </h4>
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('personal.create')}}"   role="button">
                                 + Agregar un nuevo Registro</a></td>
                                 <!-- esta linea tiene un boton que redirige a la funcion del controlador create donde llamara una vista  -->
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    
                                    <table class="table display ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Imagen</th>
                                            <th>operaciones</th>  
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                              <th>#</th>
                                              <th>Nombre</th>
                                              <th>Apellido Paterno</th>
                                              <th>Apellido Materno</th>
                                              <th>Correo</th>
                                              <th>Telefono</th>
                                              <th>Imagen</th>
                                              <th>operaciones</th>
                                              
                                            </tr>
                                      </tfoot>

                                        <tbody>
                                            @if(count($personales) > 0)
                                        @foreach($personales as $personal)
                                        <tr>
                                         <td>{{$personal->id_personal}}</td>
                                          <td>{{$personal->nombre}}</td>
                                          <td>{{$personal->ap_pat}}</td>
                                          <td>{{$personal->ap_mat}}</td>
                                          <td>{{$personal->correo}}</td>
                                          <td>{{$personal->telefono}}</td>
                                          <td><img src="img_usuario/{{$personal->archivo}}" alt="" style=" width: 200px; height: 100px;"></td>
                                          <td>
                                              @if($personal->deleted_at =="")
                                        {!!link_to_route('personal.edit', $title = 'Editar', $parameters = $personal->id_personal, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['personal.destroy',$personal->id_personal],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'  ])!!}
                                        {!!Form::close()!!}
                                        @else
                                        {!!link_to_route('personal.show', $title = 'Restaurar', $parameters = $personal->id_personal, $attributes = ['class'=>'btn btn-info btn-flat btn-addon m-b-10 m-l-5'] )!!} 
                                        
                                        @endif
                                          </td>
                                        </tr>

                                       @endforeach
                                       @endif
                                        </tbody>
                                   </table>
                                </div>
                               </div>
                             </div>   
                           </div>
</div>
      
@endsection