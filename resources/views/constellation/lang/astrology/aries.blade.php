@extends('layouts.lang.main')

@section('title', __('zodiac.aries_2'))
@section('description',  __('description.aries'))

@section('main')
<div class="container">
    <h1>{{ __('zodiac.aries_2')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}/astrology/zodiac">{{
                    __('zodiac.zodiac')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('zodiac.aries_2')}}</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>{{ __('zodiac.aries')}}</h2>
                            <p>{{ __('tarot.element')}}： <span class="badge rounded-pill bg-danger">{{ __('zodiac.fire')}}</span></p>
                            <p>{{ __('zodiac.color')}}： {{ __('zodiac.red')}}</p>
                            <p>{{ __('zodiac.ruling_planet')}}： {{ __('zodiac.mars')}}</p>
                            <p>{{ __('zodiac.best_match')}}： <span class="badge rounded-pill bg-danger">{{
                                    __('zodiac.sagittarius')}}</span> <span class="badge rounded-pill bg-danger">{{
                                    __('zodiac.leo')}}</span> <span class="badge rounded-pill bg-success">{{
                                    __('zodiac.aquarius')}}</span></p>
                            <p>{{ __('zodiac.lucky_number')}}： {{ __('zodiac.luck_2')}}</p>
                            <p>{{ __('zodiac.date')}}：3/21 ~ 4/19</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/aries.png" class="figure-img img-fluid" alt={{
                                __('zodiac.aries')}}>
                        </div>
                    </div>
                    <h2>{{ __('zodiac.aries_3')}}</h2>
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
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            60</div>
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
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100">100</div>
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
                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.scorpio')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>{{ __('zodiac.sagittarius')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100">100</div>
                                    </div>
                                </td>
                                <th>{{ __('zodiac.capricorn')}}</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            60</div>
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
                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>{{ __('zodiac.aries_4')}}</h2>
                    <div class="feature">
                        <p><b>{{ __('zodiac.strengths')}}：</b>{{ __('zodiac.aries_5')}}</p>
                        <p><b>{{ __('zodiac.weaknesses')}}：</b>{{ __('zodiac.aries_6')}}</p>
                        <p><b>{{ __('zodiac.aries_9')}}：</b>{{ __('zodiac.aries_7')}}</p>
                        <p><b>{{ __('zodiac.aries_10')}}：</b>{{ __('zodiac.aries_8')}}</p>
                    </div>
                    <p>{{ __('zodiac.aries_11')}}</p>
                    <p>{{ __('zodiac.aries_12')}}</p>
                    <p>{{ __('zodiac.aries_13')}}</p>
                    <p>{{ __('zodiac.aries_14')}}</p>
                    @include('../layouts/topads_two')
                    <h2>{{ __('zodiac.aries_15')}}</h2>
                    <img src="/images/constellation/aries_1.jpg" class="img-thumbnail figure-img img-fluid" alt={{
                        __('zodiac.aries')}}>
                    <p>{{ __('zodiac.aries_16')}}</p>
                    <p>{{ __('zodiac.aries_17')}}</p>
                    <p>{{ __('zodiac.aries_18')}}</p>
                    <p>{{ __('zodiac.aries_19')}}</p>
                    <h2>{{ __('zodiac.aries_20')}}</h2>
                    <img src="/images/constellation/aries_2.jpg" class="img-thumbnail figure-img img-fluid" alt={{
                        __('zodiac.aries')}}>
                    <p>{{ __('zodiac.aries_21')}}</p>
                    <p>{{ __('zodiac.aries_22')}}</p>
                    <p>{{ __('zodiac.aries_23')}}</p>
                    <p>{{ __('zodiac.aries_24')}}</p>
                    @include('../layouts/topads_three')
                    <h2>{{ __('zodiac.aries_25')}}</h2>
                    <img src="/images/constellation/aries_3.jpg" class="img-thumbnail figure-img img-fluid" alt={{
                        __('zodiac.aries')}}>
                    <p>{{ __('zodiac.aries_26')}}</p>
                    <p>{{ __('zodiac.aries_27')}}</p>
                    <p>{{ __('zodiac.aries_28')}}</p>
                    <p>{{ __('zodiac.aries_29')}}</p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/lang/zodiac')
</div>
@endsection