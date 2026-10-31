<?php

use App\Http\Controllers\ComputerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ComputerController::class, 'index'])->name('computers.index');
Route::get('/computers/create', [ComputerController::class, 'create'])->name('computers.create');
Route::post('/computers', [ComputerController::class, 'store'])->name('computers.store');

Route::delete('/computers/delete/{id}', [ComputerController::class, 'destroy'])->name('computers.destroy');
