<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("/", [AuthController::class, 'register']);
Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get("/payment-site", [TransactionController::class, 'index'])->name('payment_site');


    Route::post('/payment', [PaymentController::class, 'makePayment'])->name('make_payment');
    Route::get('/payments', [PaymentController::class, 'payments'])->name('payments');
    Route::put('/payment_update/{paymentId}', [PaymentController::class, 'updatePayment'])->name('update_payment');
    Route::delete('/payment', [PaymentController::class, 'deletePayment'])->name('delete_payment');
});




//to do
// . UI for payments
// 1. Payment CRUD
// 2. Payment service
// 3. Profile

