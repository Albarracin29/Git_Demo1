<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Symfony\Component\HttpFoundation\Request;


Route::get('/', [ProductController::class, 'index'])->name('product.products');