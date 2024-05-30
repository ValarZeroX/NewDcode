<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
class PagesController extends Controller
{
    public function makeSitemap()
    {

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
        $path = public_path('sitemap.xml');
        SitemapGenerator::create(config('app.url'))
            ->hasCrawled(function (Url $url) use ($excludedPaths) {
                // 排除指定的路径
                foreach ($excludedPaths as $excludedPath) {
                    if (strpos($url->url, $excludedPath) !== false) {
                        return;
                    }
                }

                return $url;
            })
            ->writeToFile($path);
    }

    public function sitemap()
    {
        return response()->file('sitemap.xml');
    }
}