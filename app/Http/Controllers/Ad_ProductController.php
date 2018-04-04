<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ad_ProductController extends Controller
{
    public function getProductList(){
        return view('admin_pages.product.list_pro');
    }
    public function getAddProduct(){
        return view('admin_pages.product.add_pro');
    }
    public function getEditProduct(){
        return view('admin_pages.product.edit_pro');
    }
}
