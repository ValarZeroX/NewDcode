@extends('layouts.lang.main')

@section('title', $title . ' - ' . __('tarot.tarot_title_1'))
@section('description', __('description.three_cards'))

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
        <p>{{ __('tarot.three_cards')}}</p>
        <p>{{ __('tarot.three_cards_1')}}</p>
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
                    <p><strong>{{ __('tarot.reversed_keyword')}} :</strong> @foreach ($value['reversed_keyword'] as $val)<span class="badge rounded-pill bg-warning  text-dark">{{$val }}</span> @endforeach</P>
                    @else
                    <p><strong>{{ __('tarot.upright_keyword')}} :</strong> @foreach ($value['upright_keyword'] as $val)<span class="badge rounded-pill bg-info text-dark">{{$val }}</span> @endforeach</P>
                    @endif
                    @if(!empty($value['astrology']))<p><strong>{{ __('tarot.astrology')}} :</strong> {{$value['astrology']}}</p>@endif
                    <p><strong>{{ __('tarot.element')}} :</strong> {{$value['element']}}</p>
                    <h2>{{ __('tarot.meaning_1')}}</h2>
                    <p>{!! $value['content'] !!}</p>
                    @if($value['reversed'] == 1)
                    <h2>{{ __('tarot.reversed_meaning')}}</h2>
                    <p>{!! $value['reversed_content'] !!}</p>
                    <h3>{{ __('tarot.reversed_love')}}</h3>
                    <p>{!! $value['reversed_love'] !!}</p>
                    <h3>{{ __('tarot.reversed_career')}}</h3>
                    <p>{!! $value['reversed_career'] !!}</p>
                    <h3>{{ __('tarot.reversed_finances')}}</h3>
                    <p>{!! $value['reversed_finances'] !!}</p>
                    @else
                    <h2>{{ __('tarot.upright_meaning')}}</h2>
                    <p>{!! $value['upright_content'] !!}</p>
                    <h3>{{ __('tarot.upright_love')}}</h3>
                    <p>{!! $value['upright_love'] !!}</p>
                    <h3>{{ __('tarot.upright_career')}}</h3>
                    <p>{!! $value['upright_career'] !!}</p>
                    <h3>{{ __('tarot.upright_finances')}}</h3>
                    <p> {!! $value['upright_finances'] !!}</p>
                    @endif
                    <hr />
                    @if($key == 0)
                    <h2>{{ __('tarot.past')}}</h2>
                    <p>{!! $value['past'] !!}</p>
                    @endif
                    @if($key == 1)
                    <h2>{{ __('tarot.present')}}</h2>
                    <p>{!! $value['present'] !!}</p>
                    @endif
                    @if($key == 2)
                    <h2>{{ __('tarot.future')}}</h2>
                    <p>{!! $value['future'] !!}</p>
                    @endif
                    <a class="btn  btn-info" href="/language/{{ app()->getLocale() }}/tarot/detail/{{$value['number']}}" role="button">{{$value['name']}} {{ __('tarot.complete_explanation')}}</a>
                </div>
                <?php $aID[] = $value['id'];$aReversed[] = $value['reversed'];?>
                @endforeach
                <?php $sID = implode(',',$aID);$sReversed = implode(',',$aReversed);?>
                <div class="alert alert-warning" role="alert">
                    <p>{{ __('tarot.share_your_card')}}</p>
                    <a class="btn  btn-success" href="/language/{{ app()->getLocale() }}/tarot/sharetarot/{{$sID}}/{{$sReversed}}/{{$type}}" role="button">{{ __('tarot.share_card')}}</a>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/shopeeads')
    <div class="alert alert-warning info-box" role="alert">
        <p>{{ __('tarot.more_types_readings')}}</p>
        <a class="btn  btn-success" href="/language/{{ app()->getLocale() }}/tarot" role="button">{{ __('tarot.go_to')}}</a>
    </div>
    <div class="alert alert-warning info-box" role="alert">
        <p>{{ __('tarot.tarot_draw')}}</p>
        <a class="btn  btn-success" href="/language/{{ app()->getLocale() }}/tarot/threecard" role="button">{{ __('tarot.draw_another_tarot_card')}}</a>
    </div>
</div>
<script>
    var maxcard = @json($maxcard);
</script>
@endsection