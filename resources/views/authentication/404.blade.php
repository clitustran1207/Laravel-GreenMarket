@extends('authentication.ad_layout')
@section('content')
    <div class="account-logo-box">
        <h2 class="text-uppercase text-center">
            <a href="{{route('home')}}" class="text-success">
                <span><img src="admin/assets/images/logo_dark.png" alt="" height="30"></span>
            </a>
        </h2>
    </div>
    <div class="account-content text-center">
        <h1 class="text-error">404</h1>
        <h2 class="text-uppercase text-danger m-t-30">Page Not Found</h2>
        <p class="text-muted m-t-30">It's looking like you may have taken a wrong turn. Don't worry... it
            happens to the best of us. You might want to check your internet connection. Here's a
            little tip that might help you get back on track.</p>
        <a class="btn btn-md btn-block btn-primary waves-effect waves-light m-t-20" href="{{route('home')}}"> Return Home</a>
    </div>
@endsection