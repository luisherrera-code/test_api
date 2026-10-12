<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// rutas para el recurso contacto 
Route::apiResource('contactos', ContactoController::class);
