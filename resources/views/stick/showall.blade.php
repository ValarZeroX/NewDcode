@extends('layouts.main')

@section('title', $title . ' - 籤詩')
@section('description', $description)

@section('main')
<div class="container">
    <h1>{{$title}} - 籤詩</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/stick">籤文</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}} - 籤詩</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-4">
        @foreach ($data as $value)
        <div class="col">
            <div class="card">
                <div class="card-header-custom text-center stick_title card-img-top">{{ $value['number_text'] }}</div>
                <div class="card-header-custom text-center stick_title">
                    @foreach ($value['subtitle'] as $val)
                    <p>{{ $val }}</p>
                    @endforeach
                </div>
                <div class="card-body stick_body stick_card">
                    @foreach ($value['stick_text'] as $val)
                    <p>{{ $val }}</p>
                    @endforeach
                </div>
                <div class="card-footer text-center">
                <a href="/stick/detail/{{ $typeid }}/{{ $value['number'] }}" class="btn btn-sm btn-outline-secondary" role="button">解籤</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection