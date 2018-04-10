<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Activation;

class ActivationController extends Controller
{
    public function activate($email, $activationCode){
        $user = User::whereEmail($email)->first();
        if(Activation::complete($user, $activationCode)){
            return redirect()->route('adminLogin')->with(['flash_level'=>'success','flash_message'=>'Register successfully.']);
        } else {

        }
    }
}
