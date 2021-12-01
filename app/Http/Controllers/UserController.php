<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Login
    public function login(){

    }

    //Middleware
    public function CheckLogin(){

        if (Auth::user()->role == 'admin'){
            return redirect('/admin');
        }elseif (Auth::user()->role == 'staff') {
            return redirect('/staff');
        }elseif (Auth::user()->role == 'intern') {
            return redirect('/intern');
        }

    }

    //check login SY修改版
    /*
    /**
     * Get the path the user should be redirected to.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     
    protected function redirectTo($request)
    {
        return route('login');
    }

    */
}
