@extends('layouts.main')

@section('title', $title)
@section('description', "暗戀塔羅牌占卜法 - 您是否在暗戀某人，但不確定下一步應該做什麼？您的暗戀塔羅牌會了解你們之間的能量，並就如何處理今天的互動提供建議。")

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
        <p>選一張卡: </p>
        <ul>
            @foreach ($sub as $value)
            <li>{{$value}}</li>
            @endforeach
        </ul>
    </div>
    <div class="draw">
        <div class="deck">
                @for ($i = 0; $i < 22; $i++) <div class="tarot-cards select-cards" id="tarot-{{$i}}"></div>@endfor
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="d-flex justify-content-center result">
        <div class="tarot-card">
            <img src="/images/deck/{{$data[0]['image_key']}}.jpg" class="figure-img img-fluid card-hide card1"
                alt="{{$data[0]['name']}}">
                <div class="tarot-number" id="number1">1</div>
        </div>
    </div>
    <div class="row row-cols-1">
        <div class="col">
            <div class="info-box">
                <hr />
                @foreach ($data as $key => $value)
                <div class="well card">
                    <h2>{{$value['name']}}</h2>
                    <div class="tarot-showcard">
                        <img src="/images/deck/{{$value['image_key']}}.jpg" class="figure-img img-fluid showcard"
                            alt="{{$value['name']}}">
                    </div>
                    <h3>描述</h3>
                    <p>{!! $value['content'] !!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="alert alert-warning info-box" role="alert">
        <p>如果答案不清楚或過於抽象，再抽取一張卡獲取更多訊息。</p>
        <a class="btn  btn-success" href="/tarot/flirt" role="button">再抽一次</a>
    </div>
</div>
<script>
    var maxcard = @json($maxcard);
</script>
@endsection