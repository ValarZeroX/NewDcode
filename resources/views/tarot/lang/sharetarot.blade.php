@extends('layouts.lang.main')

@section('title', $title)
@section('description', $data[0]['content'])

@section('main')
<div class="container">
    <h1>{{ __('dcode.tarot_reading')}} - {{$title}}({{$info[0]}})</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/tarot">{{ __('dcode.tarot_reading')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('dcode.tarot_reading')}} - {{$title}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="d-flex justify-content-center result">
        @foreach ($data as $key => $value)
        <div class="tarot-card @if($value['reversed'] == 1) reversed @endif">
            <img src="/images/deck/{{$value['image_key']}}.jpg" class="figure-img img-fluid card1"
                alt="{{$value['name']}}">
        </div>
            @if($key == 3)
                </div>
                <div class="d-flex justify-content-center result">
            @endif
        @endforeach
    </div>
    <hr />
    <div>
        @foreach ($data as $key => $value)
            <div class="well card">
                <h2>{{$value['name']}}</h2>
                <div class="tarot-showcard @if($value['reversed'] == 1) reversed @endif">
                    <img src="/images/deck/{{$value['image_key']}}.jpg" class="figure-img img-fluid showcard"
                        alt="{{$value['name']}}">
                </div>
                <h2>{{ __('tarot.meaning_1')}}</h2>
                <p>{!! $value['content'] !!}</p>
                <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/tarot/detail/{{$value['number']}}"
                    role="button">{{$value['name']}} {{ __('tarot.complete_explanation')}}</a>
            </div>
        @endforeach
    </div>
</div>
@endsection