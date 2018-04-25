<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\ProductImg;
use App\Category;
use App\SubCateogry;

class ProductController extends Controller
{
    public function getList($id){
        $products = DB::table('products')
                    ->join('sub_categories','products.brand_id','sub_categories.id')
                    ->where('products.brand_id',$id)
                    ->select('products.*','sub_categories.image')
                    ->orderBy('products.created_at','DESC')
                    ->get();
        return view('client_pages.pro-list', compact('products'));

    }
    public function getDetail($id){
        $product = DB::table('products')
                    ->join('sub_categories','products.brand_id','sub_categories.id')
                    ->where('products.id',$id)
                    ->select('products.*','sub_categories.image')
                    ->first();
        //dd($product);
        $images = ProductImg::where('product_id',$id)->get();
        //dd($image);
        return view('client_pages.pro-detail', compact('product','images'));
    }
}
