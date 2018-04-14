<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\SubCategory;
use App\Functions;
use App\Product;
use App\ProductImg;
use Sentinel;

class Ad_ProductController extends Controller
{
    public function getProductList(){
        return view('admin_pages.product.list_pro');
    }
    public function getAddProduct(){
        $category = Category::all();
        return view('admin_pages.product.add_pro', compact('category'));
    }
    // public function loadBrand($id){
    //     $brand = SubCategory::where('parent_id',$id)->get();
    //     $output = '';
    //     foreach($brand as $subcate){
    //         $output .= '
    //             <option value="'.$subcate["id"].'">'.$subcate["sub_name"].'</option>
    //         ';
    //     }
    //     return $output;
    // }
    public function loadBrand($id){
        $brand = SubCategory::where('parent_id',$id)->get();
        $output = '';
        foreach($brand as $subcate){
            $output .= '
                <option value="'.$subcate["id"].'">'.$subcate["sub_name"].'</option>
            ';
        }
        return $output;
    }
    public function postAddProduct(Request $req){
        $func = new Functions;
        $product = new Product;
        $product->name = $req->name;
        $product->alias = $func->changeTitle($req->name);
        $product->brand_id = $req->brand;
        $product->price = $req->price;
        $product->promotion_price = isset($req->promotion_price) ? $req->promotion_price : 0;
        $product->promotion_item = $req->promotion_item;
        $product->quantity = $req->quantity;
        $product->status = $req->status;
        $product->today = $req->today;
        $product->seo_keywords = $req->seo_keywords;
        $product->seo_description = $req->seo_description;
        $product->summary = $req->summary;
        $product->detail = isset($req->detail) ? $req->detail : "--empty--";
        $product->user_id = Sentinel::getUser()->id;
        $product->save();
        if($req->hasFile('Image')){
            foreach($req->file('Image') as $image){
                $product_img = new ProductImg;
                if(isset($image)){
                    $product_img->url = $image->getClientOriginalName();
                    $product_img->product_id = $product->id;
                    $image->move('public/admin/assets/images/product/',$image->getClientOriginalName());
                    $product_img->save();
                }
            }
        }
        return redirect()->route('proList')->with(['flash_level'=>'success','flash_message'=>'Add new Product successfully']);
    }
    public function getExtract(){
        return view('admin_pages.product.extract_file');
    }
}
