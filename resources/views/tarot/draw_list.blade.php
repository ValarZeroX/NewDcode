@extends('layouts.main')

@section('title', '塔羅牌占卜 - 各種占卜法，解讀愛情、工作、金錢運勢 - DCode')
@section('description', "免費提供各種塔羅牌占卜，不管是愛情、工作、事業都能獲得解答。塔羅占卜是一種古老的占卜方式，使用由78張牌組成的塔羅牌來進行占卜。透過塔羅牌的象徵意義和排列方式，占卜者可以探索自己的內在和未來的可能性，以及理解周遭事物的意義。塔羅占卜被視為一種心靈探索工具，可幫助人們獲得洞見和指導，進而掌握自己的人生。塔羅占卜是一個非常受歡迎的占卜方式，並且在現代被應用於心理學、精神療法、創意藝術和靈性探索等領域。")

@section('main')

<div class="container">
    <h1>塔羅牌占卜 - 各種占卜法，解讀愛情、工作、金錢運勢</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page">塔羅牌占卜</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <p>塔羅占卜是一種可以揭示未來的藝術，有著悠久的歷史和深厚的文化背景。塔羅牌有78張，每張牌都有獨特的意義和象徵，代表著生命中的各種狀態和選擇。在占卜過程中，占卜者會根據問題和自身的能量狀態，從牌面中得出啟示和解答。</p>
    <p>塔羅占卜可分為許多種類，如愛情占卜、事業占卜、財富占卜、人際關係占卜等等。每種類型都有不同的牌陣和解讀方法，可以幫助人們了解自己的生命狀態和潛在的機會與挑戰。</p>
    <p>在網站上，您可以找到各種塔羅占卜的介紹和解讀，並選擇自己感興趣的牌陣和類型。透過占卜，您可以更好地了解自己，找到內心的平衡和方向，並面對未來的挑戰。</p>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <div class="col">
            <div class="card shadow-sm">
                <div class="image-container card-img-top">
                    <img class="cards_image card-img-top" src="/images/tarot/love_card.jpg" alt="tarot">
                </div>
                <div class="card-header text-center">{{ __('tarot.free_love_celtic_cross_spread')}}</div>
                <div class="card-body">
                    <p>{{ __('tarot.celtic_cross_spread_0')}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/language/zh-hant/tarot/love" class="btn btn-sm btn-outline-secondary" role="button">{{ __('tarot.reading')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($data as $key => $value)
        <div class="col">
            <div class="card shadow-sm">
                <div class="image-container card-img-top">
                    <img class="cards_image card-img-top" src="/images/tarot/{{$image[$key]}}" alt="塔羅">
                </div>
                <div class="card-header text-center">{{$value[0]}}</div>
                <div class="card-body">
                    @foreach ($value[1] as $key => $val)
                    <p>{{ $val }}</p>
                    @endforeach
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/tarot/{{$value[2]}}" class="btn btn-sm btn-outline-secondary" role="button">占卜</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection