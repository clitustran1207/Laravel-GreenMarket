<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Functions;

class Ad_CategoryController extends Controller
{
    public function getExtract(){
        return view('admin_pages.category.extract_file');
    }
    public function getCategoryList(){
        return view('admin_pages.category.list_cate');
    }
    public function getData(){
        $sub_category = DB::table('sub_categories')
                        ->join('categories', 'categories.id','=','sub_categories.parent_id')
                        ->select('sub_categories.*','categories.name')
                        ->orderBy('categories.name')
                        ->get();
        return $sub_category;
    }
}
