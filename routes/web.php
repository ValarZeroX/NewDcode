<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarotController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});



Route::prefix('language')->group(function () {
    Route::get('/{locale}', function (string $locale) {
        if ($locale != 'sitemap.xml') {
            App::setLocale($locale);
            if ($locale == 'zh-hant') {
                return view('index');
            }
            if ($locale == 'en') {
                return view('dcode');
            }
        }
    });
    Route::get('/{locale}/tarot', [TarotController::class, 'drawListLang']);
    Route::get('/{locale}/tarot/onecard', [TarotController::class, 'getOneCardLang']);
    Route::get('/{locale}/tarot/showall', [TarotController::class, 'getAllTarotLang']);
    Route::get('/{locale}/tarot/detail/{number}', [TarotController::class, 'getDetailLang']);
    Route::get('/{locale}/tarot/sharetarot/{id}/{reversed}/{type}', [TarotController::class, 'getShareTarotLang']);
    Route::get('/{locale}/tarot/threecard', [TarotController::class, 'getThreeCardLang']);
});