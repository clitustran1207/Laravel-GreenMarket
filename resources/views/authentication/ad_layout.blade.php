<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Adminox - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico">
        <!-- Toastr css -->
        <link href="admin/plugins/jquery-toastr/jquery.toast.min.css" rel="stylesheet" />
        <!-- App css -->
        <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="admin/assets/js/modernizr.min.js"></script>
        @yield('css')
    </head>
    <body class="bg-accpunt-pages">
        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrapper-page">
                            <div class="account-pages">
                                <div class="account-box">
                                    @yield('content')
                                </div>
                            </div>
                            <!-- end card-box-->
                        </div>
                        <!-- end wrapper -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>
        <!-- jQuery  -->
        <script src="admin/assets/js/jquery.min.js"></script>
        <script src="admin/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="admin/assets/js/bootstrap.min.js"></script>
        <script src="admin/assets/js/metisMenu.min.js"></script>
        <script src="admin/assets/js/waves.js"></script>
        <script src="admin/assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="admin/assets/js/jquery.core.js"></script>
        <script src="admin/assets/js/jquery.app.js"></script>
        <!-- Toastr js -->
        <script src="admin/plugins/jquery-toastr/jquery.toast.min.js" type="text/javascript"></script>
        <script>
            @if(Session::has('flash_message'))
                var type = "{{Session::get('flash_level')}}";
                var mess = "{{Session::get('flash_message')}}";
                switch(type){
                    case 'success':
                        var head = "Well done!";
                        var color = "#5ba035";
                        break;
                    case 'warning':
                        var head = "Holy guacamole!";
                        var color = "#da8609";
                        break;
                    case 'error':
                        var head = "Oh snap!";
                        var color = "#bf441d";
                        break;
                    default:
                        var head = "Heads up!";
                        var color = "#3b98b5";
                        break;
                }
                // console.log(type)
                $(document).ready(function(){
                    $.toast({
                        heading: head,
                        text: mess,
                        position: 'top-right',
                        loaderBg: color,
                        icon: type,
                        hideAfter: 3000,
                        stack: 1
                    });
                });
            @endif
        </script>
        @yield('js')
    </body>
</html>