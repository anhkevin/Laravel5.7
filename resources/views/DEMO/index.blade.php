@extends('layouts.master')

@section('title','Demo laravel 5.7')
@section('breadcrumb')
      <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">
                  <a href="https://coreui.io/demo/#">Admin</a>
            </li>
      </ol>
@stop
@section('content')     
      <div class="card-header"><i class="icon-drop"></i> Theme colors</div>
      <div class="card-body">
            <div class="row">
                  <table class="datatable mdl-data-table dataTable" cellspacing="0" width="100%" role="grid" style="width: 100%;">
                        <thead>
                              <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Country</th>
                                    <th>Salary</th>
                              </tr>
                        </thead>
                        <tbody>
                        </tbody>
                  </table> 
            </div>
      </div>          
@stop

@section('javascript')
      <script>
            $(document).ready( function () {
                  $('.datatable').DataTable({
                        processing: true,
				serverSide: true,
				ajax: {
					"url":"<?= route('dataProcessingCustomer') ?>",
					"dataType":"json",
					"type":"GET",
					"data":{"_token":"<?= csrf_token() ?>"}
				},
				columns:[
					{"data":"id"},
					{"data":"name"},
					{"data":"phone"},
                              {"data":"email"},
                              {"data":"address"},
					{"data":"action","searchable":false,"orderable":false}
				]
                  });
            } );
      </script>
@stop