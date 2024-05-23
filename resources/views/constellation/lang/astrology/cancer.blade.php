@extends('layouts.lang.main')

@section('title', __('zodiac.cancer_2'))
@section('description',  __('description.cancer'))

@section('main')
<div class="container">
    <h1>{{ __('zodiac.cancer_2')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/astrology/zodiac">{{
                __('zodiac.zodiac')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('zodiac.cancer_2')}}</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>{{ __('zodiac.cancer')}}</h2>
                            <p>{{ __('tarot.element')}}： <span class="badge rounded-pill bg-info">{{ __('zodiac.water')}}</span></p>
                            <p>{{ __('zodiac.color')}}： {{ __('zodiac.white')}}</p>
                            <p>{{ __('zodiac.ruling_planet')}}： {{ __('zodiac.moon')}}</p>
                            <p>{{ __('zodiac.best_match')}}： <span class="badge rounded-pill bg-warning">{{ __('zodiac.taurus')}}</span> <span
                                    class="badge rounded-pill bg-info">{{ __('zodiac.pisces')}}</span> <span
                                    class="badge rounded-pill bg-info">{{ __('zodiac.scorpio')}}</span></p>
                            <p>{{ __('zodiac.lucky_number')}}： {{ __('zodiac.luck_3')}}</p>
                            <p>{{ __('zodiac.date')}}：6/21 ~ 7/22</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/cancer.png" class="figure-img img-fluid" alt={{ __('zodiac.cancer')}}>
                        </div>
                    </div>
                    <h2>{{ __('zodiac.cancer_3')}}</h2>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="col-1">{{ __('zodiac.aries')}}</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                            55</div>
                                    </div>
                                </td>
                                <th class="col-1">{{ __('zodiac.taurus')}}</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100">
                                            100</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.gemini')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.cancer')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.leo')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            60</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.virgo')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.libra')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            40</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.scorpio')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            85</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.sagittarius')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            50</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.capricorn')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            65</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.aquarius')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                            45</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.pisces')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            90</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>{{ __('zodiac.cancer_4')}}</h2>
                    <div class="feature">
                        <p><b>{{ __('zodiac.strengths')}}：</b>{{ __('zodiac.cancer_5')}}</p>
                        <p><b>{{ __('zodiac.weaknesses')}}：</b>{{ __('zodiac.cancer_6')}}</p>
                        <p><b>{{ __('zodiac.cancer_7')}}：</b>{{ __('zodiac.cancer_8')}}</p>
                        <p><b>{{ __('zodiac.cancer_9')}}：</b>{{ __('zodiac.cancer_29')}}</p>
                    </div>
                    <p>{{ __('zodiac.cancer_10')}}</p>
                    <p>{{ __('zodiac.cancer_11')}}</p>
                    <p>{{ __('zodiac.cancer_12')}}</p>
                    <p>{{ __('zodiac.cancer_13')}}</p>
                    @include('../layouts/topads_two')
                    <h2>{{ __('zodiac.cancer_14')}}</h2>
                    <img src="/images/constellation/cancer_1.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.cancer')}}>
                    <p>{{ __('zodiac.cancer_15')}}</p>
                    <p>{{ __('zodiac.cancer_16')}}</p>
                    <p>{{ __('zodiac.cancer_17')}}</p>
                    <h2>{{ __('zodiac.cancer_18')}}</h2>
                    <img src="/images/constellation/cancer_2.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.cancer')}}>
                    <p>{{ __('zodiac.cancer_19')}}</p>
                    <p>{{ __('zodiac.cancer_20')}}</p>
                    <p>{{ __('zodiac.cancer_21')}}</p>
                    <p>{{ __('zodiac.cancer_22')}}</p>
                    @include('../layouts/topads_three')
                    <h2>{{ __('zodiac.cancer_23')}}</h2>
                    <img src="/images/constellation/cancer_3.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.cancer')}}>
                    <p>{{ __('zodiac.cancer_24')}}</p>
                    <p>{{ __('zodiac.cancer_25')}}</p>
                    <p>{{ __('zodiac.cancer_26')}}</p>
                    <p>{{ __('zodiac.cancer_27')}}</p>
                    <p>{{ __('zodiac.cancer_28')}}</p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/lang/zodiac')
</div>
@endsection