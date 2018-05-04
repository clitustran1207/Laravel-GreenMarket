@extends('admin_layout')
@section('css')
    <!-- Plugins css -->
    <link href="admin/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="admin/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="admin/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
@endsection
@section('title')
    Dashboard
@endsection
@section('breadcrumbs')
    {{Breadcrumbs::render('home')}}
@endsection
@section('content')
    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title m-t-0">Multiple Statistics</h4>
                <div>{!! $chart->container() !!}</div> 
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-lg-7">
            <div class="card-box">
                <h4 class="header-title m-t-0">Top 5 Best Selling Products</h4>
                <div id="top-pro">{!! $lava->render('BarChart', 'TopPro', 'top-pro') !!}</div> 
                {{-- <form action="{{route('post')}}" method="POST">
                    <div class="form-group">
                        <label>Date Range</label>
                        <div class="row">
                            <div class="input-daterange input-group col-lg-10" id="date-range">
                                <input type="text" class="form-control" name="start" required/>
                                <span class="input-group-addon bg-custom text-white b-0">to</span>
                                <input type="text" class="form-control" name="end" required/>
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-custom btn-bordered waves-effect w-md waves-light">Search</button>
                            </div>
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card-box">
                <h4 class="header-title m-t-0">Order Report</h4>
                <div id="rp-order">{!! $lava->render('PieChart', 'RpOrder', 'rp-order') !!}</div> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title m-t-0">Revenue Per Month</h4>
                <div id="rev">{!! $lava->render('LineChart', 'Revenue', 'rev') !!}</div> 
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- plugin js -->
    <script src="admin/plugins/moment/moment.js"></script>
    <script src="admin/plugins/timepicker/bootstrap-timepicker.js"></script>
    <script src="admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="admin/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <script src="admin/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Init js -->
    <script src="admin/assets/pages/jquery.form-pickers.init.js"></script>
    {{-- <script src=//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js charset=utf-8></script>
    <script src=//cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js charset=utf-8></script>
    <script src=//cdn.jsdelivr.net/npm/fusioncharts@3.12.2/fusioncharts.js charset=utf-8></script>
    <script src=//cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
    {!! $chart->script() !!} --}}
@endsection 