<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\SubCategory;
use App\Functions;

class Ad_CategoryController extends Controller
{
    public function getExtract(){
        return view('admin_pages.category.extract_file');
    }
    public function getCategoryList(){
        $category = DB::table('categories')
                    ->leftjoin('sub_categories', 'categories.cate_id','sub_categories.parent_id')
                    ->select('sub_categories.*','categories.*')
                    ->orderBy('categories.cate_name')
                    ->get();
        $category2 = Category::all();
        //dd($category);
        return view('admin_pages.category.list_cate',compact('category','category2'));
    }
    public function postAdd(Request $req){
        $func = new Functions;
        if($req->name!=""){
            $category = new Category;
            $category->cate_name = $req->name;
            $category->alias = $func->changeTitle($req->name); 
            $category->save();
        }
        if($req->brand!=""){
            $brand = new SubCategory;
            $brand->sub_name = $req->brand;
            $brand->alias = $func->changeTitle($req->brand);
            $brand->parent_id = $req->category;
            if($req->hasFile('image')){
                $image = $req->file('image');
                $image->move('admin/assets/images/brand/',$image->getClientOriginalName());
                $brand->image = $image->getClientOriginalName();
            }
            $brand->save();
        }
        return redirect()->route('cateList')->with(['flash_level'=>'success','flash_message'=>'Add New successfully.']);
    }
}
