@extends('layouts.main')

@section('title', $title)
@section('description', "每日塔羅占卜是一種靈性指南，幫助你在每天開始前思考當下的問題、情況和挑戰。每張牌都有不同的意義，而透過塔羅師的解讀，你可以探索自己的內心深處，並得到指引和啟示。每日塔羅占卜可以幫助你更清楚地看待自己的處境，發現自己的優勢和挑戰，提供靈感和建議，並為你未來的決策提供支持。通過每日塔羅占卜，你可以更好地理解自己和世界，並成為更強大、更有智慧和洞見的人。")

@section('main')
<div class="container">
    <h3>塔羅 - {{$title}}</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/tarot">塔羅占卜</a></li>
            <li class="breadcrumb-item active" aria-current="page">塔羅 - {{$title}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="alert alert-success" role="alert">
        <p>每日塔羅占卜是一種靈性指南，幫助你在每天開始前思考當下的問題、情況和挑戰。每張牌都有不同的意義，而透過塔羅師的解讀，你可以探索自己的內心深處，並得到指引和啟示。每日塔羅占卜可以幫助你更清楚地看待自己的處境，發現自己的優勢和挑戰，提供靈感和建議，並為你未來的決策提供支持。通過每日塔羅占卜，你可以更好地理解自己和世界，並成為更強大、更有智慧和洞見的人。</p>
    </div>
    <div class="draw">
        <div class="deck">
                @for ($i = 0; $i < 18; $i++) <div class="tarot-cards select-cards" id="tarot-{{$i}}"></div>@endfor
        </div>
        <div class="deck level2">
            @for ($i = 0; $i < 18; $i++) <div class="tarot-cards select-cards" id="tarot-{{$i+18}}"></div>@endfor
        </div>
        <div class="deck level3">
            @for ($i = 0; $i < 18; $i++) <div class="tarot-cards select-cards" id="tarot-{{$i+36}}"></div>@endfor
        </div>
        <div class="deck level4">
            @for ($i = 0; $i < 18; $i++) <div class="tarot-cards select-cards" id="tarot-{{$i+54}}"></div>@endfor
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="d-flex justify-content-center result">
        <div class="tarot-card">
            <img src="/images/deck/{{$data['image_key']}}.jpg" class="figure-img img-fluid card-hide card1 @if($data['reversed'] == 1) reversed @endif" alt="{{$data['name']}}">
            <div class="tarot-number" id="number1">1</div>
        </div>
    </div>
    <div class="row row-cols-1">
        <div class="col">
            <div class="info-box">
                <hr />
                <div class="well card">
                    <h2>{{$data['name']}}</h2>
                    <div class="tarot-showcard @if($data['reversed'] == 1) reversed @endif">
                        <img src="/images/deck/{{$data['image_key']}}.jpg" class="figure-img img-fluid showcard" alt="{{$data['name']}}">
                    </div>
                    @if($data['reversed'] == 1)
                    <p>{!! $data['reversed_content'] !!}</p>
                    @else
                    <p>{!! $data['upright_content'] !!}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var maxcard = @json($maxcard);
</script>
@endsection