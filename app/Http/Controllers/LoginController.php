<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Repository\loginRepository;

class LoginController extends Controller
{
    public function __construct(loginRepository $loginRepository)
    {
        $this->loginRepository = $loginRepository;
    }

    public function login()
    {
        return view("signIn");
    }

    public function logginIn(LoginRequest $request)
    {
        if(! $this->loginRepository->logIn($request->validated()) )
        {
            return false;
        }

        return view("catalog");
    }
}
