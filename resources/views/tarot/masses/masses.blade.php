@extends('layouts.main')

@section('title', '大眾塔羅占卜 - 各種占卜法，解讀愛情、工作、金錢運勢 - DCode')
@section('description', "大眾塔羅占卜網站提供各種塔羅牌占卜，包括愛情、財運、事業、健康、未來預測等，幫助人們解答各種疑問與困惑。使用網站占卜非常簡單，只需選擇你感興趣的類型，集中精神思考你的問題，然後點擊抽牌，就可以獲得你的塔羅牌占卜結果了。大眾塔羅占卜網站不僅提供各種占卜結果的解析，還有塔羅牌的詳細介紹和歷史文化背景，讓你更深入了解塔羅牌的奧秘。")

@section('main')

<div class="container">
    <h1>塔羅占卜 - 各種占卜法，解讀愛情、工作、金錢運勢</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page">大眾塔羅占卜</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <h2>大眾塔羅占卜介紹</h2>
    <p>大眾塔羅占卜網站提供各種塔羅牌占卜，包括愛情、財運、事業、健康、未來預測等，幫助人們解答各種疑問與困惑。使用網站占卜非常簡單，只需選擇你感興趣的類型，集中精神思考你的問題，然後點擊抽牌，就可以獲得你的塔羅牌占卜結果了。大眾塔羅占卜網站不僅提供各種占卜結果的解析，還有塔羅牌的詳細介紹和歷史文化背景，讓你更深入了解塔羅牌的奧秘。</p>
    <h3>大眾塔羅占卜法</h3>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        @foreach ($data as $key => $value)
        <div class="col">
            <div class="card shadow-sm">
                <div class="image-container card-img-top">
                    <img class="cards_image card-img-top" src="/images/tarot/{{$value["image_key"]}}" alt="塔羅">
                </div>
                <div class="card-header text-center">{{$value["title"]}}</div>
                <div class="card-body">
                    <p>{{$value["description"]}}</p>
                    <div class="text-center">
                        <div class="btn-group">
                            <a href="/tarot/masses-reading/{{$key}}" class="btn btn-sm btn-outline-secondary" role="button">占卜</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection