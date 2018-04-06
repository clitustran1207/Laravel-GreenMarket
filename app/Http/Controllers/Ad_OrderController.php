<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ad_OrderController extends Controller
{
    public function getOrderList(){
        return view('admin_pages.order.list_order');
    }
    public function getOrderDetail(){
        return view('admin_pages.order.detail_order');
    }
}
