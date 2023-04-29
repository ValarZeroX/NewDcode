@extends('layouts.main')

@section('title', $title . ' - 籤文')
@section('description', '詩籤占卜是一種傳統文化的占卜方式，常見於廟宇或民間信仰。占卜者先祈求神明庇佑，然後以自己的問題或需求為題，從一堆隨機排列的竹籤中抽出一根，再將籤上的詩句解讀為占卜結果。')

@section('main')
<div class="container">
    <h1>{{$title}} - 籤文</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page"">籤文</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($data as $key => $val)
        <div class="col">
            <div class="card">
                <div class="image-container card-img-top">
                    <img class="cards_image card-img-top" src="/images/stick/{{$stick[$key]['image']}}"}>
                </div>
                <div class="card-header">{{$val}}</div>
                <div class="card-body">
                    {{$remark[$key]}}
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <a href="/stick/draw/{{$key}}" class="btn btn-sm btn-outline-secondary" role="button">抽籤</a>
                        <a href="/stick/showall/{{$key}}" class="btn btn-sm btn-outline-secondary" role="button">籤詩</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection