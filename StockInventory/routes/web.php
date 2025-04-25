<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;


Route::post('/sale', [SaleController::class, 'store']);
Route::post('/purchases', [PurchaseController::class, 'store']);

Route::get('/', function () {
    return view('auth.login'); 
});

Route::get('/dashboard', [InventoryController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('inventory', InventoryController::class);
    Route::post('/purchase', [PurchaseController::class, 'store']);
    Route::post('/sale', [SaleController::class, 'store']);
});

require __DIR__.'/auth.php';
