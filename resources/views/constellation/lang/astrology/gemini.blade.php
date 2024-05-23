@extends('layouts.lang.main')

@section('title', __('zodiac.gemini_2'))
@section('description', __('description.gemini'))

@section('main')
<div class="container">
    <h1>{{ __('zodiac.gemini_2')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/astrology/zodiac">{{ __('zodiac.zodiac')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('zodiac.gemini_2')}}</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>{{ __('zodiac.gemini')}}</h2>
                            <p>{{ __('tarot.element')}}： <span class="badge rounded-pill bg-success">{{ __('zodiac.air')}}</span></p>
                            <p>{{ __('zodiac.color')}}： {{ __('zodiac.yellow')}}</p>
                            <p>{{ __('zodiac.ruling_planet')}}： {{ __('zodiac.mercury')}}</p>
                            <p>{{ __('zodiac.best_match')}}： <span class="badge rounded-pill bg-danger">{{ __('zodiac.aries')}}</span> <span
                                    class="badge rounded-pill bg-success">{{ __('zodiac.libra')}}</span> <span
                                    class="badge rounded-pill bg-success">{{ __('zodiac.aquarius')}}</span></p>
                            <p>{{ __('zodiac.lucky_number')}}： {{ __('zodiac.luck_5')}}</p>
                            <p>{{ __('zodiac.date')}}：5/21 ~ 6/20</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/gemini.png" class="figure-img img-fluid" alt={{ __('zodiac.gemini')}}>
                        </div>
                    </div>
                    <h2>{{ __('zodiac.gemini_3')}}</h2>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="col-1">{{ __('zodiac.aries')}}</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
                                    </div>
                                </td>
                                <th class="col-1">{{ __('zodiac.taurus')}}</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                            45</div>
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
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            60</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.leo')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.virgo')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            50</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.libra')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            85</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.scorpio')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            40</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.sagittarius')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            65</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.capricorn')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            30</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.aquarius')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            90</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.pisces')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                            55</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>{{ __('zodiac.gemini_4')}}</h2>
                    <div class="feature">
                        <p><b>{{ __('zodiac.strengths')}}：</b>{{ __('zodiac.gemini_5')}}</p>
                        <p><b>{{ __('zodiac.weaknesses')}}：</b>{{ __('zodiac.gemini_6')}}</p>
                        <p><b>{{ __('zodiac.gemini_7')}}：</b>{{ __('zodiac.gemini_8')}}</p>
                        <p><b>{{ __('zodiac.gemini_9')}}：</b>{{ __('zodiac.gemini_10')}}</p>
                    </div>
                    <p>{{ __('zodiac.gemini_11')}}</p>
                    <p>{{ __('zodiac.gemini_12')}}</p>
                    <p>{{ __('zodiac.gemini_13')}}</p>
                    <p>{{ __('zodiac.gemini_14')}}</p>
                    <p>{{ __('zodiac.gemini_15')}}</p>
                    @include('../layouts/topads_two')
                    <h2>{{ __('zodiac.gemini_16')}}</h2>
                    <img src="/images/constellation/gemini_1.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.gemini')}}>
                    <p>{{ __('zodiac.gemini_17')}}</p>
                    <p>{{ __('zodiac.gemini_18')}}</p>
                    <p>{{ __('zodiac.gemini_19')}}</p>
                    <p>{{ __('zodiac.gemini_20')}}</p>
                    <h2>{{ __('zodiac.gemini_21')}}</h2>
                    <img src="/images/constellation/gemini_2.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.gemini')}}>
                    <p>{{ __('zodiac.gemini_22')}}</p>
                    <p>{{ __('zodiac.gemini_23')}}</p>
                    <p>{{ __('zodiac.gemini_24')}}</p>
                    @include('../layouts/topads_three')
                    <h2>{{ __('zodiac.gemini_25')}}</h2>
                    <img src="/images/constellation/gemini_3.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.gemini')}}>
                    <p>{{ __('zodiac.gemini_26')}}</p>
                    <p>{{ __('zodiac.gemini_27')}}</p>
                    <p>{{ __('zodiac.gemini_28')}}</p>
                    <p>{{ __('zodiac.gemini_29')}}</p>
                    <p>{{ __('zodiac.gemini_30')}}</p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/lang/zodiac')
</div>
@endsection