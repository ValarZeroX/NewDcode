@extends('layouts.main')

@section('title', $title)
@section('description', "聖三角占卜法 - 針對問題做出解釋與推測，對於瞭解問題狀況與推估未來發展有很大幫助。")

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
        <p>三張卡片方法提供有關您過去、現在和未來的訊息。</p>
        <p>專注於你的問題。選擇三張牌。卡片會回答你的問題。</p>
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
    <div class="row row-cols-1">
        <div class="col">
            <div class="info-box">
                <hr />
                @foreach ($data as $key => $value)
                <div class="well card">
                    <h2>{{$value['name']}}</h2>
                    <div class="tarot-showcard @if($value['reversed'] == 1) reversed @endif">
                        <img src="/images/deck/{{$value['image_key']}}.jpg" class="figure-img img-fluid showcard" alt="{{$value['name']}}">
                    </div>
                    @if($value['reversed'] == 1)
                    <p><strong>逆位關鍵字 :</strong> @foreach ($value['reversed_keyword'] as $val)<span class="badge rounded-pill bg-warning  text-dark">{{$val }}</span> @endforeach</P>
                    @else
                    <p><strong>正位關鍵字 :</strong> @foreach ($value['upright_keyword'] as $val)<span class="badge rounded-pill bg-info text-dark">{{$val }}</span> @endforeach</P>
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
                    <hr />
                    @if($key == 0)
                    <h3>過去</h3>
                    <p>{!! $value['past'] !!}</p>
                    @endif
                    @if($key == 1)
                    <h3>現在</h3>
                    <p>{!! $value['present'] !!}</p>
                    @endif
                    @if($key == 2)
                    <h3>未來</h3>
                    <p>{!! $value['future'] !!}</p>
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
        <a class="btn  btn-success" href="/tarot/threecard" role="button">再抽一次</a>
    </div>
</div>
<script>
    var maxcard = @json($maxcard);
</script>
@endsection