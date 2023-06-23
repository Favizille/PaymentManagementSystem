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
    public function index(){
        return view('index');
    }

    public function makePayment(PaymentRequest $request){
        $response = $this->paymentRepository->makePayment($request->validated());

        return view('index', ['message' => $response['message']]);

    }
}
