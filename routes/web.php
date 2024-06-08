<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\StickController;
use App\Http\Controllers\TarotController;
use Illuminate\Support\Facades\Route;

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
            // if ($locale == 'en' || $locale == 'zh-hans') {
            return view('dcode');
            // }
        }
    });

    Route::get('/{locale}/disclaimer', function (string $locale) {
        App::setLocale($locale);
        return view('common/disclaimer');
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

    Route::get('/{locale}/tarot/masses-reading/{id}', [TarotController::class, 'getReadingLang']);
    Route::get('/{locale}/tarot/masses', [TarotController::class, 'getMassesLang']);

    //十二星座首頁
    Route::get('/{locale}/astrology/zodiac', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/zodiac', []);
    });
    //牡羊
    Route::get('/{locale}/astrology/zodiac/aries', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/astrology/aries', []);
    });
    //金牛
    Route::get('/{locale}/astrology/zodiac/taurus', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/astrology/taurus', []);
    });
    //雙子
    Route::get('/{locale}/astrology/zodiac/gemini', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/astrology/gemini', []);
    });
    //巨蟹
    Route::get('/{locale}/astrology/zodiac/cancer', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/astrology/cancer', []);
    });
    //獅子
    Route::get('/{locale}/astrology/zodiac/leo', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/astrology/leo', []);
    });
    //處女
    Route::get('/{locale}/astrology/zodiac/virgo', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/astrology/virgo', []);
    });
    //天秤
    Route::get('/{locale}/astrology/zodiac/libra', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/astrology/libra', []);
    });
    //天蠍
    Route::get('/{locale}/astrology/zodiac/scorpio', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/astrology/scorpio', []);
    });
    //射手
    Route::get('/{locale}/astrology/zodiac/sagittarius', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/astrology/sagittarius', []);
    });
    //摩羯
    Route::get('/{locale}/astrology/zodiac/capricorn', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/astrology/capricorn', []);
    });
    //水瓶
    Route::get('/{locale}/astrology/zodiac/aquarius', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/astrology/aquarius', []);
    });
    //雙魚
    Route::get('/{locale}/astrology/zodiac/pisces', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/astrology/pisces', []);
    });

    Route::get('/{locale}/astrology/zodiac/date', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/zodiac_date', []);
    });

    Route::get('/{locale}/astrology/zodiac/all_date', function ($locale) {
        App::setLocale($locale);
        return view('constellation/lang/zodiac_all_date', []);
    });

    Route::get('/{locale}/stick', [StickController::class, 'indexLang']);
    Route::get('/{locale}/stick/showall/{id}', [StickController::class, 'showAllLang']);
    Route::get('/{locale}/stick/detail/{id}/{number}', [StickController::class, 'getDetailLang']);

    Route::get('/{locale}/stick/draw/{id}', [StickController::class, 'drawLang']);
    // Route::post('/{locale}/stick/draw/{id}', [StickController::class, 'drawStickLang']);
});
