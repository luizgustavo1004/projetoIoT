<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SensoresController;
use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/registro/create', [RegistroController::class, "store"]);

Route::put('/sensor/update',[SensoresController::class, "update"]);

Route::get('/sensor/find', [SensoresController::class, 'find']);
