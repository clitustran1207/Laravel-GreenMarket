@extends('client_layout')
@section('content')
<div class="header-top">
    <div class="header-bottom">			
        <div class="logo">
            <h1><a href="index.html">Lighting</a></h1>					
        </div>
        <!---->		 
        <div class="top-nav">
            <ul class="memenu skyblue"><li class="active"><a href="index.html">Home</a></li>
                <li class="grid"><a href="#">Products</a>
                    <div class="mepanel">
                        <div class="row">
                            <div class="col1 me-one">
                                <h4>Shop</h4>
                                <ul>
                                    <li><a href="product.html">New Arrivals</a></li>
                                    <li><a href="product.html">Home</a></li>
                                    <li><a href="product.html">Decorates</a></li>
                                    <li><a href="product.html">Accessories</a></li>
                                    <li><a href="product.html">Kids</a></li>
                                    <li><a href="product.html">Login</a></li>
                                    <li><a href="product.html">Brands</a></li>
                                    <li><a href="product.html">My Shopping Bag</a></li>
                                </ul>
                            </div>
                            <div class="col1 me-one">
                                <h4>Type</h4>
                                <ul>
                                    <li><a href="product.html">Diwali Lights</a></li>
                                    <li><a href="product.html">Tube Lights</a></li>
                                    <li><a href="product.html">Bulbs</a></li>
                                    <li><a href="product.html">Ceiling Lights</a></li>
                                    <li><a href="product.html">Accessories</a></li>
                                    <li><a href="product.html">Lanterns</a></li>
                                </ul>	
                            </div>
                            <div class="col1 me-one">
                                <h4>Popular Brands</h4>
                                <ul>
                                    <li><a href="product.html">Everyday</a></li>
                                    <li><a href="product.html">Philips</a></li>
                                    <li><a href="product.html">Havells</a></li>
                                    <li><a href="product.html">Wipro</a></li>
                                    <li><a href="product.html">Jaguar</a></li>
                                    <li><a href="product.html">Ave</a></li>
                                    <li><a href="product.html">Gold Medal</a></li>
                                    <li><a href="product.html">Anchor</a></li>
                                </ul>	
                            </div>
                        </div>
                    </div>
                </li>
                <li class="grid"><a href="#">Accessories</a>
                    <div class="mepanel">
                        <div class="row">
                            <div class="col1 me-one">
                                <h4>Shop</h4>
                                <ul>
                                    <li><a href="product.html">New Arrivals</a></li>
                                    <li><a href="product.html">Home</a></li>
                                    <li><a href="product.html">Decorates</a></li>
                                    <li><a href="product.html">Accessories</a></li>
                                    <li><a href="product.html">Kids</a></li>
                                    <li><a href="product.html">Login</a></li>
                                    <li><a href="product.html">Brands</a></li>
                                    <li><a href="product.html">My Shopping Bag</a></li>
                                </ul>
                            </div>
                            <div class="col1 me-one">
                                <h4>Type</h4>
                                <ul>
                                    <li><a href="product.html">Diwali Lights</a></li>
                                    <li><a href="product.html">Tube Lights</a></li>
                                    <li><a href="product.html">Bulbs</a></li>
                                    <li><a href="product.html">Ceiling Lights</a></li>
                                    <li><a href="product.html">Accessories</a></li>
                                    <li><a href="product.html">Lanterns</a></li>
                                </ul>	
                            </div>
                            <div class="col1 me-one">
                                <h4>Popular Brands</h4>
                                <ul>
                                    <li><a href="product.html">Everyday</a></li>
                                    <li><a href="product.html">Philips</a></li>
                                    <li><a href="product.html">Havells</a></li>
                                    <li><a href="product.html">Wipro</a></li>
                                    <li><a href="product.html">Jaguar</a></li>
                                    <li><a href="product.html">Ave</a></li>
                                    <li><a href="product.html">Gold Medal</a></li>
                                    <li><a href="product.html">Anchor</a></li>										
                                </ul>	
                            </div>
                        </div>
                    </div>
                </li>
                <li class="grid"><a href="typo.html">Typo</a></li>
                <li class="grid"><a href="contact.html">Contact</a></li>					
            </ul>				
        </div>
        <!---->
        <div class="cart box_1">
            <a href="checkout.html">
                <div class="total">
                <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            </a>
            <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
        <!---->			 
    </div>
    <div class="clearfix"> </div>
