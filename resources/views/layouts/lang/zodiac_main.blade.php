<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite(['resources/js/zodiac.js'])
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PJ6MBCZ');
    </script>
    <!-- End Google Tag Manager -->
    <!-- 自動廣告 -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9868429025931364"
        crossorigin="anonymous"></script>
    <!-- End 自動廣告 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description')">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <!-- hreflang 設定 -->
    <link rel="alternate" hreflang="zh-Hant" href="https://dcode.tw/language/zh-hant" />
    <link rel="alternate" hreflang="zh-Hans" href="https://dcode.tw/language/zh-hans" />
    <link rel="alternate" hreflang="en" href="https://dcode.tw/language/en" />
    <link rel="alternate" hreflang="de" href="https://dcode.tw/language/de" />
    <link rel="alternate" hreflang="es" href="https://dcode.tw/language/es" />
    <link rel="alternate" hreflang="fr" href="https://dcode.tw/language/fr" />
    <link rel="alternate" hreflang="jp" href="https://dcode.tw/language/jp" />
    <link rel="alternate" hreflang="ko" href="https://dcode.tw/language/ko" />
    <link rel="alternate" hreflang="x-default" href="https://dcode.tw" />
</head>

body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJ6MBCZ" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-scroll navbar-dcode">
        <div class="container">
            <a class="navbar-brand logo" href="/language/{{ app()->getLocale() }}"><span
                    style="color: #000000;">D</span><span style="color: #5e9693;">Code</span></a>
            <button class="navbar-toggler ps-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="material-icons-outlined">menu</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="/language/{{ app()->getLocale() }}/tarot">{{
                            __('tarot.tarot')}}</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page"
                            href="/language/{{ app()->getLocale() }}/astrology/zodiac">{{ __('zodiac.zodiac_14')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"
                            href="/language/{{ app()->getLocale() }}/astrology/zodiac/date">{{
                            __('zodiac.natal_chart')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/language/{{ app()->getLocale() }}/stick">{{ __('poems.fortune_poem')}}</a>
                    </li>
                </ul>
                <div class="ms-auto mb-2 mb-lg-0">
                    <select class="form-select" id="languageSelect">
                        @foreach(config('app.available_locales') as $locale => $name)
                        <option value="{{$locale}}" {{ app()->getLocale() == $locale ?
                            'selected' : '' }}>
                            {{ $name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <ul class="navbar-nav flex-row">
                    <li class="nav-item">
                        <a class="nav-link px-2" href="#!">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="#!">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2" href="#!">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main id="main">
    @yield('main')
    <div class="container">
        @include('../layouts/footerads')
    </div>
</main>
<footer class="footer mt-auto py-3 bg-light footer-box">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="text-left text-muted">語言</div>
            </div>
        </div>
        <div class="row row-cols-3 row-cols-sm-4 row-cols-md-6 row-cols-lg-12">
            <div class="col">
                <a href="/language/en">English</a>
            </div>
            <div class="col">
                <a href="/language/de">Deutsch</a>
            </div>
            <div class="col">
                <a href="/language/es">Español</a>
            </div>
            <div class="col">
                <a href="/language/ko">한국어</a>
            </div>
            <div class="col">
                <a href="/language/fr">Français</a>
            </div>
            <div class="col">
                <a href="/language/ja">日本語</a>
            </div>
            <div class="col">
                <a href="/">繁體中文</a>
            </div>
            <div class="col">
                <a href="/language/zh-hans">简体中文</a>
            </div>
            <div class="col">
            </div>
            <div class="col">
            </div>
            <div class="col">
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row row-cols-3 text-center">
            <div class="col">
            </div>
            <div class="col">
                <div class="text-muted">Copyright ©2023 - 2024 DCode Inc.</div>
            </div>
            <div class="col">
                <a href="https://banshus.com/" target="_blank">Banshus</a>
                <a href="/language/{{ app()->getLocale() }}/disclaimer">{{ __('dcode.disclaimer')}}</a>
            </div>
        </div>
    </div>
</footer>

</body>

</html>