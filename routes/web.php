<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Tambahkan baris ini

Route::resource('products', ProductController::class);