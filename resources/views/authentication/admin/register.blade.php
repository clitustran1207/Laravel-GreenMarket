@extends('authentication.ad_layout')
@section('css')
    <!-- Plugins css -->
    <link href="admin/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="admin/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="admin/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
@endsection
@section('content')
    <div class="account-logo-box">
        <h2 class="text-uppercase text-center">
            <a href="index.html" class="text-success">
                <span><img src="admin/assets/images/logo_dark.png" alt="" height="30"></span>
            </a>
        </h2>
        <h5 class="text-uppercase font-bold m-b-5 m-t-50">Register</h5>
        <p class="m-b-0">Get access to our admin panel</p>
    </div>
    <div class="account-content">
        <form class="form-horizontal" method="POST">
            {{csrf_field()}}
            <div class="form-group row m-b-20">
                <div class="col-12">
                    <label for="firstname">First Name</label>
                    <input class="form-control" type="text" name="first_name" placeholder="Michael Zenaty" required>
                </div>
            </div>
            <div class="form-group row m-b-20">
                <div class="col-12">
                    <label for="emailaddress">Email address</label>
                    <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="john@deo.com">
                </div>
            </div>
            <div class="form-group row m-b-20">
                <div class="col-12">
                    <label for="password">Password</label>
                    <input class="form-control" pattern=".{6,12}" type="password" name="password" placeholder="Enter your password" required>
                </div>
            </div>
            <div class="form-group row m-b-20">
                <div class="col-12">
                    <label>Birthday</label>
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="birthday" required>
                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row m-b-20">
                <div class="col-12">
                    <div class="checkbox checkbox-success">
                        <input id="remember" type="checkbox" checked="" required>
                        <label for="remember">I accept<a href="#"> Terms and Conditions</a></label>
                    </div>
                </div>
            </div>
            <div class="form-group row text-center m-t-10">
                <div class="col-12">
                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign Up Free</button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <button type="button" class="btn m-r-5 btn-facebook waves-effect waves-light">
                        <i class="fa fa-facebook"></i>
                    </button>
                    <button type="button" class="btn m-r-5 btn-googleplus waves-effect waves-light">
                        <i class="fa fa-google"></i>
                    </button>
                    <button type="button" class="btn m-r-5 btn-twitter waves-effect waves-light">
                        <i class="fa fa-twitter"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="row m-t-50">
            <div class="col-12 text-center">
                <p class="text-muted">Already have an account?  <a href="{{route('adminLogin')}}" class="text-dark m-l-5"><b>Sign In</b></a></p>
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
@endsection