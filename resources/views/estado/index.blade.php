@extends('layouts.admin')
<?php $message=Session::get('message')?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Usuario creado exitosamente
</div>
@endif
    @section('content')
    <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                          
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
	
		                <thead>
                            <th>Id_Estado</th>
			                <th>Estado</th>
			                <th>Operacion</th>
		                </thead>
	@foreach($estados as $estado)
			<tbody>
                 <td>{{$estado->id_estado}}</td>
                <td>{{$estado->estado}}</td>
				<td></td>
			</tbody>
		@endforeach
	</table>
@endsection