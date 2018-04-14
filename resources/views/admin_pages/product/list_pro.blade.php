@extends('admin_layout')
@section('css')
    <!-- DataTables -->
    <link href="admin/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="admin/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('title')
    Product List
@endsection
@section('breadcrumbs')
    {{Breadcrumbs::render('product_list')}}
@endsection
@section('content')
    <div class="row">
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
                        <a href="{{route('addPro')}}"><button type="button" class="btn btn-success waves-effect waves-light float-right">Add <i class="mdi mdi-plus-circle-outline"></i></button></a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <table id="datatable" class="table table-colored table-primary table-bordered table-hover m-0 tickets-list dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Created By</th>
                        <th style="width: 115px">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Máy lạnh Electrolux Inverter 1 HP ESV09CRO-D1</td>
                        <td>Television</td>
                        <td>10000000</td>
                        <td>In stock</td>
                        <td>
                            <a href="javascript: void(0);">
                                <img src="admin/assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                <span class="m-l-5"><b>George A. Llanes</b></span>
                            </a>
                        </td>
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
    <!-- end row -->
@endsection
@section('js')
    <!-- Required datatable js -->
    <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Responsive examples -->
    <script src="admin/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="admin/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        } );
    </script>
@endsection





