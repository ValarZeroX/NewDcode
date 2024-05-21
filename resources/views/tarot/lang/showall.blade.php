@extends('layouts.lang.main')

@section('title', $title)
@section('description', __('description.tarot_showall'))

@section('main')
<div class="container">
    <h1>{{$title}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item" aria-current="page">{{$title}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    @foreach ($data as $keytype => $tarotarray)
    @if($keytype == 'Major')
    <h2>{{ __('tarot.arcana')}}</h2>
    <div class="alert alert-info" role="alert">
        <p>{{ __('tarot.arcana_1')}}</P>
        <p>{{ __('tarot.arcana_2')}}</P>
    </div>
    @elseif($keytype == 'Wands')
    <br>
    <h2>{{ __('tarot.wands')}}</h2>
    <div class="alert alert-info" role="alert">
        <p>{{ __('tarot.wands_1')}}</P>
    </div>
    @elseif($keytype == 'Pentacles')
    <br>
    @include('../layouts/topads_two')
    <h2>{{ __('tarot.pentacles')}}</h2>
    <div class="alert alert-info" role="alert">
        <p>{{ __('tarot.pentacles_1')}}</p>
    </div>
    @elseif($keytype == 'Cups')
    <br>
    <h2>{{ __('tarot.cups')}}</h2>
    <div class="alert alert-info" role="alert">
        <p>{{ __('tarot.cups_1')}}</P>
    </div>
    @elseif($keytype == 'Swords')
    <br>
    @include('../layouts/topads_three')
    <h2>{{ __('tarot.swords')}}</h2>
    <div class="alert alert-info" role="alert">
        <p>{{ __('tarot.swords_1')}}</p>
    </div>
    @endif
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        @foreach ($tarotarray as $key => $tarot)
        <div class="col text-center">
            <div class="card showall">
                <div class="card-header">
                    <h3 class="lang_h3"><a href="/language/{{ app()->getLocale() }}/tarot/detail/{{$key}}">{{$tarot['name']}}</a></h3>
                </div>
                <div class="card-body">
                    <div class="showalltarot-showcard">
                        <img src="/images/deck/{{$tarot['image_key']}}.jpg" class="figure-img img-fluid showcard"
                            alt="{{$tarot['name']}}">
                    </div>
                </div>
                <div class="card-body">
                    <p><strong>{{ __('tarot.upright_keyword')}} :</strong> @foreach ($tarot['upright_keyword'] as $string)<span
                            class="badge rounded-pill bg-info text-dark">{{$string }}</span> @endforeach</P>
                    <p><strong>{{ __('tarot.reversed_keyword')}} :</strong> @foreach ($tarot['reversed_keyword'] as $string)<span
                            class="badge rounded-pill bg-warning  text-dark">{{$string }}</span> @endforeach
                    </P>
                </div>
                <div class="card-footer">
                    <a href="/language/{{ app()->getLocale() }}/tarot/detail/{{$key}}" class="btn btn-sm btn-outline-secondary" role="button">{{ __('tarot.meanings')}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</div>
@endsection