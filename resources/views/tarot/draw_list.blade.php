@extends('layouts.main')

@section('title', 'DCode 塔羅占卜')

@section('main')

<div class="container">
    <h3>塔羅</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page">塔羅占卜</li>
        </ol>
    </nav>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        @foreach ($data as $key => $value)
        <div class="col">
            <div class="card shadow-sm">
                <div class="image-container card-img-top">
                    <img class="cards_image card-img-top" src="/images/tarot/{{$image[$key]}}">
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