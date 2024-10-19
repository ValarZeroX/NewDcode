<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TarotController;
Route::redirect('/tarot', '/language/zh-hant/tarot', 301);
Route::redirect('/tarot/onecard', '/language/zh-hant/tarot/onecard', 301);
Route::redirect('/tarot/showall', '/language/zh-hant/tarot/showall', 301);
Route::redirect('/tarot/detail/{number}', '/language/zh-hant/tarot/detail/{number}', 301);
Route::redirect('/tarot/sharetarot/{id}/{reversed}/{type}', '/language/zh-hant/tarot/sharetarot/{id}/{reversed}/{type}', 301);
Route::redirect('/tarot/threecard', '/language/zh-hant/tarot/threecard', 301);
Route::redirect('/tarot/fourcard', '/language/zh-hant/tarot/fourcard', 301);
Route::redirect('/tarot/fourelement', '/language/zh-hant/tarot/fourelement', 301);
Route::redirect('/tarot/six-pointed-star', '/language/zh-hant/tarot/six-pointed-star', 301);
Route::redirect('/tarot/friendship', '/language/zh-hant/tarot/friendship', 301);
Route::redirect('/tarot/week', '/language/zh-hant/tarot/week', 301);
Route::redirect('/tarot/either', '/language/zh-hant/tarot/either', 301);
Route::redirect('/tarot/daily', '/language/zh-hant/tarot/daily', 301);
Route::redirect('/tarot/daily/love', '/language/zh-hant/tarot/love', 301);
Route::redirect('/tarot/masses-reading/{id}', '/language/zh-hant/tarot/masses-reading/{id}', 301);
Route::redirect('/tarot/masses', '/language/zh-hant/tarot/masses', 301);
// Route::get('/tarot', [TarotController::class, 'drawList']);
// Route::get('/tarot/showall', [TarotController::class, 'getAllTarot']);
// Route::get('/tarot/detail/{number}', [TarotController::class, 'getDetail']);
// Route::get('/tarot/sharetarot/{id}/{reversed}/{type}', [TarotController::class, 'getShareTarot']);
// Route::get('/tarot/onecard', [TarotController::class, 'getOneCard']);
// Route::get('/tarot/threecard', [TarotController::class, 'getThreeCard']);
// Route::get('/tarot/fourcard', [TarotController::class, 'getFourCard']);
// Route::get('/tarot/fourelement', [TarotController::class, 'getFourElement']);
// Route::get('/tarot/six-pointed-star', [TarotController::class, 'getSixPointedStar']);
// Route::get('/tarot/friendship', [TarotController::class, 'getFriendship']);
// Route::get('/tarot/week', [TarotController::class, 'getWeek']);
// Route::get('/tarot/either', [TarotController::class, 'getEither']);
// // Route::get('/tarot/flirt', [TarotController::class, 'getFlirt']);

// Route::get('/tarot/daily', [TarotController::class, 'getDaily']);
// Route::get('/tarot/daily/love', [TarotController::class, 'getDailyLove']);

// Route::get('/tarot/masses-reading/{id}', [TarotController::class, 'getReading']);
// Route::get('/tarot/masses', [TarotController::class, 'getMasses']);