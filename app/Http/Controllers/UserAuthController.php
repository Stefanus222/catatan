<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    //
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect(route('home'));
        }else{
            return redirect(route('login'));
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }

    public function bikinpw(){
        return view('pw');
    }
}
