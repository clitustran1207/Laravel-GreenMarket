@extends('admin_layout')
@section('css')
@endsection
@section('title')
    Order Detail
@endsection
@section('breadcrumbs')
    {{Breadcrumbs::render('order_detail')}}
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
                            <p><b>Hello, Stanley Jones</b></p>
                            <p class="text-muted">Thanks a lot because you keep purchasing our products. Our company
                                promises to provide high quality products for you as well as outstanding
                                customer service for every transaction. </p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-4 offset-2">
                        <div class="m-t-30 pull-right">
                            <p class="m-b-10"><small><strong>Order Date: </strong></small> Jan 17, 2016</p>
                            <p class="m-b-10"><small><strong>Order Status: </strong></small> <span class="label label-success">Paid</span></p>
                            <p class="m-b-10"><small><strong>Order ID: </strong></small> #123456</p>
                        </div>
                    </div><!-- end col -->
                </div>
                <div class="row m-t-30">
                    <div class="col-6">
                        <h5>Billing Address</h5>

                        <address class="line-h-24">
                            Stanley Jones<br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">Phone:</abbr> (123) 456-7890
                        </address>

                    </div>
                    <div class="col-6">
                        <h5>Shipping Address</h5>

                        <address class="line-h-24">
                            Stanley Jones<br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">Phone:</abbr> (123) 456-7890
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
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <b>Laptop</b> <br/>
                                        Brand Model VGN-TXN27N/B
                                        11.1" Notebook PC
                                    </td>
                                    <td>1</td>
                                    <td>$1799</td>
                                    <td class="text-right">$1799</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <b>Warranty</b> <br/>
                                        Two Year Extended Warranty -
                                        Parts and Labor
                                    </td>
                                    <td>3</td>
                                    <td>$499</td>
                                    <td class="text-right">$1497</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <b>LED</b> <br/>
                                        80cm (32) HD Ready LED TV
                                    </td>
                                    <td>2</td>
                                    <td>$412</td>
                                    <td class="text-right">$824</td>
                                </tr>

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
                            <p><b>Sub-total:</b> $4120.00</p>
                            <p><b>VAT (12.5):</b> $515</p>
                            <h3>$4635.00 USD</h3>
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