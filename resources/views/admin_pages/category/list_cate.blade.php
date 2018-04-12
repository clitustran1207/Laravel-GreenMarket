@extends('admin_layout')
@section('css')
   <!-- DataTables -->
   <link href="admin/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <link href="admin/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <!-- Responsive datatable examples -->
   <link href="admin/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('title')
    Category List
@endsection
@section('breadcrumbs')
    {{Breadcrumbs::render('category_list')}}
@endsection
@section('content')
    <div class="row" ng-controller="Ad_CategoryController">
        <div class="col-12">
            <div class="card-box table-responsive">
                <div class="row" style="margin-bottom: 1rem">
                    <div class="col-sm-12 col-md-11">
                        <h4 class="m-t-0 header-title"><b>Buttons example</b></h4>
                        <p class="text-muted font-13 m-b-30">
                            The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. 
                            The core library provides the based framework upon which plug-ins can built.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-1">
                        <button type="button" class="btn btn-success waves-effect waves-light float-right">Add <i class="mdi mdi-plus-circle-outline"></i></button>
                    </div>
                </div>
                <div class="clearfix"></div>
                <table id="datatable" class="table table-colored table-primary table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Parent</th>
                        <th>Name</th>
                        <th style="width: 200px">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="cate in categories">
                        <td><% cate.name %></td>
                        <td><% cate.sub_name %></td>
                        <td>
                            <button type="button" class="btn btn-icon waves-effect waves-light btn-success" style="width: 12px"> <i class="fa fa-info"></i> </button>
                            <button type="button" class="btn btn-icon waves-effect waves-light btn-warning"> <i class="fa fa-pencil"></i> </button>
                            <button type="button" class="btn btn-icon waves-effect waves-light btn-danger" style="width: 12px"> <i class="fa fa-trash"></i> </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- Required datatable js -->
    <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Responsive examples -->
    <script src="admin/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="admin/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <script type="text/javascript">
        setTimeout(()=>{
            $('#datatable').DataTable();
        }, 1000);
    </script>
@endsection