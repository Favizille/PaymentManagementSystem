<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use App\Repository\ResetPasswordRepository;
use App\Http\Requests\ChangePasswordRequest;

class ResetPasswordController extends Controller
{

    public function __construct(private ResetPasswordRepository $resetPasswordRepository)
    {
        return $this->resetPasswordRepository = $resetPasswordRepository;
    }

    public function forgetPassword()
    {
        return view('forget-password');
    }

    public function resetPasswordView()
    {
        return view('resetPassword');
    }

    public function sendLink(ResetPasswordRequest $request)
    {
        if(! $this->resetPasswordRepository->sendLink($request->validated())){

            return redirect()->back()->withErrors('Password reset link not sent');
        }

        return redirect()->back()->with('message', "Password reset link has been sent!");
    }


    public function resetPassword(ChangePasswordRequest $request)
    {
        if(! $this->resetPasswordRepository->resetPassword($request->validated())){

            return redirect()->back()->withErrors('Password Could Not Be Reset');
        }

        return redirect('/signIn')->with('message', 'Password Reset Was Successful');
    }
}
