<?php

use Illuminate\Support\Facades\Route;

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
