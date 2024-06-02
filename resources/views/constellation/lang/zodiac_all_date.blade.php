@extends('layouts.lang.zodiac_main')

@section('title', __('zodiac.zodiac_date_1'))
@section('description', __('description.zodiac_date'))

@section('main')
<div class="container">
    <h1>{{ __('zodiac.zodiac_date_51')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('zodiac.zodiac_date_51')}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="row row-cols-12 row-cols-md-12 g-12">
        <div class="col">
            <h2>{{ __('zodiac.zodiac_date_2')}}</h2>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">{{ __('zodiac.zodiac')}}</th>
                        <th scope="col">{{ __('zodiac.date')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ __('zodiac.aries')}}</td>
                        <td>3/21 ~ 4/19</td>
                    </tr>
                    <tr>
                        <td>{{ __('zodiac.taurus')}}</td>
                        <td>4/20 ~ 5/20</td>
                    </tr>
                    <tr>
                        <td>{{ __('zodiac.gemini')}}</td>
                        <td>5/21 ~ 6/20</td>
                    </tr>
                    <tr>
                        <td>{{ __('zodiac.cancer')}}</td>
                        <td>6/21 ~ 7/22</td>
                    </tr>
                    <tr>
                        <td>{{ __('zodiac.leo')}}</td>
                        <td>7/23 ~ 8/22</td>
                    </tr>
                    <tr>
                        <td>{{ __('zodiac.virgo')}}</td>
                        <td>8/23 ~ 9/22</td>
                    </tr>
                    <tr>
                        <td>{{ __('zodiac.libra')}}</td>
                        <td>9/23 ~ 10/22</td>
                    </tr>
                    <tr>
                        <td>{{ __('zodiac.scorpio')}}</td>
                        <td>10/23 ~ 11/21</td>
                    </tr>
                    <tr>
                        <td>{{ __('zodiac.sagittarius')}}</td>
                        <td>11/22 ~ 12/21</td>
                    </tr>
                    <tr>
                        <td>{{ __('zodiac.capricorn')}}</td>
                        <td>12/22 ~ 1/19</td>
                    </tr>
                    <tr>
                        <td>{{ __('zodiac.aquarius')}}</td>
                        <td>1/20 ~ 2/18</td>
                    </tr>
                    <tr>
                        <td>{{ __('zodiac.pisces')}}</td>
                        <td>2/19 ~ 3/20</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row row-cols-12 row-cols-md-12 g-12">
            <div class="col">
                <h2>{{ __('zodiac.zodiac_date_3')}}</h2>
                <div class="alert alert-success" role="alert">
                    <p>{{ __('zodiac.zodiac_date_4')}}
                    </p>
                    <p>{{ __('zodiac.zodiac_date_5')}}</p>
                </div>
            </div>
        </div>
        <div class="row row-cols-12 row-cols-md-12 g-12">
            <div class="col">
                <h2>{{ __('zodiac.natal_chart')}}</h2>
                <div class="alert alert-success" role="alert">
                    <p>{{ __('zodiac.zodiac_date_7')}}</p>
                    <p>{{ __('zodiac.zodiac_date_8')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.zodiac = {!! json_encode(trans('zodiac')) !!};
</script>
@endsection