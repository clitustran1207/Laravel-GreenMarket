@extends('client_layout')
@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li><a href="products.html">Products</a> <span class="divider">/</span></li>
            <li class="active">product Details</li>
        </ul>	
        <div class="row">	  
            <div id="gallery" class="span3">
                <a href="admin/assets/images/product/thumbnail/{{$product->thumbnail}}" title="{{$product->pro_name}}">
                    <img src="admin/assets/images/product/thumbnail/{{$product->thumbnail}}" style="width:100%" alt="{{$product->pro_name}}"/>
                </a>
                <div id="differentview" class="moreOptopm carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            @foreach($images as $img)
                            <a href="admin/assets/images/product/detail/{{$img->url}}"> <img style="width:29%" src="admin/assets/images/product/detail/{{$img->url}}" alt=""/></a>
                            @endforeach
                        </div>
                        {{-- <div class="item">
                            <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                            <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                            <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                        </div> --}}
                    </div>
                </div>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <span class="btn"><i class="icon-envelope"></i></span>
                        <span class="btn" ><i class="icon-print"></i></span>
                        <span class="btn" ><i class="icon-zoom-in"></i></span>
                        <span class="btn" ><i class="icon-star"></i></span>
                        <span class="btn" ><i class=" icon-thumbs-up"></i></span>
                        <span class="btn" ><i class="icon-thumbs-down"></i></span>
                    </div>
                </div>
                <p>{{$product->promotion_item}}</p>
            </div>
            <div class="span6">
                <img src="admin/assets/images/brand/{{$product->image}}" width="100" alt=""/>
                <h3>{{$product->pro_name}}</h3>
                @if($product->status==1)<span class="label label-success" style="font-size:14px;height:auto">Đang kinh doanh</span>@else<span class="label label-warning" style="font-size:14px;height:auto">Ngừng kinh doanh</span>@endif
                <hr class="soft"/>
                <form action="{{route('addCart',$product->id)}}" class="form-horizontal qtyFrm">
                    <div class="control-group">
                        <label class="control-label"><span style="color:#d0021b;font-weight:600;font-size:1.5rem">{{number_format($product->price)}} đ</span></label>
                        <div class="controls">
                            <input type="number" class="span1" placeholder="Qty."/>
                            <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
                        </div>
                    </div>
                </form>
                {{-- <hr class="soft"/>
                <h4>100 items in stock</h4>
                <form class="form-horizontal qtyFrm pull-right">
                    <div class="control-group">
                        <label class="control-label"><span>Color</span></label>
                        <div class="controls">
                            <select class="span2">
                                <option>Black</option>
                                <option>Red</option>
                                <option>Blue</option>
                                <option>Brown</option>
                            </select>
                        </div>
                    </div>
                </form> --}}
                <hr class="soft clr"/>
                <p>{{$product->summary}}</p>
                <a class="btn btn-small pull-right" href="#detail">More Details</a>
                <br class="clr"/>
                <a href="#" name="detail"></a>
                <hr class="soft"/>
            </div>
            <div class="span9">
                <ul id="productDetail" class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
                    <li><a href="#profile" data-toggle="tab">Related Products</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div id="home" class="tab-pane fade active in">
                        {!! $product->detail !!}
                    </div>
                    <div id="profile" class="tab-pane fade">
                        <div id="myTab" class="pull-right">
                            <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
                            <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
                        </div>
                        <br class="clr"/>
                        <hr class="soft"/>
                        <div class="tab-content">
                            <div class="tab-pane" id="listView">
                                <div class="row">	  
                                    <div class="span2"><img src="themes/images/products/4.jpg" alt=""/></div>
                                    <div class="span4">
                                        <h3>New | Available</h3>				
                                        <hr class="soft"/>
                                        <h5>Product Name </h5>
                                        <p>Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                        that is why our goods are so popular..</p>
                                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $222.00</h3>
                                            <label class="checkbox"><input type="checkbox">  Adds product to compair</label>
                                            <br/>
                                            <div class="btn-group">
                                                <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                                <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr class="soft"/>
                            </div>
                        </div>
                        <br class="clr">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection