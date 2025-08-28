<?php

use App\Livewire\Dashboard;
use App\Livewire\Sensores\SensoresCreate;
use App\Livewire\Sensores\SensoresEdit;
use App\Livewire\Sensores\SensoresList;
use Illuminate\Support\Facades\Route;



Route::get('/SensorCreate', SensoresCreate::class)->name('Sensor.Create');

Route::get('/Sensor/Edit/{id}', SensoresEdit::class)->name('Sensor.Edit');

Route::get('/Sensor', SensoresList::class)->name('Sensor.List');