<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/signIn', [LoginController::class, 'login'])->name('login');
Route::get('/signUp', [RegisterController::class, "register"])->name('register');
Route::get ('/catalog', [SalesController::class, 'catalog'])->name('catalog');

Route::get("/forget-password", [ResetPasswordController::class, "forgetPassword"])->name("password.forget");
Route::get("/reset-password", [ResetPasswordController::class, "resetPasswordView"])->name("password.reset")->middleware('signed');
Route::post("/reset-link", [ResetPasswordController::class, 'sendLink'])->name("link.send");
Route::post("/reset-password", [ResetPasswordController::class, 'resetPassword'])->name("password.reset");

