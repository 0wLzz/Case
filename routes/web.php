<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonyController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/product');

Route::resource('product', ProductController::class);
Route::resource('testimony', TestimonyController::class);
