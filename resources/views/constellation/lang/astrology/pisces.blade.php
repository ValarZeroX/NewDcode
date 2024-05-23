@extends('layouts.lang.main')

@section('title', __('zodiac.pisces_2'))
@section('description', __('description.pisces'))

@section('main')
<div class="container">
    <h1>{{ __('zodiac.pisces_2')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/astrology/zodiac">{{ __('zodiac.zodiac')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('zodiac.pisces_2')}}</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>{{ __('zodiac.pisces')}}</h2>
                            <p>{{ __('tarot.element')}}： <span class="badge rounded-pill bg-info">{{ __('zodiac.water')}}</span></p>
                            <p>{{ __('zodiac.color')}}： {{ __('zodiac.sea_blue')}}</p>
                            <p>{{ __('zodiac.ruling_planet')}}： {{ __('zodiac.neptune')}}</p>
                            <p>{{ __('zodiac.best_match')}}： <span class="badge rounded-pill bg-info">	{{ __('zodiac.cancer')}}</span> <span
                                    class="badge rounded-pill bg-info">{{ __('zodiac.scorpio')}}</span> <span
                                    class="badge rounded-pill bg-info">{{ __('zodiac.pisces')}}</span></p>
                            <p>{{ __('zodiac.lucky_number')}}： {{ __('zodiac.luck_8')}}</p>
                            <p>{{ __('zodiac.date')}}：2/19 ~ 3/20</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/pisces.png" class="figure-img img-fluid" alt={{ __('zodiac.pisces')}}>
                        </div>
                    </div>
                    <h2>{{ __('zodiac.pisces_3')}}</h2>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="col-1">{{ __('zodiac.aries')}}</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            60</div>
                                    </div>
                                </td>
                                <th class="col-1">{{ __('zodiac.taurus')}}</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            40</div>
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
                                            style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            95</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.leo')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            50</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.virgo')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            30</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.libra')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.scorpio')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            100</div>
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
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            50</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.aquarius')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
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
                    <h2>{{ __('zodiac.pisces_4')}}</h2>
                    <div class="feature">
                        <p><b>{{ __('zodiac.strengths')}}：</b>{{ __('zodiac.pisces_5')}}</p>
                        <p><b>{{ __('zodiac.weaknesses')}}：</b>{{ __('zodiac.pisces_6')}}</p>
                        <p><b>{{ __('zodiac.pisces_7')}}：</b>{{ __('zodiac.pisces_8')}}</p>
                        <p><b>{{ __('zodiac.pisces_9')}}：</b>{{ __('zodiac.pisces_10')}}</p>
                    </div>
                    <p>{{ __('zodiac.pisces_11')}}</p>
                    <p>{{ __('zodiac.pisces_12')}}</p>
                    <p>{{ __('zodiac.pisces_13')}}</p>
                    <p>{{ __('zodiac.pisces_14')}}</p>
                    @include('../layouts/topads_two')
                    <h2>{{ __('zodiac.pisces_15')}}</h2>
                    <img src="/images/constellation/pisces_1.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.pisces')}}>
                    <p>{{ __('zodiac.pisces_16')}}</p>
                    <p>{{ __('zodiac.pisces_17')}}</p>
                    <p>{{ __('zodiac.pisces_18')}}</p>
                    <p>{{ __('zodiac.pisces_19')}}</p>
                    <p>{{ __('zodiac.pisces_20')}}</p>
                    <h2>{{ __('zodiac.pisces_21')}}</h2>
                    <img src="/images/constellation/pisces_2.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.pisces')}}>
                    <p>{{ __('zodiac.pisces_22')}}</p>
                    <p>{{ __('zodiac.pisces_23')}}</p>
                    <p>{{ __('zodiac.pisces_24')}}</p>
                    @include('../layouts/topads_three')
                    <h2>{{ __('zodiac.pisces_25')}}</h2>
                    <img src="/images/constellation/pisces_3.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.pisces')}}>
                    <p>{{ __('zodiac.pisces_26')}}</p>
                    <p>{{ __('zodiac.pisces_27')}}</p>
                    <p>{{ __('zodiac.pisces_28')}}</p>
                    <p>{{ __('zodiac.pisces_29')}}</p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/lang/zodiac')
</div>
@endsection