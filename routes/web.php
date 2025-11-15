<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RickController;

Route::get('/rick', [RickController::class, 'index'])->name('rick.index');
Route::get('/rick/{id}', [RickController::class, 'show'])->name('rick.show');
Route::get('/episode/{id}', [RickController::class, 'episode'])->name('episode.show');