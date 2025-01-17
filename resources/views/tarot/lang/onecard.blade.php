@extends('layouts.lang.main')

@section('title', $title. ' - ' . __('tarot.tarot_list_title'))
@section('description', __('description.tarot_one'))

@section('main')
<div class="container">
    <h1>{{ __('dcode.tarot_reading')}} - {{$title}} - {{ __('tarot.tarot_title_1')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/tarot">{{ __('tarot.tarot_card_reading')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('tarot.tarot_card_reading')}} - {{$title}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="alert alert-success" role="alert">
        <p>{{ __('tarot.tarot_one')}}</p>
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
                    <p><strong>{{ __('tarot.reversed_keyword')}} :</strong> @foreach ($data['reversed_keyword'] as $value)<span
                            class="badge rounded-pill bg-warning  text-dark">{{$value }}</span> @endforeach</P>
                    @else
                    <p><strong>{{ __('tarot.upright_keyword')}}  :</strong> @foreach ($data['upright_keyword'] as $value)<span
                            class="badge rounded-pill bg-info text-dark">{{$value }}</span> @endforeach</P>
                    @endif
                    @if(!empty($data['astrology']))<p><strong>{{ __('tarot.astrology')}} :</strong> {{$data['astrology']}}</p>@endif
                    <p><strong>{{ __('tarot.element')}} :</strong> {{$data['element']}}</p>
                    <h2>{{ __('tarot.meaning_1')}}</h2>
                    <p>{!! $data['content'] !!}</p>
                    @if($data['reversed'] == 1)
                    <h2>{{ __('tarot.reversed_meaning')}}</h2>
                    <p>{!! $data['reversed_content'] !!}</p>
                    <h3>{{ __('tarot.reversed_love')}}</h3>
                    <p>{!! $data['reversed_love'] !!}</p>
                    <h3>{{ __('tarot.reversed_career')}}</h3>
                    <p>{!! $data['reversed_career'] !!}</p>
                    <h3>{{ __('tarot.reversed_finances')}}</h3>
                    <p>{!! $data['reversed_finances'] !!}</p>
                    @else
                    <h2>{{ __('tarot.upright_meaning')}}</h2>
                    <p>{!! $data['upright_content'] !!}</p>
                    <h3>{{ __('tarot.upright_love')}}</h3>
                    <p>{!! $data['upright_love'] !!}</p>
                    <h3>{{ __('tarot.upright_career')}}</h3>
                    <p>{!! $data['upright_career'] !!}</p>
                    <h3>{{ __('tarot.upright_finances')}}</h3>
                    <p> {!! $data['upright_finances'] !!}</p>
                    @endif
                    <hr />
                    <h2>{{ __('tarot.yes_no')}}</h2>
                    <p>{!! $data['yes_no'] !!}</p>
                    <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/tarot/detail/{{$data['number']}}"
                        role="button">{{$data['name']}} {{ __('tarot.complete_explanation')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-warning" role="alert">
        <p>蝦皮廣告:塔羅入門套組+萊德偉特塔羅牌</p>
        <a class="btn  btn-danger" href="https://s.shopee.tw/7KhM6zUWtH" role="button">NT$838</a>
    </div>
    <div class="alert alert-warning" role="alert">
        <p>蝦皮廣告:正版 普及版偉特塔羅牌 Universal Waite® TAROT(中文) 歐洲製</p>
        <a class="btn  btn-danger" href="https://s.shopee.tw/6AVOj38GrQ" role="button">NT$535</a>
    </div>
    <div class="alert alert-warning" role="alert">
        <p>蝦皮廣告:多款可選 偉特 神諭卡 塔羅 占卜 英文卡牌 算命 塔羅牌 偉特牌 偉特塔羅牌 Waite Tarot 卡牌</p>
        <a class="btn  btn-danger" href="https://s.shopee.tw/AUeNtDV3tG" role="button">NT$150</a>
    </div>
    <div class="alert alert-warning info-box" role="alert">
        <p>{{ __('tarot.more_types_readings')}}</p>
        <a class="btn  btn-success" href="/language/{{ app()->getLocale() }}/tarot" role="button">{{ __('tarot.go_to')}}</a>
    </div>
    <div class="alert alert-warning info-box" role="alert">
        <p>{{ __('tarot.tarot_draw')}}</p>
        <a class="btn  btn-success" href="/language/{{ app()->getLocale() }}/tarot/onecard" role="button">{{ __('tarot.draw_another_tarot_card')}}</a>
    </div>
</div>
<script>
    var maxcard = @json($maxcard);
</script>
@endsection