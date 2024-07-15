<?php

use App\Http\Controllers\OperacionController;
use App\Http\Controllers\EjemploController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return 'Hola mundo ';
});

Route::get ('/mensaje',[EjemploController::class,'mensaje']);

Route::resource('/operacion',OperacionController::class );
