@extends('layouts.lang.main')

@section('title', __('tarot.free_love_celtic_cross_spread'))
@section('description', __('description.love'))

@section('main')
<div class="container">
    <h1>{{ __('tarot.free_love_celtic_cross_spread')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/tarot">{{ __('tarot.tarot_card_reading')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('tarot.tarot_card_reading')}} - {{ __('tarot.free_love_celtic_cross_spread')}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="alert alert-success" role="alert">
        <p>{{ __('tarot.celtic_cross_spread_0')}}</p>
        <ol>
            @foreach ($sub as $value)
            <li>{{$value}}</li>
            @endforeach
        </ol>
        <p>{{ __('tarot.love_11')}}</p>
    </div>
    <div class="alert alert-info" role="alert">
        <p>{{ __('tarot.love_12')}}</p>
        <p>{{ __('tarot.love_13')}}</p>
        <p>{{ __('tarot.love_14')}}</p>
        <p>{{ __('tarot.love_15')}}</p>
        <p>{{ __('tarot.love_16')}}。</p>
        <p>{{ __('tarot.love_17')}}</p>
        <p>{{ __('tarot.love_18')}}</p>
        <p>{{ __('tarot.love_19')}}</p>
        <p>{{ __('tarot.love_20')}}</p>
        <p>{{ __('tarot.love_21')}}</p>
        <p>{{ __('tarot.example')}} :</p>
        <ul>
            <li>{{ __('tarot.love_22')}}</li>
            <li>{{ __('tarot.love_23')}}</li>
            <li>{{ __('tarot.love_24')}}</li>
            <li>{{ __('tarot.love_25')}}</li>
            <li>{{ __('tarot.love_26')}}</li>
            <li>{{ __('tarot.love_27')}}</li>
            <li>{{ __('tarot.love_28')}}</li>
            <li>{{ __('tarot.love_29')}}</li>
            <li>{{ __('tarot.love_30')}}</li>
            <li>{{ __('tarot.love_31')}}</li>
        </ul>
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
            <img src="/images/deck/{{$data[1]['image_key']}}.jpg" class="figure-img img-fluid card-hide card2  @if($data[1]['reversed'] == 1) reversed @endif" alt="{{$data[1]['name']}}">
            <div class="tarot-number" id="number2">2</div>
        </div>
        <div class="tarot-card">
            <img src="/images/deck/{{$data[2]['image_key']}}.jpg" class="figure-img img-fluid card-hide card3 @if($data[2]['reversed'] == 1) reversed @endif" alt="{{$data[2]['name']}}">
            <div class="tarot-number" id="number3">3</div>
        </div>
        <div class="tarot-card">
            <img src="/images/deck/{{$data[3]['image_key']}}.jpg" class="figure-img img-fluid card-hide card4 @if($data[3]['reversed'] == 1) reversed @endif" alt="{{$data[3]['name']}}">
            <div class="tarot-number" id="number4">4</div>
        </div>
        <div class="tarot-card">
            <img src="/images/deck/{{$data[4]['image_key']}}.jpg" class="figure-img img-fluid card-hide card5 @if($data[4]['reversed'] == 1) reversed @endif" alt="{{$data[4]['name']}}">
            <div class="tarot-number" id="number5">5</div>
        </div>
    </div>
    <div class="d-flex justify-content-center result">
        <div class="tarot-card">
            <img src="/images/deck/{{$data[5]['image_key']}}.jpg" class="figure-img img-fluid card-hide card6 @if($data[5]['reversed'] == 1) reversed @endif" alt="{{$data[5]['name']}}">
            <div class="tarot-number" id="number6">6</div>
        </div>
        <div class="tarot-card">
            <img src="/images/deck/{{$data[6]['image_key']}}.jpg" class="figure-img img-fluid card-hide card7 @if($data[6]['reversed'] == 1) reversed @endif" alt="{{$data[6]['name']}}">
            <div class="tarot-number" id="number7">7</div>
        </div>
        <div class="tarot-card">
            <img src="/images/deck/{{$data[7]['image_key']}}.jpg" class="figure-img img-fluid card-hide card8 @if($data[7]['reversed'] == 1) reversed @endif" alt="{{$data[7]['name']}}">
            <div class="tarot-number" id="number8">8</div>
        </div>
        <div class="tarot-card">
            <img src="/images/deck/{{$data[8]['image_key']}}.jpg" class="figure-img img-fluid card-hide card9 @if($data[8]['reversed'] == 1) reversed @endif" alt="{{$data[8]['name']}}">
            <div class="tarot-number" id="number9">9</div>
        </div>
        <div class="tarot-card">
            <img src="/images/deck/{{$data[9]['image_key']}}.jpg" class="figure-img img-fluid card-hide card10 @if($data[9]['reversed'] == 1) reversed @endif" alt="{{$data[9]['name']}}">
            <div class="tarot-number" id="number10">10</div>
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
                    <p><strong>{{ __('tarot.reversed_keyword')}} :</strong> @foreach ($value['reversed_keyword'] as $val)<span
                            class="badge rounded-pill bg-warning  text-dark">{{$val }}</span> @endforeach</P>
                    @else
                    <p><strong>{{ __('tarot.upright_keyword')}} :</strong> @foreach ($value['upright_keyword'] as $val)<span
                            class="badge rounded-pill bg-info text-dark">{{$val }}</span> @endforeach</P>
                    @endif
                    @if(!empty($value['astrology']))<p><strong>{{ __('tarot.astrology')}} :</strong> {{$value['astrology']}}</p>@endif
                    <p><strong>{{$value['element']}} :</strong> {{$value['element']}}</p>
                    <h2>{{ __('tarot.meaning_1')}}</h2>
                    <p>{!! $value['content'] !!}</p>
                    @if($value['reversed'] == 1)
                    <h2>{{ __('tarot.reversed_meaning')}}</h2>
                    <p>{!! $value['reversed_content'] !!}</p>
                    <h3>{{ __('tarot.reversed_love')}}</h3>
                    <p>{!! $value['reversed_love'] !!}</p>
                    @else
                    <h2>{{ __('tarot.upright_meaning')}}</h2>
                    <p>{!! $value['upright_content'] !!}</p>
                    <h3>{{ __('tarot.upright_love')}}</h3>
                    <p>{!! $value['upright_love'] !!}</p>
                    @endif
                    <a class="btn  btn-info" href="/language/{{ app()->getLocale() }}/tarot/detail/{{$value['number']}}" role="button">{{$value['name']}} {{ __('tarot.complete_explanation')}}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="alert alert-warning" role="alert">
        <p>蝦皮廣告:線上塔羅占卜</p>
        <a class="btn  btn-danger" href="https://s.shopee.tw/7fKCoxFubp" role="button">NT$200~</a>
    </div>
    <div class="alert alert-warning info-box" role="alert">
        <p>{{ __('tarot.more_types_readings')}}</p>
        <a class="btn  btn-success" href="/language/{{ app()->getLocale() }}/tarot" role="button">{{ __('tarot.go_to')}}</a>
    </div>
    <div class="alert alert-warning info-box" role="alert">
        <p>{{ __('tarot.tarot_draw')}}</p>
        <a class="btn  btn-success" href="/language/{{ app()->getLocale() }}/tarot/love" role="button">{{ __('tarot.draw_another_tarot_card')}}</a>
    </div>
</div>
<script>
    var maxcard = @json($maxcard);
</script>
@endsection