<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('inventory', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('inventory/create', [InventoryController::class, 'create'])->name('inventory.create');
Route::post('inventory', [InventoryController::class, 'store'])->name('inventory.store');
// Route::get('inventory/{inventory}/edit', [InventoryController::class, 'edit'])->name('inventory.edit');
Route::get('inventory/{inventory}/edit', [InventoryController::class, 'edit'])->name('inventory.edit');
Route::put('inventory/{inventory}/update', [InventoryController::class, 'update'])->name('inventory.update');
Route::delete('inventory/{inventory}/delete', [InventoryController::class, 'delete'])->name('inventory.delete');