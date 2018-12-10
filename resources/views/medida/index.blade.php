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
                                <h4 aling-text='center'>Medidas Registradas.. </h4>
                                <td><a class="btn btn-dark btn-outline m-b-10 m-l-5" href="{{route('medida.create')}}"   role="button"> +  Nueva Unidad de Medida</a></td>
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Medida</th>
                                                <th>operaciones</th>  
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Estado</th>
                                                
                                              
                                            </tr>
                                    </tfoot>
                                     @if(count($unidades) > 0)
                                        @foreach($unidades as $unidad)
                                        <tbody>
                                        <td>{{$unidad->id_unidad}}</td>
                                       <td>{{$unidad->medida}}</td>
                                       
                                       <td>
                                     @if($unidad->deleted_at =="")
                                        {!!link_to_route('medida.edit', $title = 'Editar', $parameters = $unidad->id_unidad, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['medida.destroy',$unidad->id_unidad],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'  ])!!}
                                        {!!Form::close()!!}
                                    @else
                                         {!!link_to_route('medida.show', $title = 'Restaurar', $parameters = $unidad->id_unidad, $attributes = ['class'=>'btn btn-info btn-flat btn-addon m-b-10 m-l-5'] )!!} 
                                        
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