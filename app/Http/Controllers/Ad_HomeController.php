<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ad_HomeController extends Controller
{
    public function getAdminIndex(){
        return view('admin_pages.index');
    }
}
