<?php

use App\Http\Controllers\AutoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/auto', [App\Http\Controllers\AutoController::class, 'index_GET']);