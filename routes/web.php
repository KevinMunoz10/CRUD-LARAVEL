<?php

use App\Http\Controllers\ProveedoresController;
use App\Models\Proveedores;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProveedoresController::class, 'index'])-> name ('proveedores.index');
Route::get('/create', [ProveedoresController::class, 'create'])-> name ('proveedores.create');
Route::get('/edit/{id}', [ProveedoresController::class, 'edit'])-> name ('proveedores.edit');
Route::put('/update/{id}', [ProveedoresController::class, 'update'])->name('proveedores.update');
Route::get('/show/{id}', [ProveedoresController::class, 'show'])->name('proveedores.show');
Route::get('/ver/{id}', [ProveedoresController::class, 'ver'])->name('proveedores.ver');
Route::post('/store', [ProveedoresController::class, 'store'])->name('proveedores.store');
Route::delete('/destroy/{id}', [ProveedoresController::class, 'destroy'])->name('proveedores.destroy');
