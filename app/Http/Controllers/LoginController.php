<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view("signIn");
    }

    public function logginIn(LoginRequest $login)
    {

    }
}
