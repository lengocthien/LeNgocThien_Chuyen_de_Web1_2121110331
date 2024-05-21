<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\CartController;

Route::get("/", function () {
    echo "Hello World!";
});

Route::get("home", function () {
    return "Home";
});

Route::get("welcome", function () {
    return view("welcome");
});

Route::get("/", [HomeController::class, "index"])->name('site.home');

Route::get("/san-pham", [ProductController::class, "index"])->name('site.product');

Route::get("/chi-tiet-san-pham/{slug}", [ProductController::class, "product_detail"])->name('site.detail');

Route::get("/lien-he", [ContactController::class, "index"])->name('site.contact');

Route::get("/gio-hang", [CartController::class, "index"])->name('site.cart');
