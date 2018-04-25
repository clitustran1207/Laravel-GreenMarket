<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootshop online Shopping cart</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<base href="{{asset('')}}">
		<!-- Bootstrap style --> 
		<link id="callCss" rel="stylesheet" href="client/themes/bootshop/bootstrap.min.css" media="screen"/>
		<link href="client/themes/css/base.css" rel="stylesheet" media="screen"/>
		<!-- Bootstrap style responsive -->	
		<link href="client/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
		<link href="client/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
		<!-- Google-code-prettify -->	
		<link href="client/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
		<!-- fav and touch icons -->
		<link rel="shortcut icon" href="client/themes/images/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="client/themes/images/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="client/themes/images/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="client/themes/images/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="client/themes/images/ico/apple-touch-icon-57-precomposed.png">
		<style type="text/css" id="enject"></style>
	</head>
	<body>
		<div id="header">
			<div class="container">
				<div id="welcomeLine" class="row">
					<div class="span6">Welcome!<strong> User</strong></div>
					<div class="span6">
						<div class="pull-right">
							<a href="{{route('checkout')}}">
								<span class="btn btn-mini btn-primary">
									<i class="icon-shopping-cart icon-white"></i> 
									[ @if(Session::has('cart')){{Session('cart')->totalQty}}@else 0 @endif ] Itemes in your cart 
								</span> 
							</a> 
						</div>
					</div>
				</div>
				<!-- Navbar ================================================== -->
				<div id="logoArea" class="navbar">
					<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<div class="navbar-inner">
						<a class="brand" href="{{route('index')}}"><img src="client/themes/images/logo.png" alt="Bootsshop"/></a>
						<form class="form-inline navbar-search" method="post" action="products.html" >
							<input class="srchTxt" type="text" placeholder="Search" />
							<select class="srchTxt">
								<option>All</option>
								<option>CLOTHES </option>
								<option>FOOD AND BEVERAGES </option>
								<option>HEALTH & BEAUTY </option>
								<option>SPORTS & LEISURE </option>
								<option>BOOKS & ENTERTAINMENTS </option>
							</select> 
							<button type="submit" id="submitButton" class="btn btn-primary">Go</button>
						</form>
						<ul id="topMenu" class="nav pull-right">
							<li class=""><a href="special_offer.html">Specials Offer</a></li>
							<li class=""><a href="normal.html">Delivery</a></li>
							<li class=""><a href="contact.html">Contact</a></li>
							<li class="">
								<a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
								<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h3>Login Block</h3>
									</div>
									<div class="modal-body">
										<form class="form-horizontal loginFrm">
											<div class="control-group">								
												<input type="text" id="inputEmail" placeholder="Email">
											</div>
											<div class="control-group">
												<input type="password" id="inputPassword" placeholder="Password">
											</div>
											<div class="control-group">
												<label class="checkbox"><input type="checkbox"> Remember me</label>
											</div>
										</form>		
										<button type="submit" class="btn btn-success">Sign in</button>
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Header End====================================================================== -->
		@yield('carousel')
		<!-- Carousel End====================================================================== -->
		<div id="mainBody">
			<div class="container">
				<div class="row">
					<div id="sidebar" class="span3">
						<div class="well well-small">
							<a id="myCart" href="{{route('checkout')}}">
								<img src="client/themes/images/ico-cart.png" alt="cart">
								@if(Session::has('cart')){{Session('cart')->totalQty}}@else 0 @endif Items in your cart  
								<span class="badge badge-warning pull-right">
									@if(Session::has('cart')){{number_format(Session('cart')->totalPrice)}} đ@else 0 @endif
								</span>
							</a>
						</div>
						@if(Session::has('flash_message'))
							<div class="alert alert-{{Session::get('flash_level')}}">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<b>{{Session::get('flash_message')}}</b>
							</div>
						@endif
						<ul id="sideManu" class="nav nav-tabs nav-stacked">
							<?php $order=1;?>
							@foreach($categories as $cate)
							<li @if($order==1) class="subMenu open" @else class="subMenu open" @endif><a> {{$cate->cate_name}}</a>
								<ul @if($order!=1) style="display:none"@endif>
								@foreach($brands as $brand)
									@if($brand->parent_id==$cate->cate_id)
									<li><a class="active" href="{{route('listPro',$brand->id)}}"><i class="icon-chevron-right"></i>{{$brand->sub_name}} </a></li>
									@endif
								@endforeach
								</ul>
							</li>
							<?php $order++?>
							@endforeach
						</ul>
						<br/>
						<div class="thumbnail">
							<img src="client/themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
							<div class="caption">
							<h5>Panasonic</h5>
								<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
							</div>
						</div><br/>
						<div class="thumbnail">
							<img src="client/themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
							<div class="caption">
							<h5>Kindle</h5>
								<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
							</div>
						</div>
						<br/>
						<div class="thumbnail">
							<img src="client/themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
							<div class="caption">
							<h5>Payment Methods</h5>
							</div>
						</div>
					</div>
					<!-- Sidebar end=============================================== -->
					@yield('content')
				</div>
			</div>
		</div>
		<!-- Product End ================================================================== -->
		<div  id="footerSection">
			<div class="container">
				<div class="row">
					<div class="span3">
						<h5>ACCOUNT</h5>
						<a href="login.html">YOUR ACCOUNT</a>
						<a href="login.html">PERSONAL INFORMATION</a> 
						<a href="login.html">ADDRESSES</a> 
						<a href="login.html">DISCOUNT</a>  
						<a href="login.html">ORDER HISTORY</a>
					</div>
					<div class="span3">
						<h5>INFORMATION</h5>
						<a href="contact.html">CONTACT</a>  
						<a href="register.html">REGISTRATION</a>  
						<a href="legal_notice.html">LEGAL NOTICE</a>  
						<a href="tac.html">TERMS AND CONDITIONS</a> 
						<a href="faq.html">FAQ</a>
					</div>
					<div class="span3">
						<h5>OUR OFFERS</h5>
						<a href="#">NEW PRODUCTS</a> 
						<a href="#">TOP SELLERS</a>  
						<a href="special_offer.html">SPECIAL OFFERS</a>  
						<a href="#">MANUFACTURERS</a> 
						<a href="#">SUPPLIERS</a> 
					</div>
					<div id="socialMedia" class="span3 pull-right">
						<h5>SOCIAL MEDIA </h5>
						<a href="#"><img width="60" height="60" src="client/themes/images/facebook.png" title="facebook" alt="facebook"/></a>
						<a href="#"><img width="60" height="60" src="client/themes/images/twitter.png" title="twitter" alt="twitter"/></a>
						<a href="#"><img width="60" height="60" src="client/themes/images/youtube.png" title="youtube" alt="youtube"/></a>
					</div> 
				</div>
				<p class="pull-right">&copy; Bootshop</p>
			</div><!-- Container End -->
		</div>
		<!-- Footer ================================================================== -->
		
		<script src="client/themes/js/jquery.js" type="text/javascript"></script>
		<script src="client/themes/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="client/themes/js/google-code-prettify/prettify.js"></script>
		<script src="client/themes/js/bootshop.js"></script>
		<script src="client/themes/js/jquery.lightbox-0.5.js"></script>
		@yield('js')
	</body>
</html>