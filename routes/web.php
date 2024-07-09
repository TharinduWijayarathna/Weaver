<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\CustomerController;

Route::get('/', [ClientHomeController::class, 'index'])->name('client.index');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard.index');

    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/update/{product}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/delete/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
    });

    Route::prefix('customer')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
        Route::get('/create', [CustomerController::class, 'create'])->name('customer.create');
        Route::post('/store', [CustomerController::class, 'store'])->name('customer.store');
        Route::get('/edit/{customer}', [CustomerController::class, 'edit'])->name('customer.edit');
        Route::put('/update/{customer}', [CustomerController::class, 'update'])->name('customer.update');
        Route::delete('/delete/{customer}', [CustomerController::class, 'destroy'])->name('customer.destroy');
    });
});
