<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

// Ruta para la vista de bienvenida
Route::get('/inicio', [AutoController::class, 'inicio']);

// Rutas para Autos
// LISTAR
Route::get('/autos', [AutoController::class, 'index']);

// REGISTRAR
Route::get('/autos/create', [AutoController::class, 'create']);
Route::post('/autos', [AutoController::class, 'store'])->name('autos.store');

// EDITAR
Route::get('/autos/{auto}/edit', [AutoController::class, 'edit'])->name('autos.edit');
Route::put('/autos/{auto}', [AutoController::class, 'update'])->name('autos.update');

// BORRAR
Route::get('/autos/{auto}/delete', [AutoController::class, 'delete'])->name('autos.delete');
Route::delete('/autos/{auto}', [AutoController::class, 'destroy'])->name('autos.destroy');

// Rutas para Clientes
// LISTAR
Route::get('/clientes', [ClienteController::class, 'index']);

// REGISTRAR
Route::get('/clientes/create', [ClienteController::class, 'create']);
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

// EDITAR
Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');

// BORRAR
Route::get('/clientes/{cliente}/delete', [ClienteController::class, 'delete'])->name('clientes.delete');
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
