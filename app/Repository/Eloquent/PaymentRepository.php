<?php
namespace App\Repository\Eloquent;

use Stripe\Stripe;
use App\Models\User;
use App\Models\Payment;
use Stripe\Checkout\Session;
use App\Services\StripeService;
use App\Repository\BaseRepository;

class PaymentRepository extends BaseRepository
{

    public function __construct(protected Payment $payment, protected User $user, private StripeService $paymentService){}

    private function unauthorizedUser(){
        if(!auth()->user()){
            return [
                "status" => $this->fail(),
                "message" => "Unauthorised User"
            ];
        }
    }

    public function makePayment($data)
    {
        $this->unauthorizedUser();

        Stripe::setApiKey(config("stripe.sk"));

        // $this->paymentService->charge(auth()->user(), $data);

        $session = Session::create($data);


        // if(!$this->payment->create($data)){
        //     return [
        //         "status" => $this->fail(),
        //         "message" => "Payment Failed"
        //     ];
        // };

        return [
            "status" => $this->success(),
            "message" => "Payment Successful",
        ];
    }

    public function payments()
    {
        $this->unauthorizedUser();

        if(!$this->payment->find(auth()->user()->id)){
             return [
                "status" => $this->fail(),
                "message" => "No Payment Found"
             ];
        }

        return $this->payment->where('user_id', auth()->user()->id)->get();
    }

    public function updatePayment($paymentId)
    {
        $this->unauthorizedUser();

        if(!$this->payment->find($paymentId)){
            return [
                "status" => $this->fail(),
                "message" => "No Payment Found"
             ];
        };

        return $this->payment->find($paymentId)->update()->all();

    }

    public function delete($paymentId)
    {
        $this->unauthorizedUser();

        if(!$this->payment->find($paymentId)){
            return [
                "status" => $this->fail(),
                "message" => "No Payment Found"
             ];
        };

        return $this->payment->find($paymentId)->delete();
    }
}
