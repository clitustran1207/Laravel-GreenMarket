@extends('client_layout')
@section('content')
    <div class="span9">
        @if(Session::has('cart'))
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                <li class="active"> SHOPPING CART</li>
            </ul>
            <h3>SHOPPING CART [ <small>{{$totalQty}} Item(s) </small>]<a href="{{route('index')}}" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
            <hr class="soft"/>
            <table class="table table-bordered">
                <tr><th> I AM ALREADY REGISTERED  </th></tr>
                <tr> 
                    <td>
                        <form class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label" for="inputUsername">Username</label>
                                <div class="controls">
                                    <input type="text" id="inputUsername" placeholder="Username">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword1">Password</label>
                                <div class="controls">
                                    <input type="password" id="inputPassword1" placeholder="Password">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" class="btn">Sign in</button> OR <a href="register.html" class="btn">Register Now!</a>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <a href="forgetpass.html" style="text-decoration:underline">Forgot password ?</a>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
            </table>		     
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Promotion</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Discount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product_cart as $cart)
                    <tr>
                        <td><img width="60" src="admin/assets/images/product/thumbnail/{{$cart['item']['thumbnail']}}" alt=""/></td>
                        <td>{{$cart['item']['pro_name']}}</td>
                        <td>{{$cart['item']['promotion_item']}}</td>
                        <td>
                            <div class="input-append">
                                <select style="width:auto" name="product-qty" id="product-qty" class="form-control product-qty" data-id="{{$cart['item']['id']}}">
                                    @for ($i=1; $i <= 5; $i++)
                                        <option value="{{$i}}" @if($i==$cart['qty']){{'selected'}}@else{{''}}@endif>{{$i}}</option>
                                    @endfor
                                </select>
                                <a href="{{route('delCart',$cart['item']['id'])}}"><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button></a>				
                            </div>
                        </td>
                        <td id="dongia-{{$cart['item']['id']}}">{{number_format($cart['price'])}} đ</td>
                        <td>{{number_format($cart['item']['promotion_price'])}} đ</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="5" style="text-align:right">Total Price:	</td>
                        <td id="totalPrice">{{number_format($totalPrice)}} đ</td>
                    </tr>
                    <tr>
                        <td colspan="5" style="text-align:right">Tax(10%):	</td>
                        <?php $tax=$totalPrice*0.1;?>
                        <td id="tax">{{number_format($tax)}} đ </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="text-align:right"><strong>TOTAL</strong></td>
                        <td class="label label-important total" style="display:block"><strong>{{number_format($totalPrice+$tax)}} đ</strong></td>
                    </tr>
                </tbody>
            </table>
            <a href="{{route('index')}}" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
            <a class="btn btn-large pull-right" data-toggle="modal" data-target="#myModal">Next <i class="icon-arrow-right"></i></a>
        @endif
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Order Information</h4>
                    </div>
                    <form class="form-horizontal" action="{{route('checkout')}}" method="post">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label">Fullname</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge" name="fullname" autofocus>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Gender</label>
                                    <div class="controls">
                                        <div class="radio">
                                            <label><input type="radio" name="gender" value="male" checked>Male</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="gender" value="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Address</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge" name="address">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Phone</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge" name="phone">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Note</label>
                                    <div class="controls">
                                        <textarea class="input-xlarge" name="note" rows="3" style="height:65px"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $('.product-qty').change(function(){
            var soluong = $(this).val();
            console.log(soluong);
            var idSP = $(this).attr('data-id');
            var route = 'update/'+idSP+'/'+soluong;
            $.ajax({
                url: route, //đường dẫn chạy ngầm ở console của trang này
                data:{
                    id: idSP, //biến truyền đi: giá trị của id, lấy ở line 176
                    qty: soluong
                },
                type: "get",
                dataType: "json", //thêm cái này để json thành 1 object. Do cần trả về 2 giá trị
                success: function(result){
                    console.log(result)
                    var dongiaSP = result.dongiaSanpham
                    var tongtien = result.totalPrice
                    var tax = result.tax
                    var total = result.total
                    console.log(dongiaSP)
                    console.log(tongtien)
                    $('#totalPrice').html(tongtien)
                    $('#total').html(tongtien)
                    $('#dongia-'+idSP).html(dongiaSP)
                    $('#tax').html(tax)
                    $('.total').html(total)
                },
                error: function(){
                console.log("Lỗi")
                }
            }).done(function(){
                console.log("Chạy xong ajax")
            });
        });
    });
</script>
@endsection