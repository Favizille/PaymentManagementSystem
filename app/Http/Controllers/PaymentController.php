<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Repository\Eloquent\paymentRepository;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $paymentRepository;

    public function __construct(paymentRepository $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function makePayment(PaymentRequest $request){
        $response = $this->paymentRepository->makePayment($request->validated());

        return view('index', ['message' => $response['message']]);

    }

    public function payments()
    {
        $response = $this->paymentRepository->payments();

        return view('transaction-records', ["payments" => $response]);
    }

    public function updatePayment($paymentId)
    {
        $this->paymentRepository->updatePayment($paymentId);

        return redirect()->back()->with(["message" => "Updated successfully"]);
    }

    public function deletePayment($paymentId)
    {
        $this->paymentRepository->delete($paymentId);

        return redirect()->back()->with(["message" => "Deleted successfully"]);
    }
}
