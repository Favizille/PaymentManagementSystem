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
