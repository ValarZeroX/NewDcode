@extends('layouts.lang.main')

@section('title', __('tarot.tarot_list_title'))
@section('description', __('description.tarot_list'))

@section('main')

<div class="container">
    <h1>{{ __('tarot.tarot_list_title_1')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('tarot.tarot_card_reading')}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <p>{{ __('tarot.tarot_list_1')}}</p>
    <p>{{ __('tarot.tarot_list_2')}}</p>
    <p>{{ __('tarot.tarot_list_3')}}</p>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        @foreach ($data as $key => $value)
        <div class="col">
            <div class="card shadow-sm">
                <div class="image-container card-img-top">
                    <img class="cards_image card-img-top" src="/images/tarot/{{$image[$key]}}" alt="tarot">
                </div>
                <div class="card-header text-center">{{$value[0]}}</div>
                <div class="card-body">
                    @foreach ($value[1] as $key => $val)
                    <p>{{ $val }}</p>
                    @endforeach
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/language/{{ app()->getLocale() }}/tarot/{{$value[2]}}" class="btn btn-sm btn-outline-secondary" role="button">{{ __('tarot.reading')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection