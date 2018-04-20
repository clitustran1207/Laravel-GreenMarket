@extends('admin_layout')
@section('css')
    <!-- DataTables -->
    <link href="admin/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="admin/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom box css -->
    <link href="admin/plugins/custombox/css/custombox.min.css" rel="stylesheet">
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
                        <?php $order = 1;?>
                        @foreach($products as $pro)
                        <tr class="product-{{$pro->id}}">
                            <td>{{$order}}</td>
                            <td>{{$pro->pro_name}}</td>
                            <td>{{$pro->cate_name}}</td>
                            <td>{{number_format($pro->price)}} VNĐ</td>
                            <td>
                                @if($pro->status == 1)
                                    <span class="label label-success">Đang kinh doanh</span>
                                @else
                                    <span class="label label-danger">Ngừng kinh doanh</span>
                                @endif
                            </td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="admin/assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                    <span class="m-l-5"><b>{{$pro->first_name}}</b></span>
                                </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-icon waves-effect waves-light btn-success" style="width: 12px"> <i class="fa fa-info"></i> </button>
                                <a href="{{route('editPro',$pro->id)}}"><button type="button" class="btn btn-icon waves-effect waves-light btn-warning"><i class="fa fa-pencil"></i></button></a>
                                <a href="#custom-modal" class="btn btn-icon waves-effect waves-light btn-danger btnDelete" dataId="{{$pro->id}}" dataName="{{$pro->pro_name}}" date data-animation="swell" data-plugin="custommodal"
                                    data-overlaySpeed="100" data-overlayColor="#36404a"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $order++?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
    <!-- end row -->
    <!-- Modal -->
    <div id="custom-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.close();"><span>&times;</span><span class="sr-only">Close</span></button>
        <h4 class="custom-modal-title">Delete Product</h4>
        <div class="custom-modal-text">
            Do you want to delete <b class="product"></b>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" onclick="Custombox.close();">Return</button>
            <button type="button" class="btn btn-info waves-effect waves-light btnAccept">Delete</button>
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
    <!-- Modal-Effect -->
    <script src="admin/plugins/custombox/js/custombox.min.js"></script>
    <script src="admin/plugins/custombox/js/legacy.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        } );
    </script>
    <script>
        $(document).ready(function(){
            $('.btnDelete').click(function(){
                var id = $(this).attr('dataId');
                //console.log(id)
                var pro = $(this).attr('dataName');
                $('.product').text(pro);
                $('.btnAccept').click(function(){
                    $.ajax({
                        url: 'admincp/delete-product/'+id,
                        type: "GET",
                        data: {
                            id: id
                        },
                        success: function(result){
                            //console.log(result);
                            if($.trim(result) == 'success'){
                                $('#custom-modal').ready(function(){
                                    Custombox.close();
                                });
                                $('.product-'+id).hide();
                            }
                        }
                    });
                });
            });
        });
    </script>
@endsection





