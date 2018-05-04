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
                    ->join('customers','customers.cus_id','=','bills.customer_id')
                    ->leftjoin('users','users.id','=','bills.staff_id')
                    ->select('bills.*','customers.fullname','users.first_name')
                    ->orderBy('bills.order_created_at','DESC')
                    ->get();
        // dd($orders);
        $total = DB::table('bills')->count();
        $success = DB::table('bills')->where('status','Success')->count();
        $pending = DB::table('bills')->where('status','Pending')->count();
        $cancel = DB::table('bills')->where('status','Cancel')->count();
        return view('admin_pages.order.list_order', compact('orders','total','success','pending','cancel'));
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
                    ->join('customers','customers.cus_id','bills.customer_id')
                    ->join('users','users.id','bills.staff_id')
                    ->where('bills.id',$id)
                    ->select('bills.*','users.first_name','customers.*')
                    ->first();
        $detail = DB::table('bill_details')
                    ->join('products','bill_details.product_id','products.id')
                    ->where('bill_details.bill_id',$id)
                    ->select('bill_details.*','products.pro_name')
                    ->get();
        return view('admin_pages.order.detail_order',compact('order','detail'));
    }
    public function getEdit($id){
        $order = DB::table('bills')            
                    ->join('customers','customers.cus_id','bills.customer_id')
                    ->where('bills.id',$id)
                    ->select('bills.*','customers.*')
                    ->first();
        // $details = DB::table('bill_details')
        //             ->join('products','bill_details.product_id','products.id')
        //             ->where('bill_details.bill_id',$id)
        //             ->select('bill_details.*','products.pro_name')
        //             ->get();
        return view('admin_pages.order.edit_order',compact('order'));
    }
    public function postEdit(Request $req,$id){
        $order = Bill::where('id',$id)->first();
        $order->payment = $req->payment;
        $order->status = $req->status;
        $order->note = $req->note;
        $order->order_updated_at = date_format(now(),"Y-m-d H:i:s");
        $order->save();
        return redirect()->route('orderList')->with(['flash_level'=>'success','flash_message'=>'Edit Order successfully']);
    }
}
