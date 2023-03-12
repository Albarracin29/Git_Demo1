<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Symfony\Component\HttpFoundation\Request;


Route::get('/', [ProductController::class, 'index'])->name('main.products');

//Route::post('/admin/store', [AdminController::class, 'Store']);

Route::resource('/admin', AdminController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
