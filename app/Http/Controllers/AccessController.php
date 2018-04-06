<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class AccessController extends Controller
{
    public function getAdminLogin(){
    	return view('access.admin_access.ad_login');	
    }
    // public function postAdminLogin(Request $req){
    //     $data =[
    //         'email'=>$req->inputEmail,
    //         'password'=>$req->inputPassword
    //     ];
    //     $check = Auth::attempt($data);

    //     if ($check && Auth::user()->level==1) {
    //         return redirect()->route('homepage')->with(['flash_level'=>'info','flash_message'=>'Hello '. Auth::user()->fullname]);
    //     }
    //     else{
    //         return redirect()->route('adminLogin')->with(['flash_level'=>'danger','flash_message'=>'Login failed']);
    //     }
    // }
    public function getAdminLogout(){
    	return view('access.admin_access.ad_logout');	
    }
    public function getAdminRegister(){
    	return view('access.admin_access.ad_register');	
    }
    public function postAdminRegister(Request $req){
        $user = new User;
        $user->fullname = $req->fullname;
        $user->password = Hash::make($req->password);
        $user->email = $req->email;
        $user->birthday = $req->birthday;
        $user->level = 1;
        $user->remember_token = $req->_token;
        $user->save();
        return redirect()->route('adminLogin')->with(['flash_level'=>'success','flash_message'=>'Register successfully.']);
    }
}
