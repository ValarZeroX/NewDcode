@extends('layouts.lang.main')

@section('title', $title . ' - ' . __('poems.fortune_poem'))
@section('description', $description)

@section('main')
<div class="container">
    <h1>{{$title}} - {{ __('poems.fortune_poem')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/stick">{{ __('poems.fortune_text')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}} - {{ __('poems.fortune_poem')}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-4">
        @foreach ($data as $value)
        <div class="col">
            <div class="card stick_cards">
                <div class="card-header-custom text-center stick_title card-img-top">{{ $value['number_text'] }}</div>
                <div class="card-header-custom text-center stick_title">
                    @foreach ($value['subtitle'] as $val)
                    <p>{{ $val }}</p>
                    @endforeach
                </div>
                <div class="card-body stick_card {{ in_array(app()->getLocale(), ['zh-hant', 'zh-hans']) ? 'stick_body' : '' }}">
                    @foreach ($value['stick_text'] as $val)
                    <p>{{ $val }}</p>
                    @endforeach
                </div>
                <div class="card-footer text-center">
                <a href="/language/{{ app()->getLocale() }}/stick/detail/{{ $typeid }}/{{ $value['number'] }}" class="btn btn-sm btn-outline-secondary" role="button">{{ __('poems.interpreting')}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection