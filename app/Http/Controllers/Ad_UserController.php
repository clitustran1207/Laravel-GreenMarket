<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ad_UserController extends Controller
{
    public function getUserList(){
        return view('admin_pages.user.list_user');
    }
    public function getEditUser(){
        return view('admin_pages.user.edit_user');
    }
}
