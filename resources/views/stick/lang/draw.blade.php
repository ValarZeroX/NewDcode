@extends('layouts.lang.main')

@section('title', $title . ' - ' . __('poems.drawing'))
@section('description', $description)

@section('main')
<div class="container">
    <h1>{{$title}} - {{ __('poems.drawing')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/stick">{{ __('poems.fortune_text')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}} - {{ __('poems.drawing')}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="card text-center">
        <div class="card-header"><strong>{{ __('poems.poem_message')}}</strong></div>
        <div class="card-body">
            <img src="/images/stick/stick.png" class="figure-img img-fluid" alt={{ __('poems.drawing')}}>
            <br>
            <input type="hidden" id="stick_type_id" name="stick_type_id" value="{{ $data }}">
            <input type="hidden" id="number" name="number" value=1>
            <a href="/language/{{ app()->getLocale() }}/stick/detail/{{ $typeid }}/{{ $number }}" class="btn btn-sm btn-outline-secondary" role="button">{{ __('poems.interpreting')}}</a>
        </div>
    </div>
</div>
@endsection