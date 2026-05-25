<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/inquiries', [InquiryController::class, 'store']);

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'authenticate']);
    
    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::patch('/inquiries/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.inquiries.status');
        Route::get('/inquiries/export', [AdminController::class, 'export'])->name('admin.inquiries.export');
    });
});
