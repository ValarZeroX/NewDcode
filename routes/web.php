<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarotController;
use App\Http\Controllers\PagesController;
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


Route::get('/makeSitemap', [PagesController::class, 'makeSitemap']);
Route::get('/sitemap.xml', [PagesController::class, 'sitemap']);


Route::prefix('language')->group(function () {
    Route::get('/{locale}', function (string $locale) {
        if ($locale != 'sitemap.xml') {
            App::setLocale($locale);
            if ($locale == 'zh-hant') {
                return view('index');
            }
            if ($locale == 'en' || $locale == 'zh-hans') {
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
    Route::get('/{locale}/tarot/fourcard', [TarotController::class, 'getFourCardLang']);
    Route::get('/{locale}/tarot/fourelement', [TarotController::class, 'getFourElementLang']);
    Route::get('/{locale}/tarot/six-pointed-star', [TarotController::class, 'getSixPointedStarLang']);
    Route::get('/{locale}/tarot/friendship', [TarotController::class, 'getFriendshipLang']);
    Route::get('/{locale}/tarot/week', [TarotController::class, 'getWeekLang']);
    Route::get('/{locale}/tarot/either', [TarotController::class, 'getEitherLang']);
});