@extends('layouts.main')

@section('title', $title)
@section('description', '')

@section('main')
<div class="container">
    <h3>{{$title}} - 籤文</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page"">籤文</li>
        </ol>
    </nav>
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