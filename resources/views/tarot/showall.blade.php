@extends('layouts.main')

@section('title', $title)
@section('description',
"塔羅牌解讀是一種古老的占卜藝術，通過解讀塔羅牌的圖像和符號，揭示過去、現在和未來的信息。我們的網站包含了各種塔羅牌解讀主題，包括愛情、事業、財務和人生意義等。無論您對於塔羅牌是初次接觸還是已經有一定了解，我們的解讀將以專業和準確的方式為您提供答案。")

@section('main')
<div class="container">
    <h1>{{$title}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item" aria-current="page">{{$title}}</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    @foreach ($data as $keytype => $tarotarray)
    @if($keytype == 'Major')
    <h2>大阿爾克那</h2>
    <div class="alert alert-info" role="alert">
        <p>阿爾克那（Arcana）為中古世紀煉金術師所追尋的奧秘，天地萬物運行的道理。這些卡片遵循一個故事情節，講述了從愚人的無辜奇蹟到世界的統一和實現的精神旅行。換句話說，這些卡片講述了人類從精神進化到啟蒙和個性化的故事。
        </P>
        <p>因此，當我們跟隨愚者的旅程時，我們可以開始看到我們自己的人生階段與卡片中的階段之間的共同相似之處，每張卡片都特定的意義和冥想的概念。因為它們構成了塔羅牌的基礎，所以有時也可以只用大阿爾克那那來進行一些解讀。
        </P>
    </div>
    @elseif($keytype == 'Wands')
    <br>
    <h2>權杖</h2>
    <div class="alert alert-info" role="alert">
        <p>與火元素相關的權杖套牌代表著激情、靈感和意志力。權杖使用者註入原始能量，因為正是通過它們，創造的循環才能開始。由於他們能夠將能量帶入任何情況，因此他們也與行動、抱負和製定計劃有關。在最壞的情況下，他們可以指代充滿魯莽和缺乏方向的情況。隨著您在魔杖中的旅程，您會一次又一次地遇到這些主題。
        </P>
    </div>
    @elseif($keytype == 'Pentacles')
    <br>
    @include('../layouts/topads_two')
    <h2>錢幣</h2>
    <div class="alert alert-info" role="alert">
        <p>錢幣是所有世俗和物質事物的套牌。雖然我們會立即認為錢幣與財務問題有關，但我們也可以將它們理解為與安全、穩定、自然、健康和繁榮有關。錢幣是土元素。當我們在塔羅牌中看到錢幣時，它們通常與你的長遠未來、事業、慷慨、你的家庭、商業投資和你的性感有關。錢幣的消極面表現為貪婪、嫉妒、吝嗇和不顧一切的野心。
        </p>
    </div>
    @elseif($keytype == 'Cups')
    <br>
    <h2>聖杯</h2>
    <div class="alert alert-info" role="alert">
        <p>聖杯套牌統治著所有與情感、無意識、創造力和直覺相關的事物。他們經常談論人際關係，無論是浪漫的還是其他的，以及一個人的想像力和內心世界。它們與水元素相關聯，在最糟糕的情況下，聖杯套牌因不受控制的感覺、幻想和與內心聲音的脫節而煩惱。
        </P>
    </div>
    @elseif($keytype == 'Swords')
    <br>
    @include('../layouts/topads_three')
    <h2>寶劍</h2>
    <div class="alert alert-info" role="alert">
        <p>寶劍是智慧、邏輯、真理、野心、衝突和溝通的套裝。它與風元素有關。在閱讀中，這些卡片專注於智力的能力和力量，就像寶劍本身一樣，是雙刃劍。這可以用於善惡，幫助和傷害，我們最大的衝突通常來自這種微妙的平衡。在最壞的情況下，這些寶劍可能是辱罵、嚴厲和缺乏同情心的。

        </p>
    </div>
    @endif
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        @foreach ($tarotarray as $key => $tarot)
        <div class="col text-center">
            <div class="card showall">
                <div class="card-header">
                    <h3><a href="/tarot/detail/{{$key}}">{{$tarot['name']}}</a></h3>
                </div>
                <div class="card-body">
                    <div class="showalltarot-showcard">
                        <img src="/images/deck/{{$tarot['image_key']}}.jpg" class="figure-img img-fluid showcard"
                            alt="{{$tarot['name']}}">
                    </div>
                </div>
                <div class="card-body">
                    <p><strong>正位關鍵字 :</strong> @foreach ($tarot['upright_keyword'] as $string)<span
                            class="badge rounded-pill bg-info text-dark">{{$string }}</span> @endforeach</P>
                    <p><strong>逆位關鍵字 :</strong> @foreach ($tarot['reversed_keyword'] as $string)<span
                            class="badge rounded-pill bg-warning  text-dark">{{$string }}</span> @endforeach
                    </P>
                </div>
                <div class="card-footer">
                    <a href="/tarot/detail/{{$key}}" class="btn btn-sm btn-outline-secondary" role="button">詳細介紹</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</div>
@endsection