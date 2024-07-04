<?php

use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientHomeController::class, 'index'])->name('client.index');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard.index');
});