</div>	
<div class="slider">
    <div class="callbacks_container">
        <ul class="rslides" id="slider">
            <li>
                <div class="banner1">				  
                    <div class="banner-info">
                    <h3>Morbi lacus hendrerit efficitur.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner2">
                    <div class="banner-info">
                    <h3>Phasellus elementum tincidunt.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner3">
                <div class="banner-info">
                <h3>Maecenas interposuere volutpat.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
                </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="items">
    <div class="container">
        <h3>New Arrivals</h3>
        <div class="items-sec">
            @foreach($products as $pro)
            <div class="col-md-3 feature-grid" style="margin-top:2rem;height:387px">
                <a href="product.html"><img src="admin/assets/images/product/thumbnail/{{$pro->thumbnail}}" alt="" width="257" height="148"/>	
                    <div class="arrival-info">
                        <img src="admin/assets/images/brand/{{$pro->image}}" alt="" width="80" height="30"/>
                        <p style="width:257px;height:40px">{{$pro->pro_name}}</p>
                        @if($pro->promotion_price!=0)
                            <h2 class="item_price" style="font-size:20px;color:#d0021b"><b>{{number_format($pro->promotion_price)}} đ</b></h2>
                            <span class="pric1">{{$pro->price}}</span><span class="disc">[12% Off]</span>
                        @else
                            <h2 class="item_price" style="font-size:20px;color:#d0021b"><b>{{number_format($pro->price)}} đ</b></h2>
                        @endif
                        <p style="font-size:13px;font-weight:500">{{$pro->promotion_item}}</p>
                    </div>
                    <div class="viw">
                        <a href="product.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="offers">
    <div class="container">
    <h3>End of Season Sale</h3>
    <div class="offer-grids">
        <div class="col-md-6 grid-left">
            <a href="#"><div class="offer-grid1">
                <div class="ofr-pic">
                    <img src="client/images/ofr2.jpeg" class="img-responsive" alt=""/>
                </div>
                <div class="ofr-pic-info">
                    <h4>Emergency Lights <br>& Led Bulds</h4>
                    <span>UP TO 60% OFF</span>
                    <p>Shop Now</p>
                </div>
                <div class="clearfix"></div>
            </div></a>
        </div>
        <div class="col-md-6 grid-right">
            <a href="#"><div class="offer-grid2">				 
                <div class="ofr-pic-info2">
                    <h4>Flat Discount</h4>
                    <span>UP TO 30% OFF</span>
                    <h5>Outdoor Gate Lights</h5>
                    <p>Shop Now</p>
                </div>
                <div class="ofr-pic2">
                    <img src="client/images/ofr2.jpeg" class="img-responsive" alt=""/>
                </div>
                <div class="clearfix"></div>
            </div></a>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
</div>
<div class="subscribe">
    <div class="container">
        <h3>Newsletter</h3>
        <form>
            <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
            <input type="submit" value="Subscribe">
        </form>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 about-us">
                <h3>About Us</h3>
                <p>Maecenas nec auctor sem. Vivamus porttitor tincidunt elementum nisi a, euismod rhoncus urna. Curabitur scelerisque vulputate arcu eu pulvinar. Fusce vel neque diam</p>
            </div>
            <div class="col-md-3 ftr-grid">
                    <h3>Information</h3>
                    <ul class="nav-bottom">
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">New Products</a></li>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Our Stores</a></li>
                        <li><a href="#">Best Sellers</a></li>	
                    </ul>					
            </div>
            <div class="col-md-3 ftr-grid">
                    <h3>More Info</h3>
                    <ul class="nav-bottom">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Membership</a></li>	
                    </ul>					
            </div>
            <div class="col-md-3 ftr-grid">
                    <h3>Categories</h3>
                    <ul class="nav-bottom">
                        <li><a href="#">Car Lights</a></li>
                        <li><a href="#">LED Lights</a></li>
                        <li><a href="#">Decorates</a></li>
                        <li><a href="#">Wall Lights</a></li>
                        <li><a href="#">Protectors</a></li>	
                    </ul>					
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="copywrite">
    <div class="container">
        <div class="copy">
            <p>© 2015 Lighting. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
        </div>
        <div class="social">							
            <a href="#"><i class="facebook"></i></a>
            <a href="#"><i class="twitter"></i></a>
            <a href="#"><i class="dribble"></i></a>	
            <a href="#"><i class="google"></i></a>	
            <a href="#"><i class="youtube"></i></a>	
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection