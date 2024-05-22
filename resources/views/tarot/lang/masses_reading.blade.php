@extends('layouts.lang.main')

@section('title', $title)
@section('description', $description)

@section('main')
<div class="container">
    <h1>{{ __('tarot.tarot')}} - {{$title}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/tarot/masses">{{ __('tarot.public_tarot_1')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('tarot.tarot')}} - {{$title}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="alert alert-success" role="alert">
        <p>{{$description}}</p>
    </div>
    <div class="draw">
        <div class="deck">
                @for ($i = 0; $i < count($data); $i++) <div class="masses-card select-cards" id="{{$i}}"></div>
                @endfor
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row row-cols-1">
        <div class="col">
            @for ($i = 0; $i < count($data); $i++)
            <div class="info-box masses_info" id="masses_{{$i}}">
                <hr />
                <div class="well card">
                    <h2>{{$data[$i]['name']}}</h2>
                    <div class="tarot-showcard">
                        <img src="/images/deck/{{$data[$i]['image_key']}}.jpg" class="figure-img img-fluid showcard" alt="{{$data[$i]['name']}}">
                    </div>
                    @foreach ($data[$i]['content'] as $val)
                        <p>{{ $val}}</p>
                    @endforeach
                </div>
            </div>
            @endfor
        </div>
    </div>
    <div class="alert alert-warning" role="alert">
        <p>{{ __('tarot.more_types_readings')}}</p>
        <a class="btn  btn-success" href="/language/{{ app()->getLocale() }}/tarot/masses" role="button">{{ __('tarot.go_to')}}</a>
    </div>
</div>
@endsection