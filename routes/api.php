<?php

use App\Http\Controllers\Api\ProductController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);

