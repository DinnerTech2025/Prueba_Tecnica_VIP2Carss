<?php

use App\Http\Controllers\EncuestasController;
use Illuminate\Support\Facades\Route;

//Mis Rutas
Route::get('/', [EncuestasController::class, 'index'])->name('encuestas.index');
Route::post('/vehiculos', [EncuestasController::class, 'store'])->name('encuestas.store');
Route::get('/vehiculos/{id}/edit', [EncuestasController::class, 'edit'])->name('encuestas.edit');
Route::put('/vehiculos/{id}', [EncuestasController::class, 'update'])->name('encuestas.update');
Route::delete('/vehiculos/{id}', [EncuestasController::class, 'destroy'])->name('encuestas.destroy');
