<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use Mail;

class RegisterController extends Controller
{
    public function getAdminRegister(){
    	return view('authentication.admin.register');	
    }
    public function postAdminRegister(Request $req){
        $user = Sentinel::register($req->all());
        $activation = Activation::create($user);
        $role = Sentinel::findRoleBySlug('admin');
        $role->users()->attach($user); 
        $this->sendMail($user, $activation->code);
        return view('authentication.account.confirm-mail',['email' => $user->email]);
    }
    private function sendMail($user, $code){
        Mail::send('authentication.account.activation',[
            'user'=>$user,
            'code'=>$code
        ], function($message) use ($user){
            $message->to($user->email);
            $message->subject("[Activation] Hello $user->first_name, let's activate your account.");
        });
    }
}
