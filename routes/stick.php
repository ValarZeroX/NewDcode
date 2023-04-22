<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StickController;

Route::get('/stick/draw/{id}', [StickController::class, 'draw']);
Route::post('/stick/draw/{id}', [StickController::class, 'drawStick']);
Route::get('/stick/detail/{id}/{number}', [StickController::class, 'getDetail']);
Route::get('/stick/showall/{id}', [StickController::class, 'showAll']);
Route::get('/stick', [StickController::class, 'index']);