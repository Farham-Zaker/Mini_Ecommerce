<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix("products")->group(function () {
    Route::get("/", [ProductController::class, "index"])->name("product.index");
    Route::get("/confirm", [ProductController::class, "confirm"])->name("confirm");
});

Route::get("/pay",[PaymentController::class,"pay"])->name("pay");
Route::get("/payment/confirm",[PaymentController::class, "paymentConfirm"])->name("payment.confirm");