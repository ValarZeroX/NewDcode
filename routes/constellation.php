<?php

use Illuminate\Support\Facades\Route;

//十二星座首頁
Route::get('/astrology/zodiac', function () {
    return view('constellation/zodiac', []);
});
Route::get('/astrology/zodiac/aries', function () {
    return view('constellation/astrology/aries', []);
});

Route::get('/astrology/zodiac/taurus', function () {
    return view('constellation/astrology/taurus', []);
});

