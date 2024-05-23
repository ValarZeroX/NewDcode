@extends('layouts.lang.main')

@section('title', __('zodiac.aquarius_2'))
@section('description', __('description.aquarius'))

@section('main')
<div class="container">
    <h1>{{ __('zodiac.aquarius_2')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/astrology/zodiac">{{ __('zodiac.zodiac')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('zodiac.aquarius_2')}}</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>{{ __('zodiac.aquarius')}}</h2>
                            <p>{{ __('tarot.element')}}： <span class="badge rounded-pill bg-success">{{ __('zodiac.air')}}</span></p>
                            <p>{{ __('zodiac.color')}}： {{ __('zodiac.light_blue_silver')}}</p>
                            <p>{{ __('zodiac.ruling_planet')}}： {{ __('zodiac.uranus')}}</p>
                            <p>{{ __('zodiac.best_match')}}： <span class="badge rounded-pill bg-warning">{{ __('zodiac.virgo')}}</span> <span
                                    class="badge rounded-pill bg-success">{{ __('zodiac.libra')}}</span> <span
                                    class="badge rounded-pill bg-success">{{ __('zodiac.aquarius')}}</span></p>
                            <p>{{ __('zodiac.lucky_number')}}： {{ __('zodiac.luck_1')}}</p>
                            <p>{{ __('zodiac.date')}}：1/20 ~ 2/18</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/aquarius.png" class="figure-img img-fluid" alt={{ __('zodiac.aquarius')}}>
                        </div>
                    </div>
                    <h2>{{ __('zodiac.aquarius_3')}}</h2>
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
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.cancer')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
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
                                            style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            85</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.libra')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            100</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.scorpio')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 70%" aria-valuenow="4070" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.sagittarius')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.capricorn')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
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
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>{{ __('zodiac.aquarius_4')}}</h2>
                    <div class="feature">
                        <p><b>{{ __('zodiac.strengths')}}：</b>{{ __('zodiac.aquarius_11')}}</p>
                        <p><b>{{ __('zodiac.weaknesses')}}：</b>{{ __('zodiac.aquarius_12')}}</p>
                        <p><b>{{ __('zodiac.aquarius_5')}}：</b>{{ __('zodiac.aquarius_13')}}</p>
                        <p><b>{{ __('zodiac.aquarius_6')}}：</b>{{ __('zodiac.aquarius_14')}}</p>
                    </div>
                    <p>{{ __('zodiac.aquarius_7')}}</p>
                    <p>{{ __('zodiac.aquarius_8')}}</p>
                    <p>{{ __('zodiac.aquarius_9')}}</p>
                    <p>{{ __('zodiac.aquarius_10')}}</p>
                    @include('../layouts/topads_two')
                    <h2>{{ __('zodiac.aquarius_15')}}</h2>
                    <img src="/images/constellation/aquarius_1.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.aquarius')}}>
                    <p>{{ __('zodiac.aquarius_16')}}</p>
                    <p>{{ __('zodiac.aquarius_17')}}</p>
                    <p>{{ __('zodiac.aquarius_18')}}</p>
                    <p>{{ __('zodiac.aquarius_19')}}</p>
                    <h2>{{ __('zodiac.aquarius_20')}}</h2>
                    <img src="/images/constellation/aquarius_2.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.aquarius')}}>
                    <p>{{ __('zodiac.aquarius_21')}}
                    </p>
                    <p>{{ __('zodiac.aquarius_22')}}
                    </p>
                    <p>{{ __('zodiac.aquarius_23')}}
                    </p>
                    <p>{{ __('zodiac.aquarius_24')}}</p>
                    @include('../layouts/topads_three')
                    <h2>{{ __('zodiac.aquarius_25')}}</h2>
                    <img src="/images/constellation/aquarius_3.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.aquarius')}}>
                    <p>{{ __('zodiac.aquarius_26')}}
                    </p>
                    <p>{{ __('zodiac.aquarius_27')}}
                    </p>
                    <p>{{ __('zodiac.aquarius_28')}}
                    </p>
                    <p>{{ __('zodiac.aquarius_29')}}
                    </p>
                    <p>{{ __('zodiac.aquarius_30')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/lang/zodiac')
</div>
@endsection