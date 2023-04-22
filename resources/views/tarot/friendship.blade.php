@extends('layouts.main')

@section('title', $title)
@section('description', "友誼占卜法需要抽取六張牌，分別代表對方的性格、你們的相處方式、友誼中可能遭遇的困難、你們的友誼前景等等。每張牌都有不同的含義，需要配合問題仔細解讀，從而深入了解你和朋友之間的情感狀態，以及如何改善或加強友誼關係。")

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
    <div class="alert alert-success" role="alert">
        <p>六張卡片提供以下訊息: </p>
        <ol>
            @foreach ($sub as $value)
            <li>{{$value}}。</li>
            @endforeach
        </ol>
        <p>專注於你的問題。選擇六張牌。卡片會回答你的問題。</p>
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
            <img src="/images/deck/{{$data[0]['image_key']}}.jpg" class="figure-img img-fluid card-hide card1 @if($data[0]['reversed'] == 1) reversed @endif" alt="{{$data[0]['name']}}">
            <div class="tarot-number" id="number1">1</div>
        </div>
        <div class="tarot-card">
            <img src="/images/deck/{{$data[1]['image_key']}}.jpg" class="figure-img img-fluid card-hide card2 @if($data[1]['reversed'] == 1) reversed @endif" alt="{{$data[1]['name']}}">
            <div class="tarot-number" id="number2">2</div>
        </div>
        <div class="tarot-card">
            <img src="/images/deck/{{$data[2]['image_key']}}.jpg" class="figure-img img-fluid card-hide card3 @if($data[2]['reversed'] == 1) reversed @endif" alt="{{$data[2]['name']}}">
            <div class="tarot-number" id="number3">3</div>
        </div>
    </div>
    <div class="d-flex justify-content-center result">
        <div class="tarot-card">
            <img src="/images/deck/{{$data[3]['image_key']}}.jpg" class="figure-img img-fluid card-hide card4 @if($data[3]['reversed'] == 1) reversed @endif" alt="{{$data[3]['name']}}">
            <div class="tarot-number" id="number4">4</div>
        </div>
        <div class="tarot-card">
            <img src="/images/deck/{{$data[4]['image_key']}}.jpg" class="figure-img img-fluid card-hide card5 @if($data[4]['reversed'] == 1) reversed @endif" alt="{{$data[4]['name']}}">
            <div class="tarot-number" id="number5">5</div>
        </div>
        <div class="tarot-card">
            <img src="/images/deck/{{$data[5]['image_key']}}.jpg" class="figure-img img-fluid card-hide card6 @if($data[5]['reversed'] == 1) reversed @endif" alt="{{$data[5]['name']}}">
            <div class="tarot-number" id="number6">6</div>
        </div>
    </div>
    <div class="row row-cols-1">
        <div class="col">
            <div class="info-box">
                <hr />
                @foreach ($data as $key => $value)
                <div class="well card">
                    <h2>{{$sub[$key]}} - {{$value['name']}}</h2>
                    <div class="tarot-showcard @if($value['reversed'] == 1) reversed @endif">
                        <img src="/images/deck/{{$value['image_key']}}.jpg" class="figure-img img-fluid showcard" alt="{{$value['name']}}">
                    </div>
                    @if($value['reversed'] == 1)
                    <p><strong>逆位關鍵字 :</strong> @foreach ($value['reversed_keyword'] as $val)<span
                            class="badge rounded-pill bg-warning  text-dark">{{$val }}</span> @endforeach</P>
                    @else
                    <p><strong>正位關鍵字 :</strong> @foreach ($value['upright_keyword'] as $val)<span
                            class="badge rounded-pill bg-info text-dark">{{$val }}</span> @endforeach</P>
                    @endif
                    @if(!empty($value['astrology']))<p><strong>星象 :</strong> {{$value['astrology']}}</p>@endif
                    <p><strong>元素 :</strong> {{$value['element']}}</p>
                    <h3>描述</h3>
                    <p>{!! $value['content'] !!}</p>
                    @if($value['reversed'] == 1)
                    <h3>逆位描述</h3>
                    <p>{!! $value['reversed_content'] !!}</p>
                    <h4>逆位 - 戀愛婚姻</h4>
                    <p>{!! $value['reversed_love'] !!}</p>
                    <h4>逆位 - 工作事業</h4>
                    <p>{!! $value['reversed_career'] !!}</p>
                    <h4>逆位 - 金錢財物</h4>
                    <p>{!! $value['reversed_finances'] !!}</p>
                    @else
                    <h3>正位描述</h3>
                    <p>{!! $value['upright_content'] !!}</p>
                    <h4>正位 - 戀愛婚姻</h4>
                    <p>{!! $value['upright_love'] !!}</p>
                    <h4>正位 - 工作事業</h4>
                    <p>{!! $value['upright_career'] !!}</p>
                    <h4>正位 - 金錢財物</h4>
                    <p> {!! $value['upright_finances'] !!}</p>
                    @endif
                    <a class="btn  btn-info" href="/tarot/detail/{{$value['number']}}" role="button">{{$value['name']}}完整說明</a>
                </div>
                <?php $aID[] = $value['id'];$aReversed[] = $value['reversed'];?>
                @endforeach
                <?php $sID = implode(',',$aID);$sReversed = implode(',',$aReversed);?>
                <div class="alert alert-warning" role="alert">
                    <p>分享牌組讓其他人為你解惑。</p>
                    <a class="btn  btn-success" href="/tarot/sharetarot/{{$sID}}/{{$sReversed}}/{{$type}}" role="button">分享牌組</a>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-warning info-box" role="alert">
        <p>如果答案不清楚或過於抽象，再抽取一張卡獲取更多訊息。</p>
        <a class="btn  btn-success" href="/tarot/friendship" role="button">再抽一次</a>
    </div>
</div>
<script>
    var maxcard = @json($maxcard);
</script>
@endsection