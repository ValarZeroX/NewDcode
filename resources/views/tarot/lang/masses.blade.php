@extends('layouts.lang.main')

@section('title', __('tarot.public_tarot_3'))
@section('description', __('description.public_tarot'))

@section('main')

<div class="container">
    <h1>{{ __('tarot.tarot_list_title_1')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('tarot.public_tarot_1')}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <h2>{{ __('tarot.public_tarot_2')}}</h2>
    <p>{{ __('description.public_tarot')}}</p>
    <h3>{{ __('tarot.public_tarot_1')}}</h3>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        @foreach ($data as $key => $value)
        <div class="col">
            <div class="card shadow-sm">
                <div class="image-container card-img-top">
                    <img class="cards_image card-img-top" src="/images/tarot/{{$value["image_key"]}}" alt="塔羅">
                </div>
                <div class="card-header text-center">{{$value["title"]}}</div>
                <div class="card-body">
                    <p>{{$value["description"]}}</p>
                    <div class="text-center">
                        <div class="btn-group">
                            <a href="/language/{{ app()->getLocale() }}/tarot/masses-reading/{{$key}}" class="btn btn-sm btn-outline-secondary" role="button">{{ __('tarot.reading')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection