<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TarotController;
Route::get('/tarot', [TarotController::class, 'drawList']);
Route::get('/tarot/showall', [TarotController::class, 'getAllTarot']);
Route::get('/tarot/detail/{number}', [TarotController::class, 'getDetail']);
Route::get('/tarot/sharetarot/{id}/{reversed}/{type}', [TarotController::class, 'getShareTarot']);
Route::get('/tarot/onecard', [TarotController::class, 'getOneCard']);
Route::get('/tarot/threecard', [TarotController::class, 'getThreeCard']);
Route::get('/tarot/fourcard', [TarotController::class, 'getFourCard']);
Route::get('/tarot/fourelement', [TarotController::class, 'getFourElement']);
Route::get('/tarot/six-pointed-star', [TarotController::class, 'getSixPointedStar']);
Route::get('/tarot/friendship', [TarotController::class, 'getFriendship']);
Route::get('/tarot/week', [TarotController::class, 'getWeek']);
Route::get('/tarot/either', [TarotController::class, 'getEither']);
// Route::get('/tarot/flirt', [TarotController::class, 'getFlirt']);

Route::get('/tarot/daily', [TarotController::class, 'getDaily']);
Route::get('/tarot/daily/love', [TarotController::class, 'getDailyLove']);

Route::get('/tarot/masses-reading/{id}', [TarotController::class, 'getReading']);
Route::get('/tarot/masses', [TarotController::class, 'getMasses']);