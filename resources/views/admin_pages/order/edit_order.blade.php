@extends('admin_layout')
@section('css')
    <!-- Plugins css-->
    <link href="admin/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="admin/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
@endsection
@section('title')
    Edit {{$order->fullname}}'s order 
@endsection
@section('breadcrumbs')
    {{Breadcrumbs::render('edit_order',$order)}}
@endsection
@section('content')
    <div class="card-box">
        <form action="{{route('editOrder',$order->id)}}" method="POST">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <h4 class="header-title m-t-0 m-b-30">Customer Information</h4>
                    <div class="card-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullname">Fullname</label>
                                    <input type="text" class="form-control" readonly placeholder="Enter fullname" value="{{$order->fullname}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select class="selectpicker show-tick" data-style="btn-secondary" disabled>
                                        <option value="male" @if($order->gender=='male') selected @endif>Male</option>
                                        <option value="female" @if($order->gender=='female') selected @endif>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" readonly placeholder="Enter address" value="{{$order->address}}">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input data-parsley-type="number" type="text" readonly class="form-control" placeholder="Enter phone" value="{{$order->phone}}"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" parsley-type="email" readonly placeholder="Enter e-mail" value="{{$order->email}}"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="header-title m-t-0 m-b-30">Order Information</h4>
                    <div class="card-box">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="payment">Payment</label>
                                <select class="selectpicker" data-style="btn-primary btn-bordered" name="payment">
                                    <option data-icon="mdi mdi-cash-multiple" value="cash" @if($order->payment=='cash') selected @endif>Cash</option>
                                    <option data-icon="mdi mdi-credit-card" value="master card" @if($order->payment=='master card') selected @endif>Master Card</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="selectpicker" data-style="btn-danger btn-bordered" name="status" id="status">
                                        <option value="Success" @if($order->status=='Success') selected @endif>Success</option>
                                        <option value="Pending" @if($order->status=='Pending') selected @endif>Pending</option>
                                        <option value="Cancel" @if($order->status=='Cancel') selected @endif>Cancel</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="note">Note</label>
                            <textarea id="textarea" name="note" class="form-control" maxlength="225" rows="3" placeholder="The Note content has a limit of 225 chars.">{{$order->note}}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Total</label>
                                    <div class="col-10">
                                        <input type="text" readonly data-a-sign="VNĐ " value="{{$order->total}}" class="form-control autonumber">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Last Edit</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" readonly value="{{\Carbon\Carbon::parse($order->order_updated_at)->format('jS F Y')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary waves-effect w-md waves-light">Submit</button>
                <a href="{{route('orderList')}}"><button type="button" class="btn btn-secondary waves-effect w-md waves-light m-l-5">Return</button></a>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script src="admin/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
    <script src="admin/plugins/autoNumeric/autoNumeric.js" type="text/javascript"></script>

    <script src="admin/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="admin/plugins/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="admin/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
    <script src="admin/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script src="admin/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <!-- Init Js file -->
    <script type="text/javascript" src="admin/assets/pages/jquery.form-advanced.init.js"></script>
    <!-- Parsley js -->
    <script type="text/javascript" src="admin/plugins/parsleyjs/parsley.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $('.autonumber').autoNumeric('init');
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
@endsection