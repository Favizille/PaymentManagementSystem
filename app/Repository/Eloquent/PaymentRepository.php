<?php
namespace App\Repository\Eloquent;

use App\Models\Payment;
use App\Models\User;
use App\Repository\BaseRepository;

class paymentRepository extends BaseRepository
{
    protected $payment;
    protected $user;

    public function __construct(Payment $payment, User $user)
    {
        $this->payment = $payment;
        $this->user = $user;
    }

    public function makePayment($data)
    {

        if(!auth()->user()){
            return [
                "status" => $this->fail(),
                "message" => "Unauthorised User"
            ];
        }

        if(!$this->payment->create($data)){
            return [
                "status" => $this->fail(),
                "message" => "Payment Failed"
            ];
        };

        return [
            "status" => $this->success(),
            "message" => "Payment Successful",
        ];
    }
}
