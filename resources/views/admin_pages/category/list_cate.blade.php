@extends('admin_layout')
@section('css')
   <!-- DataTables -->
   <link href="admin/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <link href="admin/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <!-- Responsive datatable examples -->
   <link href="admin/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <!-- Bootstrap fileupload css -->
   <link href="admin/plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
@endsection
@section('title')
    Category List
@endsection
@section('breadcrumbs')
    {{Breadcrumbs::render('category_list')}}
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
                        <button type="button" class="btn btn-success waves-effect waves-light float-right" data-toggle="modal" data-target="#addModal">Add <i class="mdi mdi-plus-circle-outline"></i></button>
                    </div>
                </div>
                <div class="clearfix"></div>
                <table id="datatable" class="table table-colored table-primary table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Image</th>
                        <th style="width: 200px">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $order=1;?>
                    @foreach($category as $sub)
                    <tr class="cate-{{$sub->id}}">
                        <td>{{$order}}</td>
                        <td>{{$sub->cate_name}}</td>
                        <td>{{$sub->sub_name}}</td>
                        <th>
                            @if($sub->image)<img src="admin/assets/images/brand/{{$sub->image}}" alt="image" class="img-fluid rounded" width="100">@endif
                        </th>
                        <td>
                            <button type="button" class="btn btn-icon waves-effect waves-light btn-warning"><i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-icon waves-effect waves-light btn-danger" style="width: 12px"> <i class="fa fa-trash"></i> </button>
                        </td>
                    </tr>
                    <?php $order++?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content p-0">
                <form action="{{route('addCate')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0 mt-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Add new Category
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-block">
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0 mt-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Add new Brand
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-block">
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Brand</label>
                                        <input type="text" class="form-control" name="brand" placeholder="Brand">
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control" name="category">
                                            @foreach($category2 as $cate)
                                            <option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Image</label>
                                        <div class="col-9">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="admin/assets/images/small/img-1.jpg" alt="image" />
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                <div>
                                                    <button type="button" class="btn btn-secondary btn-file">
                                                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                        <input type="file" class="btn-secondary" name="image"/>
                                                    </button>
                                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Add</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection
@section('js')
    <!-- Required datatable js -->
    <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Responsive examples -->
    <script src="admin/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <!-- Bootstrap fileupload js -->
    <script src="admin/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@endsection