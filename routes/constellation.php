<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZodiacController;

//十二星座首頁
Route::get('/astrology/zodiac', function () {
    return view('constellation/zodiac', []);
});
//牡羊
Route::get('/astrology/zodiac/aries', function () {
    return view('constellation/astrology/aries', []);
});
//金牛
Route::get('/astrology/zodiac/taurus', function () {
    return view('constellation/astrology/taurus', []);
});
//雙子
Route::get('/astrology/zodiac/gemini', function () {
    return view('constellation/astrology/gemini', []);
});
//巨蟹
Route::get('/astrology/zodiac/cancer', function () {
    return view('constellation/astrology/cancer', []);
});
//獅子
Route::get('/astrology/zodiac/leo', function () {
    return view('constellation/astrology/leo', []);
});
//處女
Route::get('/astrology/zodiac/virgo', function () {
    return view('constellation/astrology/virgo', []);
});
//天秤
Route::get('/astrology/zodiac/libra', function () {
    return view('constellation/astrology/libra', []);
});
//天蠍
Route::get('/astrology/zodiac/scorpio', function () {
    return view('constellation/astrology/scorpio', []);
});
//射手
Route::get('/astrology/zodiac/sagittarius', function () {
    return view('constellation/astrology/sagittarius', []);
});
//摩羯
Route::get('/astrology/zodiac/capricorn', function () {
    return view('constellation/astrology/capricorn', []);
});
//水瓶
Route::get('/astrology/zodiac/aquarius', function () {
    return view('constellation/astrology/aquarius', []);
});
//雙魚
Route::get('/astrology/zodiac/pisces', function () {
    return view('constellation/astrology/pisces', []);
});

Route::get('/astrology/zodiac/date', function () {
    return view('constellation/zodiac_date', []);
});

// Route::get('/astrology/zodiac/date', [ZodiacController::class, 'index']);
// Route::post('/astrology/zodiac/date', [ZodiacController::class, 'drawAstroChart']);