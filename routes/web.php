<?php

use App\Http\Controllers\AutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
