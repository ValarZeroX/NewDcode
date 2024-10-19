<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZodiacController;

// 301 重定向舊路徑至新多語系路徑
Route::redirect('/astrology/zodiac', '/language/zh-hant/astrology/zodiac', 301);
Route::redirect('/astrology/zodiac/aries', '/language/zh-hant/astrology/zodiac/aries', 301);
Route::redirect('/astrology/zodiac/taurus', '/language/zh-hant/astrology/zodiac/taurus', 301);
Route::redirect('/astrology/zodiac/gemini', '/language/zh-hant/astrology/zodiac/gemini', 301);
Route::redirect('/astrology/zodiac/cancer', '/language/zh-hant/astrology/zodiac/cancer', 301);
Route::redirect('/astrology/zodiac/leo', '/language/zh-hant/astrology/zodiac/leo', 301);
Route::redirect('/astrology/zodiac/virgo', '/language/zh-hant/astrology/zodiac/virgo', 301);
Route::redirect('/astrology/zodiac/libra', '/language/zh-hant/astrology/zodiac/libra', 301);
Route::redirect('/astrology/zodiac/scorpio', '/language/zh-hant/astrology/zodiac/scorpio', 301);
Route::redirect('/astrology/zodiac/sagittarius', '/language/zh-hant/astrology/zodiac/sagittarius', 301);
Route::redirect('/astrology/zodiac/capricorn', '/language/zh-hant/astrology/zodiac/capricorn', 301);
Route::redirect('/astrology/zodiac/aquarius', '/language/zh-hant/astrology/zodiac/aquarius', 301);
Route::redirect('/astrology/zodiac/pisces', '/language/zh-hant/astrology/zodiac/pisces', 301);
Route::redirect('/astrology/zodiac/date', '/language/zh-hant/astrology/zodiac/date', 301);


// //十二星座首頁
// Route::get('/astrology/zodiac', function () {
//     return view('constellation/zodiac', []);
// });
// //牡羊
// Route::get('/astrology/zodiac/aries', function () {
//     return view('constellation/astrology/aries', []);
// });
// //金牛
// Route::get('/astrology/zodiac/taurus', function () {
//     return view('constellation/astrology/taurus', []);
// });
// //雙子
// Route::get('/astrology/zodiac/gemini', function () {
//     return view('constellation/astrology/gemini', []);
// });
// //巨蟹
// Route::get('/astrology/zodiac/cancer', function () {
//     return view('constellation/astrology/cancer', []);
// });
// //獅子
// Route::get('/astrology/zodiac/leo', function () {
//     return view('constellation/astrology/leo', []);
// });
// //處女
// Route::get('/astrology/zodiac/virgo', function () {
//     return view('constellation/astrology/virgo', []);
// });
// //天秤
// Route::get('/astrology/zodiac/libra', function () {
//     return view('constellation/astrology/libra', []);
// });
// //天蠍
// Route::get('/astrology/zodiac/scorpio', function () {
//     return view('constellation/astrology/scorpio', []);
// });
// //射手
// Route::get('/astrology/zodiac/sagittarius', function () {
//     return view('constellation/astrology/sagittarius', []);
// });
// //摩羯
// Route::get('/astrology/zodiac/capricorn', function () {
//     return view('constellation/astrology/capricorn', []);
// });
// //水瓶
// Route::get('/astrology/zodiac/aquarius', function () {
//     return view('constellation/astrology/aquarius', []);
// });
// //雙魚
// Route::get('/astrology/zodiac/pisces', function () {
//     return view('constellation/astrology/pisces', []);
// });

// Route::get('/astrology/zodiac/date', function () {
//     App::setLocale('zh-hant');
//     return view('constellation/zodiac_date', []);
// });

// Route::get('/astrology/zodiac/date', [ZodiacController::class, 'index']);
// Route::post('/astrology/zodiac/date', [ZodiacController::class, 'drawAstroChart']);