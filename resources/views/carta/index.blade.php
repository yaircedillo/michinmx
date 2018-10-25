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
                                <h4 aling-text='center'>Registros de las Cartas... </h4>
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('carta.create')}}"   role="button"> + Agregar un nuevo Resgistro</a></td>
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    
                                    <table class="table display">
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Descripciòn</th>
                                                <th>Precio</th>                                                
                                              
                                               
                                                <th>operaciones</th>  
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                            
                                                    <th>#</th>
                                                    <th>Nombre</th>
                                                    <th>Descripciòn</th>
                                                    <th>Precio</th>                                                
                                                   
                                                    
                                                  
                                              
                                            </tr>
                                    </tfoot>
                                        @foreach($cartas as $carta)
                                        <tbody>
                                       <td>{{$carta->id_carta}}</td>
                                       <td>{{$carta->nombre}}</td>
                                       <td>{{$carta->descripcion}}</td>
                                       <td>{{$carta->precio}}</td>
                                       
                                     
                                       
                                        <td>
                                        {!!link_to_route('carta.edit', $title = 'Editar', $parameters = $carta->id_carta, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                        {!!Form::open(['route' => ['carta.destroy',$carta->id_carta],'method'=>'DELETE'])!!} 
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