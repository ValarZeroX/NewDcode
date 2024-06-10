@extends('layouts.main')

@section('title', $title.' - '.$data['number_text'].' - 解籤')
@section('description', $description)

@section('main')
<div class="container">
    <h1>{{$title}} - {{ $data['number_text'] }} - 解籤</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/stick">籤文</a></li>
            <li class="breadcrumb-item"><a href="/stick/showall/{{$typeid}}">{{$title}} - 籤詩</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}} - 解籤</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="stick_well card">
        <div class="card-header-custom text-center stick_title"><strong>{{ $data['number_text'] }}</strong></div>
        <div class="card-header-custom text-center stick_title">
            @foreach ($data['subtitle'] as $val)
            <p>{{ $val }}</p>
            @endforeach
        </div>
        <div class="card-body stick_body stick_card">
            @foreach ($data['stick_text'] as $val)
            <p>{{ $val }}</p>
            @endforeach
        </div>
    </div>
    @include('../layouts/topads_two')
    <div class="row row-cols-1">
        @foreach ($data['explanation'] as $sKey => $value)
        <div class="col">
            <div class="card stick_well">
                <div class="card-header-custom text-center stick_title"><strong>{{$sKey}}</strong></div>
                <div class="card-body">
                    <dl class="row">
                        @if ($typeid == 1)
                        @foreach ($value as $val)
                        <dt class="col-sm-3">{{ $val[0] }}</dt>
                        <dd class="col-sm-9">{{ $val[1] }}</dd>
                        @endforeach
                        @else
                        @foreach ($value as $val)
                        <p>{{ $val[0] }}</p>
                        @endforeach
                        @endif
                    </dl>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row row-cols-1">
        <div class="col">
            <div class="alert alert-warning" role="alert">
                <p>{{ __('poems.poem_again')}}</p>
                <a href="/stick/draw/{{$typeid}}" class="btn btn-success" role="button">{{
                    __('poems.drawing')}}</a>
            </div>
        </div>
        <div class="col">
            <div class="alert alert-warning" role="alert">
                <p>{{ __('poems.poem_home')}}</p>
                <a class="btn  btn-success" href="/stick" role="button">{{
                    __('poems.fortune_poem')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection