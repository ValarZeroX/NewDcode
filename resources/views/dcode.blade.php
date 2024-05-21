@extends('layouts.lang.main')

@section('title', __('dcode.dcode'))
@section('description', __('description.dcode'))

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dcode</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <h1>{{ __('dcode.tarot_reading')}}</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <div class="col">
            <div class="card shadow-sm">
                <div class="image-container card-img-top">
                    <img class="cards_image card-img-top" src="/images/tarot/tarot_background.jpg">
                </div>
                <div class="card-header text-center">{{ __('dcode.tarot_reading')}}</div>
                <div class="card-body">
                    <p class="card-text">
                        {{ __('tarot.tarot_1')}}
                    </p>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group">
                        <a href="/language/{{ app()->getLocale() }}/tarot" class="btn btn-sm btn-outline-secondary" role="button">{{ __('tarot.reading')}}</a>
                        <a href="/language/{{ app()->getLocale() }}/tarot/showall" class="btn btn-sm btn-outline-secondary" role="button">{{ __('tarot.meanings')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection