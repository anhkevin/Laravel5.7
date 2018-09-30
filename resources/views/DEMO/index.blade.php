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
                  <table id="table_id" class="display" style="width:100%;">
                        <thead>
                              <tr>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                              </tr>
                              <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                              </tr>
                        </tbody>
                  </table>
            </div>
      </div>          
@stop

@section('javascript')
      <script>
            $(document).ready( function () {
                  $('#table_id').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: '{{ route(' serverSide ') }}',
                        columnDefs: [{
                        targets: [0, 1, 2],
                        className: 'mdl-data-table__cell--non-numeric'
                        }]
                  });
            } );
      </script>
@stop