@extends('layouts.admin')
@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

<div class="col-lg-6">                 
<div class="card">
                            <div class="card-title">
                                <h4 aling-text='center'>Estados Registrados.. </h4>
                                <td><a class="btn btn-dark btn-outline btn-rounded m-b-10 m-l-5" href="{{route('estado.create')}}" role="button"> + Agregar un nuevo estado</a></td>
                               
                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                                <th>#</th>
                                                <th>Estado</th>
                                                <th>operaciones</th>  
                                        </tr>    
                                    </thead>
                                    <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Estado</th>
                                                <th>operaciones</th> 
                                            </tr>
                                    </tfoot>
                                        @foreach($estados as $estado)
                                        <tbody>
                                        <td>{{$estado->id_estado}}</td>
                                       <td>{{$estado->estado}}</td>
                                       <td>
                                        {!!link_to_route('estado.edit', $title = 'Editar', $parameters = $estado->id_estado, $attributes = ['class'=>'btn btn-warning btn-outline btn-rounded m-b-10 m-l-5'])!!} 
                                    
                                        {!!Form::open(['route' => ['estado.destroy',$estado->id_estado],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',[' class'=>'btn btn-danger btn-outline btn-rounded m-b-10 m-l-5'])!!}
                                        {!!Form::close()!!}
                                       </td>
                                        </tbody>
                                       @endforeach
                                   </table>
                                </div>
                            </div>
                        </div>
                        <!-- {!!link_to_route('estado.destroy', $title = 'Eliminar', $parameters = $estado->id_estado, $attributes = ['class'=>'btn btn-danger btn-outline btn-rounded m-b-10 m-l-5'])!!}  -->
                    </div>
@endsection