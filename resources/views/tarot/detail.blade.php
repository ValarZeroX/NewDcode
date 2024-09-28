@extends('layouts.main')

@section('title', '塔羅牌 - ' . $data['name'] . ' - 愛情、工作、金錢運勢解讀')
@section('description', '塔羅牌' . $data['name']. '正逆位對於愛情、工作、事業、金錢解讀。' .$data['content'])

@section('main')
<div class="container">
    <h1>塔羅牌 - {{$data['name']}} - 愛情、工作、金錢運勢解讀</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/tarot/showall">塔羅牌牌義</a></li>
            <li class="breadcrumb-item active" aria-current="page">塔羅牌 - {{$data['name']}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="row row-cols-1">
        <div class="col-md-4">
            <div id="toc">
                <h3>目錄</h3>
                <ul></ul>
            </div>
        </div>
        <div class="col">
            <div>
                <div class="well card">
                    <div class="card-header">
                        <h2>{{$data['name']}}</h2>
                    </div>
                    <div class="card-body">
                        <div class="tarot-showcard">
                            <img src="/images/deck/{{$data['image_key']}}.jpg" class="figure-img img-fluid showcard"
                                alt="{{$data['name']}}">
                        </div>
                        <p><strong>正位關鍵字 :</strong> @foreach ($data['upright_keyword'] as $value)<span
                                class="badge rounded-pill bg-info text-dark">{{$value }}</span> @endforeach</P>
                        <p><strong>逆位關鍵字 :</strong> @foreach ($data['reversed_keyword'] as $value)<span
                                class="badge rounded-pill bg-warning  text-dark">{{$value }}</span> @endforeach</P>
                        @if(!empty($data['astrology']))<p><strong>星象 :</strong> {{$data['astrology']}}</p>@endif
                        <p><strong>元素 :</strong> {{$data['element']}}</p>
                        <h2 id="content">描述</h2>
                        <p>{!! $data['content'] !!}</p>
                        <h2 id="upright_content">正位描述</h2>
                        <p>{!! $data['upright_content'] !!}</p>
                        <h3 id="upright_love">正位 - 戀愛婚姻</h3>
                        <p>{!! $data['upright_love'] !!}</p>
                        <h3 id="upright_career">正位 - 工作事業</h3>
                        <p>{!! $data['upright_career'] !!}</p>
                        <h3 id="upright_finances">正位 - 金錢財物</h3>
                        <p> {!! $data['upright_finances'] !!}</p>
                        <hr />
                        @include('../layouts/article')
                        <h2 id="reversed_content">逆位描述</h2>
                        <p>{!! $data['reversed_content'] !!}</p>
                        <h3 id="reversed_love">逆位 - 戀愛婚姻</h3>
                        <p>{!! $data['reversed_love'] !!}</p>
                        <h3 id="reversed_career">逆位 - 工作事業</h3>
                        <p>{!! $data['reversed_career'] !!}</p>
                        <h3 id="reversed_finances">逆位 - 金錢財物</h3>
                        <p>{!! $data['reversed_finances'] !!}</p>
                        <hr />
                        @include('../layouts/topads_two')
                        <h2 id="yes_no">是否</h2>
                        <p>{!! $data['yes_no'] !!}</p>
                        <hr />
                        <h2 id="past">過去</h2>
                        <p>{!! $data['past'] !!}</p>
                        <h2 id="present">現在</h2>
                        <p>{!! $data['present'] !!}</p>
                        <h2 id="future">未來</h2>
                        <p>{!! $data['future'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-warning" role="alert">
        <p>查看全部塔羅牌解讀。</p>
        <a class="btn  btn-success" href="/tarot/showall" role="button">前往塔羅牌解讀</a>
    </div>
    <div class="alert alert-warning" role="alert">
        <p>更多種塔羅牌占卜，獲得愛情、工作、事業運勢解讀。</p>
        <a class="btn  btn-success" href="/tarot" role="button">前往占卜</a>
    </div>
</div>
@endsection