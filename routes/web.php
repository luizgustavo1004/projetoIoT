<?php

use App\Http\Controllers\RegistroController;
use App\Livewire\Dashboard;
use App\Livewire\Registro\RegistroList;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/Registro', RegistroList::class)->name('Registro.list');