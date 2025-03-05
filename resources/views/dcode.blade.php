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
            <a href="/language/{{ app()->getLocale() }}/tarot" class="btn btn-sm btn-outline-secondary" role="button">{{
              __('tarot.reading')}}</a>
            <a href="/language/{{ app()->getLocale() }}/tarot/showall" class="btn btn-sm btn-outline-secondary"
              role="button">{{ __('tarot.meanings')}}</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-sm">
        <div class="image-container card-img-top">
          <img class="cards_image card-img-top" src="/images/constellation/taurus_3.jpg">
        </div>
        <div class="card-header text-center">{{ __('tarot.public_tarot_1')}}</div>
        <div class="card-body">
          <p class="card-text">{{ __('description.public_tarot')}}</p>
        </div>
        <div class="card-footer text-center">
          <div class="btn-group">
            <a href="/language/{{ app()->getLocale() }}/tarot/masses" class="btn btn-sm btn-outline-secondary"
              role="button">{{ __('tarot.reading')}}</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-sm">
        <div class="image-container card-img-top">
          <img class="cards_image card-img-top" src="/images/stick/moon_old_man.jpg">
        </div>
        <div class="card-header text-center">{{ __('poems.yue_lao_fortune_poems')}}</div>
        <div class="card-body">
          <p class="card-text">{{ __('poems.yue_lao_description')}}</p>
        </div>
        <div class="card-footer text-center">
          <div class="btn-group">
            <a href="/language/{{ app()->getLocale() }}/stick/draw/2" class="btn btn-sm btn-outline-secondary" role="button">{{ __('poems.drawing')}}</a>
            <a href="/language/{{ app()->getLocale() }}/stick/showall/2" class="btn btn-sm btn-outline-secondary" role="button">{{ __('poems.interpreting')}}</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-sm">
        <div class="image-container card-img-top">
          <img class="cards_image card-img-top" src="/images/stick/guanyin_twenty_eight.jpg">
        </div>
        <div class="card-header text-center">{{ __('poems.poem')}}</div>
        <div class="card-body">
          <p class="card-text">{{ __('poems.poem_description')}}</p>
        </div>
        <div class="card-footer text-center">
          <div class="btn-group">
            <a href="/language/{{ app()->getLocale() }}/stick" class="btn btn-sm btn-outline-secondary" role="button">{{ __('poems.drawing')}}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h2 class="mt-5">{{ __('zodiac.zodiac_series')}}</h2>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
    <div class="col">
      <div class="card shadow-sm">
        <div class="image-container card-img-top">
          <img class="cards_image card-img-top" src="/images/constellation/gemini_2.jpg">
        </div>
        <div class="card-header text-center">{{ __('zodiac.zodiac_2')}}</div>
        <div class="card-body">
          <p class="card-text">{{ __('zodiac.zodiac_13')}}</p>
        </div>
        <div class="card-footer text-center">
          <div class="btn-group">
            <a href="/language/{{ app()->getLocale() }}/astrology/zodiac" class="btn btn-sm btn-outline-secondary"
              role="button">{{ __('tarot.go_to')}}</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-sm">
        <div class="image-container card-img-top">
          <img class="cards_image card-img-top" src="/images/constellation/aquarius_3.jpg">
        </div>
        <div class="card-header text-center">{{ __('zodiac.natal_chart')}}</div>
        <div class="card-body">
          <p class="card-text">{{ __('zodiac.zodiac_date_50')}}</p>
        </div>
        <div class="card-footer text-center">
          <div class="btn-group">
            <a href="/language/{{ app()->getLocale() }}/astrology/zodiac/date" class="btn btn-sm btn-outline-secondary"
              role="button">{{ __('tarot.go_to')}}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('../layouts/lang/zodiac')
</div>
@endsection