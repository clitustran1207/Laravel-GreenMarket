@extends('admin_layout')
@section('css')
    <!-- DataTables -->
    <link href="admin/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="admin/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('title')
    Order List
@endsection
@section('breadcrumbs')
    {{Breadcrumbs::render('order_list')}}
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title m-b-15 m-t-0">Manage Tickets</h4>
                <div class="text-center m-b-30">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <div class="m-t-20 m-b-20">
                                <h3 class="m-b-10 text-custom">{{$total}}</h3>
                                <p class="text-uppercase m-b-5 font-13 font-600">Total Orders</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="m-t-20 m-b-20">
                                <h3 class="m-b-10 text-warning">{{$pending}}</h3>
                                <p class="text-uppercase m-b-5 font-13 font-600">Pending Orders</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="m-t-20 m-b-20">
                                <h3 class="m-b-10 text-success">{{$success}}</h3>
                                <p class="text-uppercase m-b-5 font-13 font-600">Succeed Orders</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="m-t-20 m-b-20">
                                <h3 class="m-b-10 text-danger">{{$cancel}}</h3>
                                <p class="text-uppercase m-b-5 font-13 font-600">Cancel Orders</p>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap" cellspacing="0" width="100%" id="datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Ordered Date</th>
                            <th>Payment</th>
                            <th>Note</th>
                            <th>Status</th>
                            <th>Taken By</th>
                            <th class="hidden-sm">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id=1;?>
                        @foreach($orders as $bill)
                        <tr>
                            <td><b>#{{$id}}</b></td>
                            <td><span class="m-l-5"><b>{{$bill->fullname}}</b></span></td>
                            <td>{{\Carbon\Carbon::parse($bill->order_created_at)->format('jS F Y')}}</td>
                            <td>{{ucfirst($bill->payment)}}</td>
                            <td>{{$bill->note}}</td>
                            <td>
                                @if($bill->status=="Success")<span class="label label-success">{{$bill->status}}</span>
                                @elseif($bill->status=="Pending")<span class="label label-warning">{{$bill->status}}</span>
                                @else <span class="label label-danger">{{$bill->status}}</span> @endif
                            </td>
                            <td id="staff-{{$bill->id}}">
                                @if($bill->first_name)
                                    <img src="admin/assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                    <span class="m-l-5"><b>{{$bill->first_name}}</b></span>
                                @else
                                    <button type="button" class="btn btn-purple waves-effect waves-light btn-sm btnTake" dataId="{{$bill->id}}">Take it</button>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="{{route('orderDetail',$bill->id)}}"><i class=" mdi mdi-information-outline m-r-10 text-muted font-18 vertical-middle"></i>Detail</a>
                                        <a class="dropdown-item" href="{{route('editOrder',$bill->id)}}"><i class="mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete m-r-10 text-muted font-18 vertical-middle"></i>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php $id++?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('js')
    <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="admin/plugins/datatables/dataTables.responsive.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').dataTable();
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.btnTake').click(function(){
                var id = $(this).attr('dataId');
                $.ajax({
                    url: 'admincp/take-order/'+id,
                    type: "get",
                    data: {
                        id: id,
                    },
                    success: function(result){
                        // console.log(result);
                        $('#staff-'+id).html(result);
                    }
                });
            });
        });
    </script>

@endsection