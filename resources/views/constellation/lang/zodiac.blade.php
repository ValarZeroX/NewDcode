@extends('layouts.lang.main')

@section('title', __('zodiac.zodiac_1'))
@section('description', __('description.zodiac'))

@section('main')
<div class="container">
    <h1>{{ __('zodiac.zodiac_1')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('zodiac.zodiac_1')}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="row row-cols-12 row-cols-md-12 g-12">
        <div class="col">
            <h2>{{ __('zodiac.zodiac_2')}}</h2>
            <div class="alert alert-success" role="alert">
                <p>{{ __('zodiac.zodiac_3')}}</p>
                <p>{{ __('zodiac.zodiac_4')}}</p>
           </div>
        </div>
    </div>
    <div class="row row-cols-12 row-cols-md-12 g-12">
        <div class="col">
            <h2>{{ __('zodiac.zodiac_5')}}</h2>
            <div class="alert alert-info" role="alert">
                 <p>{{ __('zodiac.zodiac_6')}}</p>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>{{ __('zodiac.aries')}}</h2><small class="text-muted mx-2"> 3/21 ~ 4/19</small>
                </div>
                <div class="caard-header">
                    <div id="aries" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>{{ __('zodiac.aries_1')}}</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/astrology/zodiac/aries" role="button">{{ __('zodiac.view_details')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>{{ __('zodiac.leo')}}</h2><small class="text-muted mx-2"> 7/23 ~ 8/22</small>
                </div>
                <div class="caard-header">
                    <div id="leo" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>{{ __('zodiac.leo_1')}}</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/astrology/zodiac/leo" role="button">{{ __('zodiac.view_details')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>{{ __('zodiac.sagittarius')}}</h2><small class="text-muted mx-2"> 11/22 ~ 12/21</small>
                </div>
                <div class="caard-header">
                    <div id="sagittarius" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>{{ __('zodiac.sagittarius_1')}}</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/astrology/zodiac/sagittarius" role="button">{{ __('zodiac.view_details')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-12 row-cols-md-12 g-12">
        <div class="col">
            <h2>{{ __('zodiac.zodiac_7')}}</h2>
            <div class="alert alert-info" role="alert">
                 <p>{{ __('zodiac.zodiac_8')}}</p>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>{{ __('zodiac.taurus')}}</h2><small class="text-muted mx-2"> 4/20 ~ 5/20</small>
                </div>
                <div class="caard-header">
                    <div id="taurus" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>{{ __('zodiac.taurus_1')}}</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/astrology/zodiac/taurus" role="button">{{ __('zodiac.view_details')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>{{ __('zodiac.virgo')}}</h2><small class="text-muted mx-2"> 8/23 ~ 9/22</small>
                </div>
                <div class="caard-header">
                    <div id="virgo" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>{{ __('zodiac.virgo_1')}}</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/astrology/zodiac/virgo" role="button">{{ __('zodiac.view_details')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>{{ __('zodiac.capricorn')}}</h2><small class="text-muted mx-2"> 12/22 ~ 1/19</small>
                </div>
                <div class="caard-header">
                    <div id="capricorn" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>{{ __('zodiac.capricorn_1')}}</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/astrology/zodiac/capricorn" role="button">{{ __('zodiac.view_details')}}</a>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/topads_two')
    <div class="row row-cols-12 row-cols-md-12 g-12">
        <div class="col">
            <h2>{{ __('zodiac.zodiac_9')}}</h2>
            <div class="alert alert-info" role="alert">
                 <p>{{ __('zodiac.zodiac_10')}}</p>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>{{ __('zodiac.gemini')}}</h2><small class="text-muted mx-2"> 5/21 ~ 6/20</small>
                </div>
                <div class="caard-header">
                    <div id="gemini" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>{{ __('zodiac.gemini_1')}}</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/astrology/zodiac/gemini" role="button">{{ __('zodiac.view_details')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>{{ __('zodiac.libra')}}</h2><small class="text-muted mx-2"> 9/23 ~ 10/22</small>
                </div>
                <div class="caard-header">
                    <div id="libra" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>{{ __('zodiac.libra_1')}}</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/astrology/zodiac/libra" role="button">{{ __('zodiac.view_details')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>{{ __('zodiac.aquarius')}}</h2><small class="text-muted mx-2"> 1/20 ~ 2/18</small>
                </div>
                <div class="caard-header">
                    <div id="aquarius" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>{{ __('zodiac.aquarius_1')}}</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/astrology/zodiac/aquarius" role="button">{{ __('zodiac.view_details')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-12 row-cols-md-12 g-12">
        <div class="col">
            <h2>{{ __('zodiac.zodiac_11')}}</h2>
            <div class="alert alert-info" role="alert">
                 <p>{{ __('zodiac.zodiac_12')}}</p>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>{{ __('zodiac.cancer')}}</h2><small class="text-muted mx-2"> 6/21 ~ 7/22</small>
                </div>
                <div class="caard-header">
                    <div id="cancer" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>{{ __('zodiac.cancer_1')}}</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/astrology/zodiac/cancer" role="button">{{ __('zodiac.view_details')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>{{ __('zodiac.scorpio')}}</h2><small class="text-muted mx-2"> 10/23 ~ 11/21</small>
                </div>
                <div class="caard-header">
                    <div id="scorpio" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>{{ __('zodiac.scorpio_1')}}</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/astrology/zodiac/scorpio" role="button">{{ __('zodiac.view_details')}}</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>{{ __('zodiac.pisces')}}</h2><small class="text-muted mx-2"> 2/19 ~ 3/20</small>
                </div>
                <div class="caard-header">
                    <div id="pisces" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>{{ __('zodiac.pisces_1')}}</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/language/{{ app()->getLocale() }}/astrology/zodiac/pisces" role="button">{{ __('zodiac.view_details')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1">
        <div class="col">
            <div class="alert alert-warning" role="alert">
                <p>{{ __('zodiac.view_zodiac_date')}}</p>
                <a class="btn  btn-success" href="/language/{{ app()->getLocale() }}/astrology/zodiac/all_date" role="button">{{ __('zodiac.view_details')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection