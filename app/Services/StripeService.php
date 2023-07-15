<?php
namespace App\Services;

class StripeService
{
    public function charge($user, $request){
        $payment = $user->charge(

        );
    }
}
