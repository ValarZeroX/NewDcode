@extends('layouts.main')

@section('title', $title)
@section('description', "單張牌占卜法 - 提供簡單簡潔的訊息，當需要更明確的答案時，這種類型的占卜會很有幫助。專注於你的問題。選擇一張卡。該卡將回答您的問題。")

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
        <p>單張牌占卜法提供簡單簡潔的訊息，當需要更明確的答案時，這種類型的占卜會很有幫助。專注於你的問題。選擇一張卡。該卡將回答您的問題。</p>
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
                        <img src="/images/deck/{{$data['image_key']}}.jpg" class="figure-img img-fluid showcard"
                            alt="{{$data['name']}}">
                    </div>
                    @if($data['reversed'] == 1)
                    <p><strong>逆位關鍵字 :</strong> @foreach ($data['reversed_keyword'] as $value)<span
                            class="badge rounded-pill bg-warning  text-dark">{{$value }}</span> @endforeach</P>
                    @else
                    <p><strong>正位關鍵字 :</strong> @foreach ($data['upright_keyword'] as $value)<span
                            class="badge rounded-pill bg-info text-dark">{{$value }}</span> @endforeach</P>
                    @endif
                    @if(!empty($data['astrology']))<p><strong>星象 :</strong> {{$data['astrology']}}</p>@endif
                    <p><strong>元素 :</strong> {{$data['element']}}</p>
                    <h3>描述</h3>
                    <p>{!! $data['content'] !!}</p>
                    @if($data['reversed'] == 1)
                    <h3>逆位描述</h3>
                    <p>{!! $data['reversed_content'] !!}</p>
                    <h4>逆位 - 戀愛婚姻</h4>
                    <p>{!! $data['reversed_love'] !!}</p>
                    <h4>逆位 - 工作事業</h4>
                    <p>{!! $data['reversed_career'] !!}</p>
                    <h4>逆位 - 金錢財物</h4>
                    <p>{!! $data['reversed_finances'] !!}</p>
                    @else
                    <h3>正位描述</h3>
                    <p>{!! $data['upright_content'] !!}</p>
                    <h4>正位 - 戀愛婚姻</h4>
                    <p>{!! $data['upright_love'] !!}</p>
                    <h4>正位 - 工作事業</h4>
                    <p>{!! $data['upright_career'] !!}</p>
                    <h4>正位 - 金錢財物</h4>
                    <p> {!! $data['upright_finances'] !!}</p>
                    @endif
                    <hr />
                    <h3>是否</h3>
                    <p>{!! $data['yes_no'] !!}</p>
                    <a class="btn btn-sm btn-outline-secondary" href="/tarot/detail/{{$data['number']}}"
                        role="button">{{$data['name']}}完整說明</a>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-warning info-box" role="alert">
        <p>如果答案不清楚或過於抽象，再抽取一張卡獲取更多訊息。</p>
        <a class="btn  btn-success" href="/tarot/onecard" role="button">再抽一次</a>
    </div>
</div>
<script>
    var maxcard = @json($maxcard);
</script>
@endsection