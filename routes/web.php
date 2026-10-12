<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cronjob-{token}', function ($token) {
    if ($token !== 'KRJ0HxstmOLULWgv6OwyEyb0') {
        abort(403, 'Acceso denegado.');
    }

    // Llama al programador nativo de Laravel de forma interna
    Artisan::call('schedule:run');

    return response()->json(['status' => 'Tareas de Laravel ejecutadas con éxito.']);
});
