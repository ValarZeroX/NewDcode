@extends('layouts.lang.main')

@section('title', $title . ' - ' . __('poems.fortune_text'))
@section('description', __('description.stick'))

@section('main')
<div class="container">
    <h1>{{$title}} - {{ __('poems.fortune_text')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page"">{{ __('poems.fortune_text')}}</li>
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
                        <a href="/language/{{ app()->getLocale() }}/stick/draw/{{$key}}" class="btn btn-sm btn-outline-secondary" role="button">{{ __('poems.drawing')}}</a>
                        <a href="/language/{{ app()->getLocale() }}/stick/showall/{{$key}}" class="btn btn-sm btn-outline-secondary" role="button">{{ __('poems.interpreting')}}</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection