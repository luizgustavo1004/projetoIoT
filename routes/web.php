<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use Illuminate\Support\Facades\Route;

Route::get('/AmbienteCreate', AmbienteCreate::class)->name('Ambiente.create');

Route::get('/AmbienteEdit/{id}', AmbienteEdit::class)->name('Ambiente.edit');

Route::get('/Ambiente', AmbienteList::class)->name('Ambiente.index');