<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class LoginController extends Controller
{
    public function getAdminLogin(){
        return view('authentication.admin.login');	
    }
    public function postAdminLogin(Request $req){
        try {
            $rememberMe = false;
            if(isset($req->remember_me))
                $rememberMe = true;
            if(Sentinel::authenticate($req->all(), $rememberMe))
                return redirect()->route('home')->with(['flash_level'=>'success','flash_message'=>'Welcome back, '.Sentinel::getUser()->first_name.'.']); 
            else
                return redirect()->back()->with(['flash_level'=>'error','flash_message'=>'Wrong credentials.']);
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            return redirect()->back()->with(['flash_level'=>'error','flash_message'=>"You are banned for $delay seconds."]);
        } catch (NotActivatedException $e) {
            return redirect()->back()->with(['flash_level'=>'error','flash_message'=>'Your account is not activated.']);
        }
    }
    public function getAdminLogout(){
        Sentinel::logout();
        return view('authentication.admin.logout');
    }

}
