<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StorekeeperController;






Route::get('/product/form', [StorekeeperController::class, 'showForm'])->name('product.form');
Route::post('/product/add', [StorekeeperController::class, 'addProduct'])->name('product.add');
Route::post('/product/sell/{productId}', [StorekeeperController::class, 'sellProduct'])->name('product.sell');
Route::get('/sales/history', [StorekeeperController::class, 'salesHistory'])->name('sales.history');
Route::get('/dashboard', [StorekeeperController::class, 'dashboard'])->name('dashboard');
