@extends('layouts.admin')
@section('content')

@if(Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
<div class="row justify-content-center">
<div class="col-lg-6">                 
<div class="card ">
                            <div class="card-title">
                                <h4 aling-text='center'>Puestos Registrados.. </h4>
                                @if(Session::get('sesiontipo')=="admin")
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('puesto.create')}}"   role="button"> + Agregar un nuevo Puesto</a></td>
                                @endif
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Puesto</th>
                                                <th>operaciones</th>  
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Puesto</th>
                                                
                                              
                                            </tr>
                                    </tfoot>
                                       @if(count($puestos) > 0)
                                        @foreach($puestos as $puesto)
                                        <tbody>
                                        <td>{{$puesto->id_puesto}}</td>
                                       <td>{{$puesto->puesto}}</td>
                                       <td>
                                        @if($puesto->deleted_at =="")
                                        {!!link_to_route('puesto.edit', $title = 'Editar', $parameters = $puesto->id_puesto, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['puesto.destroy',$puesto->id_puesto],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'])!!}
                                        {!!Form::close()!!}
                                        @else
                                        {!!link_to_route('puesto.show', $title = 'Restaurar', $parameters = $puesto->id_puesto, $attributes = ['class'=>'btn btn-info btn-flat btn-addon m-b-10 m-l-5'] )!!} 
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