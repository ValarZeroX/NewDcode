@extends('layouts.lang.main')

@section('title', $data['name'] . ' ' . __('tarot.tarot_card_meanings') . ' - ' . __('tarot.tarot_title_1'))
@section('description', $data['name'] . ' - ' . __('tarot.tarot_card_meanings') . ' - ' . Str::limit(strip_tags($data['upright_content']), 150))

@section('main')
<div class="container">
    <h1>{{$data['name']}} {{ __('tarot.tarot_card_meanings')}} - {{ __('tarot.tarot_title_1')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/tarot/showall">{{ __('tarot.tarot_card_meanings')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$data['name']}} {{ __('tarot.tarot_card_meanings')}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="row row-cols-1 custom-container">
        <div class="col-md-4">
            <div id="toc">
                <h3>{{ __('dcode.table_of_contents')}}</h3>
                <ul></ul>
            </div>
        </div>
        <div class="col">
            <div>
                <div class="well card">
                    <div class="card-header">
                        <h2>{{$data['name']}}</h2>
                    </div>
                    <div class="card-body">
                        <div class="tarot-showcard">
                            <img src="/images/deck/{{$data['image_key']}}.jpg" class="figure-img img-fluid showcard"
                            alt="{{$data['name']}} - {{ __('tarot.tarot_card_meanings') }}" title="{{$data['name']}} - {{ __('tarot.tarot_card_meanings') }}" width="160" height="280">
                        </div>
                        <p><strong>{{ __('tarot.upright_keyword')}} :</strong> @foreach ($data['upright_keyword'] as $value)<span
                                class="badge rounded-pill bg-info text-dark">{{$value }}</span> @endforeach</P>
                        <p><strong>{{ __('tarot.reversed_keyword')}} :</strong> @foreach ($data['reversed_keyword'] as $value)<span
                                class="badge rounded-pill bg-warning  text-dark">{{$value }}</span> @endforeach</P>
                        @if(!empty($data['astrology']))<p><strong>{{ __('tarot.astrology')}} :</strong> {{$data['astrology']}}</p>@endif
                        <p><strong>{{ __('tarot.element')}} :</strong> {{$data['element']}}</p>
                        <h2>{{ __('tarot.meaning_1')}}</h2>
                        <p>{!! $data['content'] !!}</p>
                        <h2>{{ __('tarot.upright_meaning')}}</h2>
                        <p>{!! $data['upright_content'] !!}</p>
                        <h3>{{ __('tarot.upright_love')}}</h3>
                        <p>{!! $data['upright_love'] !!}</p>
                        <h3>{{ __('tarot.upright_career')}}</h3>
                        <p>{!! $data['upright_career'] !!}</p>
                        <h3>{{ __('tarot.upright_finances')}}</h3>
                        <p> {!! $data['upright_finances'] !!}</p>
                        <hr />
                        <h2>{{ __('tarot.reversed_meaning')}}</h2>
                        <p>{!! $data['reversed_content'] !!}</p>
                        <h3>{{ __('tarot.reversed_love')}}</h3>
                        <p>{!! $data['reversed_love'] !!}</p>
                        <h3>{{ __('tarot.reversed_career')}}</h3>
                        <p>{!! $data['reversed_career'] !!}</p>
                        <h3>{{ __('tarot.reversed_finances')}}</h3>
                        <p>{!! $data['reversed_finances'] !!}</p>
                        <hr />
                        <h2>{{ __('tarot.yes_no')}}</h2>
                        <p>{!! $data['yes_no'] !!}</p>
                        <hr />
                        <h2>{{ __('tarot.past')}}</h2>
                        <p>{!! $data['past'] !!}</p>
                        <h2>{{ __('tarot.present')}}</h2>
                        <p>{!! $data['present'] !!}</p>
                        <h2>{{ __('tarot.future')}}</h2>
                        <p>{!! $data['future'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-warning" role="alert">
        <p>蝦皮:塔羅入門套組+萊德偉特塔羅牌</p>
        <a class="btn  btn-danger" href="https://s.shopee.tw/7KhM6zUWtH" role="button">NT$838</a>
    </div>
    <div class="alert alert-warning" role="alert">
        <p>蝦皮:正版 普及版偉特塔羅牌 Universal Waite® TAROT(中文) 歐洲製</p>
        <a class="btn  btn-danger" href="https://s.shopee.tw/6AVOj38GrQ" role="button">NT$535</a>
    </div>
    <div class="alert alert-warning" role="alert">
        <p>蝦皮:多款可選 偉特 神諭卡 塔羅 占卜 英文卡牌 算命 塔羅牌 偉特牌 偉特塔羅牌 Waite Tarot 卡牌</p>
        <a class="btn  btn-danger" href="https://s.shopee.tw/AUeNtDV3tG" role="button">NT$150</a>
    </div>
    <div class="alert alert-info" role="alert">
        <p>{{ __('tarot.view_all')}}</p>
        <a class="btn  btn-success" href="/language/{{ app()->getLocale() }}/tarot/showall" role="button">{{ __('tarot.go_to_tarot_readings')}}</a>
    </div>
    <div class="alert alert-info" role="alert">
        <p>{{ __('tarot.more_types_readings')}}</p>
        <a class="btn  btn-success" href="/language/{{ app()->getLocale() }}/tarot" role="button">{{ __('tarot.go_to')}}</a>
    </div>
</div>
@endsection