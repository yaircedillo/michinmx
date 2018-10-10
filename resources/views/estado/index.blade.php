@extends('layouts.admin')
@section('content')
<?php $message=Session::get('message')?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Estado creado exitosamente
</div>
@endif
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4 aling-text='center'>Estados Registrados.. </h4>

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
                                       {!!link_to_route('estado.edit', $title = 'Editar', $parameters = $estado->id_estado, $attributes = ['class'=>'btn btn-primary btn-outline m-b-10 m-l-5'])!!} 
                                       
                                       </td>
                                   </tbody>
                                       @endforeach
                                   </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
@endsection