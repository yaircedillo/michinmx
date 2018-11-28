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
                                <h4 aling-text='center'>Registros de los Clientes... </h4>
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('cliente.create')}}"   role="button"> + Agregar un nuevo Registro</a></td>
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    
                                    <table class="table display">
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Correo</th>
                                                <th>Telefono</th>
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
                                              
                                              
                                            </tr>
                                    </tfoot>
                                    @if(count($clientes) > 0)
                                        @foreach($clientes as $cliente)
                                        <tbody>
                                       <td>{{$cliente->id_cliente}}</td>
                                       <td>{{$cliente->nombre}}</td>
                                       <td>{{$cliente->ap_pat}}</td>
                                       <td>{{$cliente->ap_mat}}</td>
                                       
                                       <td>{{$cliente->correo}}</td>
                                       <td>{{$cliente->telefono_c}}</td>
                                     
                                       
                                       <td>
                                            @if($cliente->deleted_at =="")
                                        {!!link_to_route('cliente.edit', $title = 'Editar', $parameters = $cliente->id_cliente, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['cliente.destroy',$cliente->id_cliente],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'  ])!!}
                                        {!!Form::close()!!}
                                        @else
                                        {!!link_to_route('cliente.show', $title = 'Restaurar', $parameters = $cliente->id_cliente, $attributes = ['class'=>'btn btn-info btn-flat btn-addon m-b-10 m-l-5'] )!!} 
                                        
                                        @endif

                                       </td>
                                        </tbody>
                                       @endforeach
                                       @endif
                                   </table>
                                </div>
                               </div>
                             </div>   
                           </div>
</div>
      
@endsection