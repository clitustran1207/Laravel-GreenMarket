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
                                <h3 class="m-b-10 text-custom">25563</h3>
                                <p class="text-uppercase m-b-5 font-13 font-600">Total Orders</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="m-t-20 m-b-20">
                                <h3 class="m-b-10 text-warning">6952</h3>
                                <p class="text-uppercase m-b-5 font-13 font-600">Pending Orders</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="m-t-20 m-b-20">
                                <h3 class="m-b-10 text-success">18361</h3>
                                <p class="text-uppercase m-b-5 font-13 font-600">Succeed Orders</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="m-t-20 m-b-20">
                                <h3 class="m-b-10 text-danger">250</h3>
                                <p class="text-uppercase m-b-5 font-13 font-600">Cancel Orders</p>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap" cellspacing="0" width="100%" id="datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Requested By</th>
                            <th>Subject</th>
                            <th>Assignee</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Due Date</th>
                            <th class="hidden-sm">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>#1256</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="admin/assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                    <span class="m-l-5"><b>George A. Llanes</b></span>
                                </a>
                            </td>
                            <td>Support for theme</td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="admin/assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                </a>
                            </td>
                            <td><span class="label label-success">Open</span></td>
                            <td>2017/04/28</td>
                            <td>2017/04/28</td>
                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#"><i class=" mdi mdi-information-outline m-r-10 text-muted font-18 vertical-middle"></i>Detail</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete m-r-10 text-muted font-18 vertical-middle"></i>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><b>#2542</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="admin/assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                    <span class="m-l-5"><b>Jose D. Delacruz</b></span>
                                </a>
                            </td>
                            <td>
                                New submission on your website
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="admin/assets/images/users/avatar-9.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                </a>
                            </td>


                            <td>
                                <span class="label label-muted">Closed</span>
                            </td>

                            <td>
                                2008/04/25
                            </td>

                            <td>
                                2008/04/25
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all m-r-10 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete m-r-10 text-muted font-18 vertical-middle"></i>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><b>#320</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="admin/assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                    <span class="m-l-5"><b>Phyllis K. Maciel</b></span>
                                </a>
                            </td>

                            <td>
                                Verify your new email address!
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="admin/assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                </a>
                            </td>

                            <td>
                                <span class="label label-success">Open</span>
                            </td>

                            <td>
                                2017/04/20
                            </td>

                            <td>
                                2017/04/25
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all m-r-10 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete m-r-10 text-muted font-18 vertical-middle"></i>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><b>#1254</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="admin/assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                    <span class="m-l-5"><b>Margeret V. Ligon</b></span>
                                </a>
                            </td>

                            <td>
                                Your application has been received!
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="admin/assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                                </a>
                            </td>

                            <td>
                                <span class="label label-muted">Closed</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all m-r-10 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete m-r-10 text-muted font-18 vertical-middle"></i>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
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

@endsection