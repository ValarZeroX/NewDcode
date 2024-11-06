<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StickController;

// Route::get('/stick/draw/{id}', [StickController::class, 'draw']);
Route::post('/stick/draw/{id}', [StickController::class, 'drawStick']);
// Route::get('/stick/detail/{id}/{number}', [StickController::class, 'getDetail']);
// Route::get('/stick/showall/{id}', [StickController::class, 'showAll']);
// Route::get('/stick', [StickController::class, 'index']);


Route::redirect('/stick', '/language/zh-hant/stick', 301);
Route::get('/stick/showall/{id}', function ($id) {
    return redirect('/language/zh-hant/stick/showall/' . $id, 301);
});

Route::get('/stick/detail/{id}/{number}', function ($id, $number) {
    return redirect('/language/zh-hant/stick/detail/' . $id . '/' . $number, 301);
});

Route::get('/stick/draw/{id}', function ($id) {
    return redirect('/language/zh-hant/stick/draw/' . $id, 301);
});