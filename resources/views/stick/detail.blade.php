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
        <div class="card-body stick_body">
            @foreach ($data['stick_text'] as $val)
            <p>{{ $val }}</p>
            @endforeach
        </div>
    </div>
    @foreach ($data['explanation'] as $sKey => $value)
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
        </div>
    </div>
    @endforeach
</div>
@endsection