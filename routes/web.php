<?php

use App\Livewire\Dashboard;
use App\Livewire\Registro\RegistroList;
use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Livewire\Auth\Login;
use App\Livewire\Sensores\SensoresCreate;
use App\Livewire\Sensores\SensoresEdit;
use App\Livewire\Sensores\SensoresList;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');

Route::get('/Dashboard', Dashboard::class)->middleware('auth', 'user_type:user')->name('Dashboard');

Route::get('/Registro', RegistroList::class)->middleware('auth', 'user_type:user')->name('Registro.list');

Route::get('/AmbienteCreate', AmbienteCreate::class)->middleware('auth', 'user_type:user')->name('Ambiente.create');

Route::get('/AmbienteEdit/{id}', AmbienteEdit::class)->middleware('auth', 'user_type:user')->name('Ambiente.edit');

Route::get('/Ambiente', AmbienteList::class)->middleware('auth', 'user_type:user')->name('Ambiente.index');

Route::get('/SensorCreate', SensoresCreate::class)->middleware('auth', 'user_type:user')->name('Sensor.Create');

Route::get('/Sensor/Edit/{id}', SensoresEdit::class)->middleware('auth', 'user_type:user')->name('Sensor.Edit');

Route::get('/Sensor', SensoresList::class)->middleware('auth', 'user_type:user')->name('Sensor.List');
