@extends('layouts.main')

@section('title', $title)
@section('description', $description)

@section('main')
<div class="container">
    <h3>{{$title}} - 抽籤</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/stick">籤文</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}} - 抽籤</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="card text-center">
        <div class="card-header"><strong>心誠則靈，在心中默念您的姓名、出生年月日、住址、求問事項後，點選求籤。</strong></div>
        <div class="card-body">
            <input type="hidden" id="stick_type_id" name="stick_type_id" value="{{ $data }}">
            <input type="hidden" id="number" name="number" value=1>
            <a href="/stick/detail/{{ $typeid }}/{{ $number }}" class="btn btn-sm btn-outline-secondary" role="button">求籤</a>
        </div>
    </div>
</div>
@endsection