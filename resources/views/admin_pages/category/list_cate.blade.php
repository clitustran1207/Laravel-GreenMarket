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
                        <button type="button" class="btn btn-success waves-effect waves-light float-right" ng-click="modal()">Add <i class="mdi mdi-plus-circle-outline"></i></button>
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
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Modal Content is Responsive</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Name</label>
                                <input type="text" class="form-control" id="field-1" placeholder="John">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Surname</label>
                                <input type="text" class="form-control" id="field-2" placeholder="Doe">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Address</label>
                                <input type="text" class="form-control" id="field-3" placeholder="Address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-4" class="control-label">City</label>
                                <input type="text" class="form-control" id="field-4" placeholder="Boston">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-5" class="control-label">Country</label>
                                <input type="text" class="form-control" id="field-5" placeholder="United States">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Zip</label>
                                <input type="text" class="form-control" id="field-6" placeholder="123456">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <label for="field-7" class="control-label">Personal Info</label>
                                <textarea class="form-control" id="field-7" placeholder="Write something about yourself"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                </div>
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