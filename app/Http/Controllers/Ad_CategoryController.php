<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ad_CategoryController extends Controller
{

    public function getCategoryList(){
        return view('admin_pages.category.list_cate');
    }

    public function getEditCategory(){
        return view('admin_pages.category.edit_cate');
    }
}
