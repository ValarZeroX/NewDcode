@extends('layouts.lang.main')
@section('title', __('dcode.disclaimer'))
@section('description', __('dcode.disclaimer_5'))
@section('main')
<div class="container">
    <h1>{{ __('dcode.disclaimer')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{
                __('dcode.disclaimer')}}</li>
        </ol>
    </nav>
    <div>
        <p>{{ __('dcode.disclaimer_1')}}</p>
        <ul>
            <li>{{ __('dcode.disclaimer_2')}}</li>
            <li>{{ __('dcode.disclaimer_3')}}</li>
            <li>{{ __('dcode.disclaimer_4')}}</li>
            <li>{{ __('dcode.disclaimer_5')}}</li>
            <li>skynier2024@gmail.com</li>
        </ul>
    </div>
</div>
@endsection