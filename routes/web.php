<?php

use App\Livewire\Dashboard;
use App\Livewire\Registro\RegistroList;
use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Livewire\Sensores\SensoresCreate;
use App\Livewire\Sensores\SensoresEdit;
use App\Livewire\Sensores\SensoresList;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/Registro', RegistroList::class)->name('Registro.list');

Route::get('/AmbienteCreate', AmbienteCreate::class)->name('Ambiente.create');

Route::get('/AmbienteEdit/{id}', AmbienteEdit::class)->name('Ambiente.edit');

Route::get('/Ambiente', AmbienteList::class)->name('Ambiente.index');

Route::get('/SensorCreate', SensoresCreate::class)->name('Sensor.Create');

Route::get('/Sensor/Edit/{id}', SensoresEdit::class)->name('Sensor.Edit');

Route::get('/Sensor', SensoresList::class)->name('Sensor.List');
