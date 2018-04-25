@extends('client_layout')
@section('carousel')
    <div id="carouselBlk">
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <a href="register.html"><img style="width:100%" src="client/themes/images/carousel/2.png" alt=""/></a>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <a href="register.html"><img src="client/themes/images/carousel/3.png" alt=""/></a>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <a href="register.html"><img src="client/themes/images/carousel/4.png" alt=""/></a>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <a href="register.html"><img src="client/themes/images/carousel/5.png" alt=""/></a>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <a href="register.html"><img src="client/themes/images/carousel/6.png" alt=""/></a>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div> 
    </div>
@endsection
@section('content')
    <div class="span9">		
        <div class="well well-small">
            <h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
            <div class="row-fluid">
                <div id="featured" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="client/themes//images/products/b1.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="client/themes//images/products/b1.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="client/themes//images/products/b1.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="client/themes//images/products/b1.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="client/themes//images/products/b1.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="client/themes//images/products/b1.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="client/themes//images/products/b1.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="client/themes//images/products/b1.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                    <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                </div>
            </div>
        </div>
        <h4>Latest Products </h4>
        <ul class="thumbnails">
            @foreach($products as $item)
                <li class="span3">
                    <div class="thumbnail">
                        <a href="{{route('proDetail',$item->id)}}"><img src="admin/assets/images/product/thumbnail/{{$item->thumbnail}}" height="173px" alt=""/></a>
                        <div class="caption">
                            <h5 style="height:40px">{{$item->pro_name}}</h5>
                            <p style="height:100px">{{$item->promotion_item}}</p>
                            <h4 style="text-align:center"><a class="btn" href="{{route('addCart',$item->id)}}">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">{{number_format($item->price)}} đ</a></h4>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>	
    </div>
@endsection