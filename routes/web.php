<?php

use App\Http\Controllers\Client\HomeController as WebsiteHomeController;
use App\Http\Controllers\Admin\HomeController as DashboardHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteHomeController::class, 'index'])->name('website.home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardHomeController::class, 'index'])->name('dashboard.home');
});
