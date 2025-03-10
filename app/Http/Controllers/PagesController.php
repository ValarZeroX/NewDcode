<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\File;
class PagesController extends Controller
{
    public function makeSitemap()
    {

        // 定義所有語言版本的對應網址
        $languages = ['de', 'en', 'es', 'fr', 'ja', 'ko', 'zh-hant', 'zh-hans'];

        // 主要 URL 映射
        $baseUrls = [
            'https://dcode.tw/' => [],
            'https://dcode.tw/tarot' => [],
            'https://dcode.tw/astrology/zodiac' => [],
            'https://dcode.tw/astrology/zodiac/date' => [],
        ];

        // 生成各語言對應的網址
        foreach ($baseUrls as $url => &$altUrls) {
            foreach ($languages as $lang) {
                $altUrls[$lang] = "https://dcode.tw/language/{$lang}" . str_replace("https://dcode.tw", "", $url);
            }
        }

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

        //set_time_limit(300);
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
        // 產生 XML 標頭
        $sitemapContent = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemapContent .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" ';
        $sitemapContent .= 'xmlns:xhtml="http://www.w3.org/1999/xhtml">';

        foreach ($baseUrls as $path => $alternates) {
            $url = "https://dcode.tw{$path}";

            // 排除不需要的網址
            if (in_array($path, $excludedPaths)) {
                continue;
            }

            // 建立 `<url>` 標籤
            $sitemapContent .= '<url>';
            $sitemapContent .= '<loc>' . $url . '</loc>';
            $sitemapContent .= '<changefreq>daily</changefreq>';
            $sitemapContent .= '<priority>0.8</priority>';

            // 添加 hreflang
            foreach ($alternates as $lang => $altUrl) {
                $sitemapContent .= '<xhtml:link rel="alternate" hreflang="' . $lang . '" href="' . $altUrl . '" />';
            }

            // x-default 設定為主站
            $sitemapContent .= '<xhtml:link rel="alternate" hreflang="x-default" href="https://dcode.tw/" />';

            $sitemapContent .= '</url>';
        }

        $sitemapContent .= '</urlset>';

        // 將 XML 寫入 sitemap.xml
        File::put(public_path('sitemap.xml'), $sitemapContent);
    }

    public function sitemap()
    {
        return response()->file('sitemap.xml');
    }
}