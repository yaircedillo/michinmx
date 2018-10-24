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
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('usuarios.create')}}"   role="button">
                                 + Agregar un nuevo Resgistro</a></td>
                                 <!-- esta linea tiene un boton que redirige a la funcion del controlador create donde llamara una vista  -->
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    
                                    <table class="table display ">
                                    <thead>
                                        <tr>
                                          <th>Nombre</th>
                                          <th>Correo</th>
                                          <th>Contraseña</th>
                                          <th>Imagen</th>
                                          <th>Operaciones</th>
                                        </tr>      
                                    </thead>

                                        <tbody>
                                        @foreach($usuarios as $usuario)
                                        <tr>
                                          <td>{{$usuario->name}}</td>
                                          <td>{{$usuario->email}}</td>
                                          <td>{{$usuario->password}}</td>
                                          <td><img src="img_usuario/{{$usuario->archivo}}" alt="" style=" width: 200px; height: 100px;"></td>
                                          <td>
                                        {!!link_to_route('usuarios.edit', $title = 'Editar', $parameters = $usuario->id, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['usuarios.destroy',$usuario->id],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'  ])!!}
                                        {!!Form::close()!!}
                                          </td>
                                        </tr>

                                       @endforeach
                                        </tbody>
                                   </table>
                                </div>
                               </div>
                             </div>   
                           </div>
</div>
      
@endsection