@extends('client_layout')
@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Products Name</li>
        </ul>
        <h3> Products Name <small class="pull-right"> 40 products are available </small></h3>	
        <hr class="soft"/>
        <form class="form-horizontal span6">
            <div class="control-group">
              <label class="control-label alignL">Sort By </label>
                <select>
                  <option>Priduct name A - Z</option>
                  <option>Priduct name Z - A</option>
                  <option>Priduct Stoke</option>
                  <option>Price Lowest first</option>
                </select>
            </div>
        </form> 
        <div id="myTab" class="pull-right">
            <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
            <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
        </div>
        <br class="clr"/>
        <div class="tab-content">
            <div class="tab-pane active" id="blockView">
                <ul class="thumbnails">
                    @foreach($products as $item)
                    <li class="span3">
                        <div class="thumbnail">
                            <a href="{{route('proDetail',$item->id)}}"><img src="admin/assets/images/product/thumbnail/{{$item->thumbnail}}" alt=""/></a>
                            <div class="caption">
                            <h5>{{$item->pro_name}}</h5>
                            <p>{{$item->promotion_item}}</p>
                            <h4 style="text-align:center"><a class="btn" href="{{route('addCart',$item->id)}}">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">{{number_format($item->price)}} đ</a></h4>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <hr class="soft"/>
            </div>
            <div class="tab-pane" id="listView">
                @foreach($products as $item)
                <div class="row">	  
                    <div class="span2">
                        <img src="admin/assets/images/product/thumbnail/{{$item->thumbnail}}" alt=""/>
                    </div>
                    <div class="span4">
                        <h4>{{$item->pro_name}}</h4>				
                        <hr class="soft"/>
                        <img src="admin/assets/images/brand/{{$item->image}}" width="80"> 
                        <p>{{$item->promotion_item}}</p>
                        <a class="btn btn-small pull-right" href="{{route('proDetail',$item->id)}}">View Details</a>
                        <br class="clr"/>
                    </div>
                    <div class="span3 alignR">
                        <form class="form-horizontal qtyFrm">
                            <h3 style="color:#d0021b"> {{number_format($item->price)}} đ</h3>
                            <label class="checkbox"><input type="checkbox">  Adds product to compair</label>
                            <br/>
                            <a href="{{route('addCart',$item->id)}}" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                            <a href="{{route('proDetail',$item->id)}}" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                        </form>
                    </div>
                </div>
                @endforeach
                <hr class="soft"/>
            </div>
        </div>
        <a href="compair.html" class="btn btn-large pull-right">Compair Product</a>
        <div class="pagination">
            <ul>
                <li><a href="#">&lsaquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">&rsaquo;</a></li>
            </ul>
        </div>
        <br class="clr"/>
    </div> 
@endsection