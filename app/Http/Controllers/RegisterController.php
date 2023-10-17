<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Repository\RegisterRepository;

class RegisterController extends Controller
{
    public function __construct(private RegisterRepository $registerReposiotry)
    {
        $this->registerReposiotry = $registerReposiotry;
    }

    public function register(){
        return view("signUp");
    }

    public function registration(RegisterRequest $request)
    {
       if(! $this->registerReposiotry->register($request->validated())){
         return false;
       }

       return view('catalog');
    }
}
