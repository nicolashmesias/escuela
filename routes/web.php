<?php


use App\Http\Controllers\Escuela;
use App\Http\Controllers\EscuelaController;
use Illuminate\Support\Facades\Route;

Route::get('/escuela', [EscuelaController::class, 'index'])->name('escuela.index');

