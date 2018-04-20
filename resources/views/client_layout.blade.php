<!DOCTYPE html>
<html>
	<head>
		<title>Lighting A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />
		<base href="{{asset('')}}">
		<link href="client/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="client/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
		<link href="client/css/style.css" rel="stylesheet" type="text/css" media="all" />	
	</head>
	<body> 
		@yield('content')
        <script src="client/js/jquery-1.11.1.min.js"></script>
		<script src="client/js/simpleCart.min.js"> </script>
		<script type="text/javascript" src="client/js/memenu.js"></script>
        <script src="client/js/responsiveslides.min.js"></script>
        <script>$(document).ready(function(){$(".memenu").memenu();});</script>	
		<script>  
			$(function () {
				$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				pager: false,
				});
			});
        </script>
        <script src="client/js/bootstrap.js"> </script>
	</body>
</html>
