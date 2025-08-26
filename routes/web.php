<?php

use App\Livewire\Dashboard;
use App\Livewire\Sensores\SensoresCreate;
use Illuminate\Support\Facades\Route;



Route::get('/Sensor', SensoresCreate::class)->name('SensorCreate');