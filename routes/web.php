<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

// Rute API untuk data produk publik
Route::get('/api/products', [ProductController::class, 'publicIndex']);

// Auth bawaan Laravel
Auth::routes();

// Dashboard user login
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

// ✅ HANYA GUNAKAN BLOK INI UNTUK ADMIN
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('brands', BrandController::class);
    Route::resource('products', ProductController::class);
});
