<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
class PagesController extends Controller
{
    public function makeSitemap()
    {
        $sitemapPath = public_path('sitemap.xml');
        // 定義所有語言版本的對應網址
        $languages = ['de', 'en', 'es', 'fr', 'ja', 'ko', 'zh-hant', 'zh-hans'];


        // 要排除的路径
        $excludedPaths = [
            '/tarot/sharetarot/',
            '/language/en/tarot/sharetarot/',
            '/language/es/tarot/sharetarot/',
            '/language/fr/tarot/sharetarot/',
            '/language/ja/tarot/sharetarot/',
            '/language/zh-hant/tarot/sharetarot/',
            '/language/zh-hants/tarot/sharetarot/',
        ];
        // dd(config('app.url'));
        // set_time_limit(600);
        SitemapGenerator::create(config('app.url'))
        ->hasCrawled(function (Url $url) use ($languages, $excludedPaths) {
            $baseUrl = rtrim($url->url, '/'); // 確保 URL 沒有多餘的 `/`

            // **檢查是否在排除清單內**
            foreach ($excludedPaths as $excludedPath) {
                if (strpos($baseUrl, $excludedPath) !== false) {
                    return null; // **跳過此 URL**
                }
            }

            $newUrl = Url::create($baseUrl)
                ->setChangeFrequency('daily')
                ->setPriority(0.8);

            // 添加 hreflang 版本
            foreach ($languages as $lang) {
                $alternateUrl = str_replace(config('app.url'), config('app.url') . "/language/{$lang}", $baseUrl);
                $newUrl->addAlternate($alternateUrl, $lang);
            }

            // 設定 x-default
            $newUrl->addAlternate(config('app.url'), 'x-default');

            return $newUrl;
        })
        ->writeToFile($sitemapPath);
        // $path = public_path('sitemap.xml');
        // SitemapGenerator::create(config('app.url'))
        //     ->hasCrawled(function (Url $url) use ($excludedPaths) {
        //         // 排除指定的路径
        //         foreach ($excludedPaths as $excludedPath) {
        //             if (strpos($url->url, $excludedPath) !== false) {
        //                 return;
        //             }
        //         }

        //         return $url;
        //     })
        //     ->writeToFile($path);
    }

    public function sitemap()
    {
        return response()->file('sitemap.xml');
    }
}