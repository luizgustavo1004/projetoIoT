<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SensoresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/registro/create', [RegistroController::class, "store"]);

Route::get('/sensor', [SensoresController::class, "find"]);

Route::put('/sensor/update',[SensoresController::class, "update"]);