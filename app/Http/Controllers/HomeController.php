<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getIndex(){
        $products = DB::table('products')
                        ->join('sub_categories','products.brand_id','sub_categories.id')
                        ->where('products.today',1)
                        ->select('products.*','sub_categories.image')
                        ->get();
        //dd($products);
        return view('client_pages.index',compact('products'));
    }
}
