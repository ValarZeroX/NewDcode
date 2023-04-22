@extends('layouts.main')

@section('title', 'DCode 塔羅占卜')
@section('description', "塔羅占卜是一種古老的占卜方式，使用由78張牌組成的塔羅牌來進行占卜。透過塔羅牌的象徵意義和排列方式，占卜者可以探索自己的內在和未來的可能性，以及理解周遭事物的意義。塔羅占卜被視為一種心靈探索工具，可幫助人們獲得洞見和指導，進而掌握自己的人生。塔羅占卜是一個非常受歡迎的占卜方式，並且在現代被應用於心理學、精神療法、創意藝術和靈性探索等領域。")

@section('main')

<div class="container">
    <h3>塔羅</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page">塔羅占卜</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        @foreach ($data as $key => $value)
        <div class="col">
            <div class="card shadow-sm">
                <div class="image-container card-img-top">
                    <img class="cards_image card-img-top" src="/images/tarot/{{$image[$key]}}" alt="塔羅">
                </div>
                <div class="card-header text-center">{{$value[0]}}</div>
                <div class="card-body">
                    @foreach ($value[1] as $key => $val)
                    <p>{{ $val }}</p>
                    @endforeach
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/tarot/{{$value[2]}}" class="btn btn-sm btn-outline-secondary" role="button">占卜</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection