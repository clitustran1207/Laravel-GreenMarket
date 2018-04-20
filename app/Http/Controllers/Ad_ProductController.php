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
        $products = DB::table('products')
                    ->join('sub_categories','sub_categories.id','=','products.brand_id')
                    ->join('categories','categories.cate_id','=','sub_categories.parent_id')
                    ->join('users','users.id','=','products.user_id')
                    ->select('products.*','categories.cate_name','users.first_name')
                    ->orderBy('categories.cate_name')
                    ->get();
        return view('admin_pages.product.list_pro', compact('products'));
    }
    public function getAddProduct(){
        $category = Category::all();
        return view('admin_pages.product.add_pro', compact('category'));
    }
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
        $product->pro_name = $req->name;
        $product->alias = $func->changeTitle($req->name);
        $product->brand_id = $req->brand;
        $product->price = substr(str_replace(",","",$req->price), 4,-3);
        $product->promotion_price = substr(str_replace(",","",isset($req->promotion_price) ? $req->promotion_price : 0), 4,-3);
        $product->promotion_item = $req->promotion_item;
        $product->quantity = $req->quantity;
        $product->status = $req->status;
        $product->today = isset($req->today) ? $req->today : 0;
        $product->seo_keywords = $req->seo_keywords;
        $product->seo_description = $req->seo_description;
        $product->summary = $req->summary;
        $product->detail = isset($req->detail) ? $req->detail : "--empty--";
        if($req->hasFile('thumbnail')){
            $image = $req->file('thumbnail');
            $image->move('admin/assets/images/product/thumbnail',$image->getClientOriginalName());
            $product->thumbnail = $image->getClientOriginalName();
        }
        $product->user_id = Sentinel::getUser()->id;
        $product->save();
        if($req->hasFile('Image')){
            foreach($req->file('Image') as $image){
                $product_img = new ProductImg;
                if(isset($image)){
                    $product_img->url = $image->getClientOriginalName();
                    $product_img->product_id = $product->id;
                    $image->move('admin/assets/images/product/detail',$image->getClientOriginalName());
                    $product_img->save();
                }
            }
        }
        return redirect()->route('proList')->with(['flash_level'=>'success','flash_message'=>'Add new Product successfully']);
    }
    public function getEditProduct($id){
        $product = Product::where('id',$id)->first();
        $category = Category::all();
        // $sub = DB::table('sub_categories')->where('sub_categories.id',$product['brand_id'])->select('sub_categories.*')->get();
        // dd($sub);
        $pro_img = ProductImg::where('product_id',$id)->get();
        //dd($pro_img);
        return view('admin_pages.product.edit_pro', compact('product','category','pro_img'));
    }
    public function postEditProduct(Request $req,$id){
        $func = new Functions;
        $product = Product::where('id',$id)->first();
        $product->pro_name = $req->name;
        $product->alias = $func->changeTitle($req->name);
        $product->brand_id = $req->brand;
        $product->price = substr(str_replace(",","",$req->price), 4,-3);
        $product->promotion_price = substr(str_replace(",","",isset($req->promotion_price) ? $req->promotion_price : 0), 4,-3);
        $product->promotion_item = $req->promotion_item;
        $product->quantity = $req->quantity;
        $product->status = $req->status;
        $product->today = isset($req->today) ? $req->today : 0;
        $product->seo_keywords = $req->seo_keywords;
        $product->seo_description = $req->seo_description;
        $product->summary = $req->summary;
        $product->detail = isset($req->detail) ? $req->detail : "--empty--";
        $product->save();
        if($req->hasFile('Image')){
            foreach($req->file('Image') as $image){
                $product_img = new ProductImg;
                if(isset($image)){
                    $product_img->url = $image->getClientOriginalName();
                    $product_img->product_id = $product->id;
                    $image->move('admin/assets/images/product/detail',$image->getClientOriginalName());
                    $product_img->save();
                }
            }
        }
        return redirect()->route('proList')->with(['flash_level'=>'success','flash_message'=>'Edit Product successfully']);
    }
    public function getDeleteProduct($id){
        $product = Product::where('id',$id)->first();
        if($product){
            $product->delete();
            echo "success";
        }else{
            echo "error";
        }
    }
    public function getExtract(){
        return view('admin_pages.product.extract_file');
    }
}
