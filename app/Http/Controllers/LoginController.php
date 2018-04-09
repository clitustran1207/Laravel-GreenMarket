<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function getAdminLogin(){
        return view('authentication.admin.login');	
    }
    public function postAdminLogin(Request $req){
        Sentinel::authenticate($req->all());
        return redirect()->route('home')->with(['flash_level'=>'success','flash_message'=>'Welcome back, '.Sentinel::getUser()->first_name.'.']); 
    }
    public function getAdminLogout(){
        Sentinel::logout();
        return view('authentication.admin.logout');
    }

}
