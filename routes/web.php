<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('inventory', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('inventory/create', [InventoryController::class, 'create'])->name('inventory.create');