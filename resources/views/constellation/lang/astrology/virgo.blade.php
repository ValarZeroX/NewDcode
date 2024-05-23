@extends('layouts.lang.main')

@section('title', __('zodiac.virgo_2'))
@section('description', __('description.virgo'))

@section('main')
<div class="container">
    <h1>{{ __('zodiac.virgo_2')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/astrology/zodiac">{{ __('zodiac.zodiac')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('zodiac.virgo_2')}}</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>{{ __('zodiac.virgo')}}</h2>
                            <p>{{ __('tarot.element')}}： <span class="badge rounded-pill bg-success">{{ __('zodiac.earth')}}</span></p>
                            <p>{{ __('zodiac.color')}}： {{ __('zodiac.gray_beige')}}</p>
                            <p>{{ __('zodiac.ruling_planet')}}： {{ __('zodiac.mercury')}}</p>
                            <p>{{ __('zodiac.best_match')}}： <span class="badge rounded-pill bg-info">{{ __('zodiac.cancer')}}</span> <span
                                    class="badge rounded-pill bg-warning">{{ __('zodiac.virgo')}}</span> <span
                                    class="badge rounded-pill bg-warning">{{ __('zodiac.capricorn')}}</span></p>
                            <p>{{ __('zodiac.lucky_number')}}： {{ __('zodiac.luck_12')}}</p>
                            <p>{{ __('zodiac.date')}}：8/23 ~ 9/22</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/virgo.png" class="figure-img img-fluid" alt={{ __('zodiac.virgo')}}>
                        </div>
                    </div>
                    <h2>{{ __('zodiac.virgo_3')}}</h2>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="col-1">{{ __('zodiac.aries')}}</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            50</div>
                                    </div>
                                </td>
                                <th class="col-1">{{ __('zodiac.taurus')}}</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            85</div>
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
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            100</div>
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
                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            90</div>
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
                                            style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            95</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.aquarius')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.pisces')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>{{ __('zodiac.virgo_4')}}</h2>
                    <div class="feature">
                        <p><b>{{ __('zodiac.strengths')}}：</b>{{ __('zodiac.virgo_5')}}</p>
                        <p><b>{{ __('zodiac.weaknesses')}}：</b>{{ __('zodiac.virgo_6')}}</p>
                        <p><b>{{ __('zodiac.virgo_7')}}：</b>{{ __('zodiac.virgo_8')}}</p>
                        <p><b>{{ __('zodiac.virgo_9')}}：</b>{{ __('zodiac.virgo_10')}}</p>
                    </div>
                    <p>{{ __('zodiac.virgo_11')}}</p>
                    <p>{{ __('zodiac.virgo_12')}}</p>
                    <p>{{ __('zodiac.virgo_13')}}</p>
                    <p>{{ __('zodiac.virgo_14')}}</p>
                    @include('../layouts/topads_two')
                    <h2>{{ __('zodiac.virgo_15')}}</h2>
                    <img src="/images/constellation/virgo_1.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.virgo')}}>
                    <p>{{ __('zodiac.virgo_16')}}</p>
                    <p>{{ __('zodiac.virgo_17')}}</p>
                    <p>{{ __('zodiac.virgo_18')}}</p>
                    <p>{{ __('zodiac.virgo_19')}}</p>
                    <h2>{{ __('zodiac.virgo_20')}}</h2>
                    <img src="/images/constellation/virgo_2.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.virgo')}}>
                    <p>{{ __('zodiac.virgo_21')}}</p>
                    <p>{{ __('zodiac.virgo_22')}}</p>
                    <p>{{ __('zodiac.virgo_23')}}</p>
                    </p>
                    @include('../layouts/topads_three')
                    <h2>{{ __('zodiac.virgo_24')}}</h2>
                    <img src="/images/constellation/virgo_3.jpg" class="img-thumbnail figure-img img-fluid" alt={{ __('zodiac.virgo')}}>
                    <p>{{ __('zodiac.virgo_25')}}</p>
                    <p>{{ __('zodiac.virgo_26')}}</p>
                    <p>{{ __('zodiac.virgo_27')}}</p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/lang/zodiac')
</div>
@endsection