<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerMandrake;


Route::get('/', [ControllerMandrake::class, 'inicio'])->name('inicio');
Route::get('/', [ControllerMandrake::class, 'agendar'])->name('agendar');

