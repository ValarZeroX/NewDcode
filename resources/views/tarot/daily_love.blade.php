@extends('layouts.main')

@section('title', $title. ' - 愛情運勢解讀')
@section('description', "每日愛情塔羅占卜提供每天不同的塔羅牌占卜結果，讓你更了解當下愛情狀態和未來趨勢。塔羅牌作為一種占卜工具，能夠深入探討人的內心世界和情感狀態，幫助人們了解自己和愛情之間的關係，並提供一些啟示和建議。每個牌面都有獨特的意義和象徵，例如愚人代表新的開始和冒險，女祭司代表靈性和直覺，皇后代表愛與關懷，皇帝代表權威和統治力量等等。透過每日愛情塔羅占卜，你可以更深入地了解自己和另一半之間的關係，獲得更多啟示和建議。")

@section('main')
<div class="container">
    <h1>塔羅 - {{$title}} - 愛情運勢解讀</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/tarot">塔羅占卜</a></li>
            <li class="breadcrumb-item active" aria-current="page">塔羅 - {{$title}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="alert alert-success" role="alert">
        <p>每日愛情塔羅占卜提供每天不同的塔羅牌占卜結果，讓你更了解當下愛情狀態和未來趨勢。塔羅牌作為一種占卜工具，能夠深入探討人的內心世界和情感狀態，幫助人們了解自己和愛情之間的關係，並提供一些啟示和建議。每個牌面都有獨特的意義和象徵，例如愚人代表新的開始和冒險，女祭司代表靈性和直覺，皇后代表愛與關懷，皇帝代表權威和統治力量等等。透過每日愛情塔羅占卜，你可以更深入地了解自己和另一半之間的關係，獲得更多啟示和建議。</p>
    </div>
    <div class="draw">
        <div class="deck">
                @for ($i = 0; $i < 22; $i++) <div class="tarot-cards select-cards" id="tarot-{{$i}}"></div>@endfor
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="d-flex justify-content-center result">
        <div class="tarot-card">
            <img src="/images/deck/{{$data['image_key']}}.jpg" class="figure-img img-fluid card-hide card1" alt="{{$data['name']}}">
            <div class="tarot-number" id="number1">1</div>
        </div>
    </div>
    <div class="row row-cols-1">
        <div class="col">
            <div class="info-box">
                <hr />
                <div class="well card">
                    <h2>{{$data['name']}}</h2>
                    <div class="tarot-showcard">
                        <img src="/images/deck/{{$data['image_key']}}.jpg" class="figure-img img-fluid showcard" alt="{{$data['name']}}">
                    </div>
                    <p>{!! $data['content'] !!}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-warning info-box" role="alert">
        <p>如果答案不清楚或過於抽象，再抽取一張卡獲取更多訊息。</p>
        <a class="btn  btn-success" href="/tarot/daily/love" role="button">再抽一次</a>
    </div>
    <div class="alert alert-warning info-box" role="alert">
        <p>更多種塔羅牌占卜。</p>
        <a class="btn  btn-success" href="/tarot" role="button">前往</a>
    </div>
</div>
<script>
    var maxcard = @json($maxcard);
</script>
@endsection