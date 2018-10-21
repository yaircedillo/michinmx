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
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('personal.create')}}"   role="button"> + Agregar un nuevo Resgistro</a></td>
                               
                               
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
                                                <th>Genero</th>
                                                <th>Calle</th>
                                                <th>Colonia</th>
                                                <th>Código Postal</th>
                                                <th>Correo</th>
                                                <th>Telefono</th>
                                                <th>Municipio</th>
                                                <th>Puesto</th>
                                                <th>operaciones</th>  
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                              <th>#</th>
                                              <th>Nombre</th>
                                              <th>Apellido Paterno</th>
                                              <th>Apellido Materno</th>
                                              <th>Genero</th>
                                              <th>Calle</th>
                                              <th>Colonia</th>
                                              <th>Código Postal</th>
                                              <th>Correo</th>
                                              <th>Telefono</th>
                                              <th>Municipio</th>
                                              <th>Puesto</th>
                                              <th>operaciones</th>
                                              
                                            </tr>
                                    </tfoot>
                                        @foreach($personales as $personal)
                                        <tbody>
                                      <td>{{$personal->id_personal}}</td>
                                       <td>{{$personal->nombre}}</td>
                                       <td>{{$personal->ap_pat}}</td>
                                       <td>{{$personal->ap_mat}}</td>
                                       <td>{{$personal->genero}}</td>
                                       <td>{{$personal->calle}}</td>
                                       <td>{{$personal->colonia}}</td>
                                       <td>{{$personal->cp}}</td>
                                       <td>{{$personal->correo}}</td>
                                       <td>{{$personal->telefono}}</td>
                                       <td>{{$personal->id_municipios}}</td>
                                       <td>{{$personal->id_puesto}}</td>
                                       <td>
                                        {!!link_to_route('personal.edit', $title = 'Editar', $parameters = $personal->id_personales, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['personal.destroy',$personal->id_personales],'method'=>'DELETE'])!!} 
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