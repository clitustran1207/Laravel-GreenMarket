<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Bill;
use App\BillDetail;
use App\Customer;
use App\User;
use Sentinel;

class Ad_OrderController extends Controller
{
    public function getOrderList(){
        $orders = DB::table('bills')
                    ->join('customers','customers.id','=','bills.customer_id')
                    ->leftjoin('users','users.id','=','bills.staff_id')
                    ->select('bills.*','customers.fullname','users.first_name')
                    ->get();
        // dd($orders);
        return view('admin_pages.order.list_order', compact('orders'));
    }
    public function takeOrder($id){
        $order = Bill::where('id',$id)->first();
        $staff_id = Sentinel::getUser()->id;
        $order->staff_id = $staff_id;
        $order->save();
        $staff = User::where('id',$staff_id)->first();
        $output = '';
        $output .= '<img src="admin/assets/images/users/avatar-10.jpg" alt="contact-img" title="contact-img" class="rounded-circle" />
                    <span class="m-l-5"><b>'.$staff["first_name"].'</b></span>';
        return $output;
    }
    public function getOrderDetail($id){
        $order = DB::table('bills')            
                    ->join('customers','customers.id','bills.customer_id')
                    ->join('users','users.id','bills.staff_id')
                    ->where('bills.id',$id)
                    ->select('bills.*','users.first_name','customers.*')
                    ->first();
        $detail = DB::table('bill_details')
                    ->join('products','bill_details.product_id','products.id')
                    ->where('bill_details.bill_id',$id)
                    ->select('bill_details.*','products.pro_name')
                    ->get();
        //dd($order);
        // $datetime = now();
        // echo $datetime;
        // echo date_format($datetime, 'g:ia \o\n l jS F Y');
        return view('admin_pages.order.detail_order',compact('order','detail'));
    }
}
