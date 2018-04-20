@extends('admin_layout')
@section('css')
@endsection
@section('title')
    {{$order->fullname}}'s order detail
@endsection
@section('breadcrumbs')
    {{Breadcrumbs::render('order_detail',$order)}}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="clearfix">
                    <div class="pull-left">
                        <img src="admin/assets/images/logo_dark.png" alt="" height="30">
                    </div>
                    <div class="pull-right">
                        <h3 class="m-0 hidden-print">Invoice</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="pull-left m-t-30">
                            <p><b>Hello, {{$order->fullname}}</b></p>
                            <p class="text-muted">Thanks a lot because you keep purchasing our products. Our company
                                promises to provide high quality products for you as well as outstanding
                                customer service for every transaction. </p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-4 offset-2">
                        <div class="m-t-30 pull-right">
                            <p class="m-b-10"><small><strong>Order Date: </strong></small>{{\Carbon\Carbon::parse($order->created_at)->format('jS F Y')}}</p>
                            <p class="m-b-10"><small><strong>Order Status: </strong></small>
                                @if($order->status=="Success")
                                    <span class="label label-success">{{$order->status}}</span>
                                @elseif($order->status=="Pending")
                                    <span class="label label-warning">{{$order->status}}</span>
                                @else   
                                    <span class="label label-danger">{{$order->status}}</span>
                                @endif
                            </p>
                            <p class="m-b-10"><small><strong>Staff: </strong></small>{{$order->first_name}}
                        </div>
                    </div><!-- end col -->
                </div>
                <div class="row m-t-30">
                    <div class="col-6">
                        <h5>Billing Address</h5>

                        <address class="line-h-24">
                            {{$order->fullname}}<br>
                            Green Market,
                            795 Folsom Ave, Suite 600, San Francisco<br>
                            Phone: (123) 456-7890
                        </address>

                    </div>
                    <div class="col-6">
                        <h5>Shipping Address</h5>

                        <address class="line-h-24">
                            {{$order->fullname}}<br>
                            {{$order->address}}<br>
                            Phone: {{$order->phone}}
                        </address>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table m-t-30">
                                <thead>
                                <tr><th>#</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Unit Cost</th>
                                    <th class="text-right">Total</th>
                                </tr></thead>
                                <tbody>
                                <?php $stt=1;?>
                                @foreach($detail as $item)
                                <tr>
                                    <td>{{$stt}}</td>
                                    <td>
                                        <b>Laptop</b> <br/>
                                        {{$item->pro_name}}
                                    </td>
                                    <td>{{$item->quantity}}</td>
                                    <td>{{number_format($item->price)}} VNĐ</td>
                                    <td class="text-right">{{number_format($item->quantity*$item->price)}} VNĐ</td>
                                </tr>
                                <?php $stt++?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="clearfix p-t-50">
                            <h5 class="text-muted">Notes:</h5>
                            <small>
                                All accounts are to be paid within 7 days from receipt of
                                invoice. To be paid by cheque or credit card or direct payment
                                online. If account is not paid within 7 days the credits details
                                supplied as confirmation of work undertaken will be charged the
                                agreed quoted fee noted above.
                            </small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="float-right">
                            <p><b>Sub-total:</b> {{number_format($order->total)}} VNĐ</p>
                            <?php $vat = 0.1*$order->total?>
                            <p><b>VAT (10%):</b> {{number_format($vat)}} VNĐ</p>
                            <h3>{{number_format($vat+$order->total)}} VNĐ</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="hidden-print m-t-30 m-b-30">
                    <div class="text-right">
                        <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print m-r-5"></i> Print</a>
                        <a href="{{route('orderList')}}" class="btn btn-info waves-effect waves-light">Return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection