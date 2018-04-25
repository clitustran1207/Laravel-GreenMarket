<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Product;
use App\Category;
use App\Cart;
use App\Customer;
use App\Bill;
use App\BillDetail;
use Session;

class CartController extends Controller
{
    public function getAddToCart(Request $req,$id,$qty=1){
        $product = Product::find($id);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $qty);
        $req->session()->put('cart',$cart);
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Success! Product has been added to cart.']);
    }
    public function deleteCart($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items) > 0){
            Session::put('cart',$cart);
        } else{
            Session::forget('cart');    
        }
        return redirect()->back();
    }
    public function updateCart(Request $req,$id,$qty){
        $product = Product::find($id);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->update($product, $qty);
        //dd($cart);
        $req->session()->put('cart',$cart);
        //echo $cart->items[$id]['item']->promotion_price;
        $arr = [
            'totalPrice' => number_format($cart->totalPrice).' đ',
            'dongiaSanpham' => number_format($cart->items[$id]['price']).' đ',
            'tax' => number_format($cart->totalPrice*0.1).' đ',
            'total' => number_format(($cart->totalPrice*0.1) + $cart->totalPrice).' đ'
        ];
        //dd(Session('cart'));
        return response()->json($arr);
    }
    public function getCheckOut(){
        return view('client_pages.checkout');
    }
    public function postCheckOut(Request $req){
        $cart = Session::get('cart');
        //dd($cart);
        $customer = new Customer;
        $customer->fullname = $req->fullname;
        $customer->gender = $req->gender;
        // $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone = $req->phone;
        $customer->save();

        $bill = new Bill;
        $bill->customer_id = $customer->id;
        $bill->total = $cart->totalPrice;
        $bill->payment = null;
        $bill->status = "Pending";
        $bill->note = $req->note;
        $bill->save();

        foreach($cart->items as $key => $value){
            $bill_detail = new BillDetail;
            $bill_detail->bill_id = $bill->id;
            $bill_detail->product_id = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->price = ($value['price']/$value['qty']);
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->route('index')->with(['flash_level'=>'success','flash_message'=>'Checkout Successfully!! Thank You']);
        // return view('client_pages.checkout');
    }
    
}
