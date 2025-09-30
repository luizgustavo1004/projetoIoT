<?php


use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use Illuminate\Support\Facades\Route;

Route::get('/AmbienteCreate', AmbienteCreate::class)->name('Ambiente.create');

Route::get('/AmbienteEdit/{id}', AmbienteEdit::class)->name('Ambiente.edit');

Route::get('/Ambiente', AmbienteList::class)->name('Ambiente.index');

use App\Livewire\Dashboard;
use App\Livewire\Sensores\SensoresCreate;
use App\Livewire\Sensores\SensoresEdit;
use App\Livewire\Sensores\SensoresList;
use Illuminate\Support\Facades\Route;



Route::get('/SensorCreate', SensoresCreate::class)->name('Sensor.Create');

Route::get('/Sensor/Edit/{id}', SensoresEdit::class)->name('Sensor.Edit');

Route::get('/Sensor', SensoresList::class)->name('Sensor.List');

Route::get('/', Dashboard::class);

