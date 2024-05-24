@extends('layouts.lang.zodiac_main')

@section('title', __('zodiac.zodiac_date_1'))
@section('description', __('description.zodiac_date'))

@section('main')
<div class="container">
    <h1>{{ __('zodiac.zodiac_date_1')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/language/{{ app()->getLocale() }}">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('zodiac.zodiac_date_1')}}</li>
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
        <div class="row row-cols-12 row-cols-md-12 g-12">
            <div class="col">
                <h3>{{ __('zodiac.zodiac_date_9')}}</h3>
                {{ csrf_field() }}
                <div class="input-group mb-12">
                    <span class="input-group-text">{{ __('zodiac.ad')}}</span>
                    <select class="form-select year" name="year">
                        @for ($i = 1900; $i <= 2050; $i++) <option value={{$i}} @if ($i==1960) selected @endif>{{$i}}
                            </option>
                            @endfor
                    </select>
                    <span class="input-group-text">{{ __('zodiac.year')}}</span>
                </div>
                <div class="input-group mb-12 mt-3">
                    <select class="form-select month" name="month">
                        @for ($i = 1; $i <= 12; $i++) <option value={{$i}} @if ($i==1) selected @endif>{{$i}}
                            </option>
                            @endfor
                    </select>
                    <span class="input-group-text">{{ __('zodiac.month')}}</span>
                    <select class="form-select day" name="day">
                        @for ($i = 1; $i <= 31; $i++) <option value={{$i}} @if ($i==1) selected @endif>{{$i}}
                            </option>
                            @endfor
                    </select>
                    <span class="input-group-text">{{ __('zodiac.day')}}</span>
                </div>
                <div class="input-group mb-12 mt-3">
                    <select class="form-select hour" name="hour">
                        @for ($i = 0; $i <= 23; $i++) <option value={{$i}} @if ($i==0) selected @endif>{{$i}}
                            </option>
                            @endfor
                    </select>
                    <span class="input-group-text">{{ __('zodiac.hour')}}</span>
                    <select class="form-select minutes" name="minutes">
                        @for ($i = 0; $i <= 59; $i++) <option value={{$i}} @if ($i==0) selected @endif>{{$i}}
                            </option>
                            @endfor
                    </select>
                    <span class="input-group-text">{{ __('zodiac.minute')}}</span>
                </div>
                <h3 class="mt-3">{{ __('zodiac.place_of_birth')}}</h3>
                <div class="input-group mb-12">
                    <span class="input-group-text">{{ __('zodiac.country')}}</span>
                    <select class="form-select location" name="location">
                        <option value='其他' selected>{{ __('dcode.other')}}</option>
                        <option value="-63.6167,-38.4161">{{ __('dcode.argentina')}}</option>
                        <option value="133.7751,-25.2744">{{ __('dcode.australia')}}</option>
                        <option value="-51.9253,-14.2350">{{ __('dcode.brazil')}}</option>
                        <option value="-106.3468,56.1304">{{ __('dcode.canada')}}</option>
                        <option value="104.1954,35.8617">{{ __('dcode.china')}}</option>
                        <option value="10.4515,51.1657">{{ __('dcode.germany')}}</option>
                        <option value="2.2137,46.6034">{{ __('dcode.france')}}</option>
                        <option value="78.9629,20.5937">{{ __('dcode.india')}}</option>
                        <option value="12.5674,41.8719">{{ __('dcode.italy')}}</option>
                        <option value="138.2529,36.2048">{{ __('dcode.japan')}}</option>
                        <option value="101.9758,4.2105">{{ __('dcode.malaysia')}}</option>
                        <option value="-102.5528,23.6345">{{ __('dcode.mexico')}}</option>
                        <option value="-8.2245,39.3999">{{ __('dcode.portugal')}}</option>
                        <option value="105.3188,61.5240">{{ __('dcode.russia')}}</option>
                        <option value="127.7669,35.9078">{{ __('dcode.south_korea')}}</option>
                        <option value="103.8198,1.3521">{{ __('dcode.singapore')}}</option>
                        <option value="-3.7038,40.4168">{{ __('dcode.spain')}}</option>
                        <option value="100.9925,15.8700">{{ __('dcode.thailand')}}</option>
                        <option value="-3.4360,55.3781">{{ __('dcode.united_kingdom')}}</option>
                        <option value="-95.7129,37.0902">{{ __('dcode.united_states')}}</option>
                        <option value="121.7740,12.8797">{{ __('dcode.philippines')}}</option>
                    </select>
                </div>
                <div class="input-group mb-12 mt-3">
                    <span class="input-group-text">{{ __('zodiac.longitude')}}<a
                            href="https://support.google.com/maps/answer/18539?hl=zh-Hant&co=GENIE.Platform%3DAndroid"
                            target="_blank" title={{ __('zodiac.zodiac_date_20')}}><span
                                class="material-icons-outlined md-14">
                                help_outline
                            </span></a></span>
                    <input type="number" class="form-control longitude" name="longitude" value="0">
                    <span class="input-group-text">{{ __('zodiac.latitude')}}<a
                            href="https://support.google.com/maps/answer/18539?hl=zh-Hant&co=GENIE.Platform%3DAndroid"
                            target="_blank" title={{ __('zodiac.zodiac_date_20')}}><span
                                class="material-icons-outlined md-14">
                                help_outline
                            </span></a></span>
                    <input type="number" class="form-control latitude" name="latitude" value="0">
                </div>
                <div class="mt-3">
                    <h4>{{ __('zodiac.zodiac_date_20')}}</h4>
                    <div class="alert alert-success" role="alert">
                        <p>{{ __('zodiac.zodiac_date_21')}}</p>
                        <p><a href="https://support.google.com/maps/answer/18539?hl=en&co=GENIE.Platform%3DiOS&oco=1&sjid=7487143798773252485-AP"
                                target="_blank">{{ __('zodiac.click_here')}}</a></p>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <input class="btn btn-outline-secondary submit-date" type="submit" value={{ __('zodiac.search')}}>
                </div>
            </div>
        </div>
        <div class="info-box">
            <div class="d-flex justify-content-center mt-5">
                <div class="card">
                    <div class="card-body">
                        <div id="paper"></div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="mt-5">{{ __('zodiac.zodiac_sign_and_houses')}}</h2>
        <div class="info-box">
            <div class="d-flex justify-content-center mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="planet-positions">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex mt-5">
            <table class="table table-striped table-bordered text-center table-hover">
                <thead>
                    <tr>
                        <th class="col-2">{{ __('zodiac.zodiac_sign')}}</th>
                        <th class="col-8">{{ __('zodiac.description')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>{{ __('zodiac.sun')}}</th>
                        <td>{{ __('zodiac.zodiac_date_25')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('zodiac.mercury')}}</th>
                        <td>{{ __('zodiac.zodiac_date_26')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('zodiac.venus')}}</th>
                        <td>{{ __('zodiac.zodiac_date_27')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('zodiac.mars')}}</th>
                        <td>{{ __('zodiac.zodiac_date_28')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('zodiac.jupiter')}}</th>
                        <td>{{ __('zodiac.zodiac_date_29')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('zodiac.saturn')}}</th>
                        <td>{{ __('zodiac.zodiac_date_30')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('zodiac.uranus')}}</th>
                        <td>{{ __('zodiac.zodiac_date_31')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('zodiac.neptune')}}</th>
                        <td>{{ __('zodiac.zodiac_date_32')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('zodiac.pluto')}}</th>
                        <td>{{ __('zodiac.zodiac_date_33')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('zodiac.ascending_node')}}</th>
                        <td>
                            <p>{{ __('zodiac.zodiac_date_35')}}</p>
                            <p>{{ __('zodiac.zodiac_date_36')}}</p>
                            <p>{{ __('zodiac.zodiac_date_37')}}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>{{ __('zodiac.lilith')}}</th>
                        <td>
                            <p>{{ __('zodiac.zodiac_date_39')}}</p>
                            <p>{{ __('zodiac.zodiac_date_40')}}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h2 class="mt=5">{{ __('zodiac.zodiac_date_41')}}</h2>
        <div class="info-box">
            <div class="d-flex justify-content-center mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="aspect">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex mt-5">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>{{ __('zodiac.zodiac_date_41')}}</th>
                        <th>{{ __('zodiac.description')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>{{ __('zodiac.zodiac_date_42')}}</th>
                        <td>{{ __('zodiac.zodiac_date_43')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('zodiac.zodiac_date_44')}}</th>
                        <td>{{ __('zodiac.zodiac_date_45')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('zodiac.zodiac_date_46')}}</th>
                        <td>{{ __('zodiac.zodiac_date_47')}}</td>
                    </tr>
                    <tr>
                        <th>{{ __('zodiac.zodiac_date_48')}}</th>
                        <td>{{ __('zodiac.zodiac_date_49')}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    window.zodiac = {!! json_encode(trans('zodiac')) !!};
</script>
@endsection