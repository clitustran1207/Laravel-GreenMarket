<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ad_CustomerController extends Controller
{
    public function getCustomerList(){
        return view('admin_pages.customer.list_cus');
    }
    public function getEditCustomer(){
        return view('admin_pages.customer.edit_cus');
    }
}
