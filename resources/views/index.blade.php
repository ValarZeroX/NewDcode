@extends('layouts.main')

@section('title', 'DCode 塔羅占卜')

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dcode</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <div class="col">
            <div class="card shadow-sm">
              <div class="image-container card-img-top">
                <img class="cards_image card-img-top" src="/images/tarot/tarot_background.jpg">
              </div>
              <div class="card-header text-center">塔羅占卜</div>
              <div class="card-body">
                <p class="card-text">塔羅牌是一種占卜工具，通過牌的象徵意義和排列方式，可以幫助人們了解自己的內在和外在情況，預測未來趨勢，提供指導和啟示。塔羅牌由22張大秘儀牌和56張小秘儀牌組成，每張牌都有不同的意義和象徵，可以根據問題和需要進行抽牌和解讀。塔羅占卜不是未來的預言，而是一種自我探索和啟發的工具，可以幫助人們更好地了解自己和周圍的世界。</p>
              </div>
              <div class="card-footer text-center">
                  <div class="btn-group">
                    <a href="/tarot" class="btn btn-sm btn-outline-secondary" role="button">前往占卜</a>
                    <a href="/tarot/showall" class="btn btn-sm btn-outline-secondary" role="button">塔羅牌義</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div class="image-container card-img-top">
                <img class="cards_image card-img-top" src="/images/stick/moon_old_man.jpg">
              </div>
              <div class="card-header text-center">月老靈籤</div>
              <div class="card-body">
                <p class="card-text">月老靈籤是一種道教祈福占卜方法，求姻緣之靈籤，相傳乃道家月老之神力所在，可供單身者占卜是否能早日遇到適合的伴侶，已婚者可占問感情和婚姻狀況。靈籤上的詩句可以提供啟示和指引，但也需要依靠個人的心靈與信仰去感應和解讀。月老靈籤在中國傳統文化中具有廣泛的信仰與使用，深受單身者和夫妻之間的人士歡迎。</p>
              </div>
              <div class="card-footer text-center">
                  <div class="btn-group">
                    <a href="/stick/draw/2" class="btn btn-sm btn-outline-secondary" role="button">抽籤</a>
                    <a href="/stick/showall/2" class="btn btn-sm btn-outline-secondary" role="button">解籤</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div class="image-container card-img-top">
                <img class="cards_image card-img-top" src="/images/stick/guanyin_twenty_eight.jpg">
              </div>
              <div class="card-header text-center">詩籤</div>
              <div class="card-body">
                <p class="card-text">詩籤是一種古老的占卜方式，通常以詩句的形式表達吉凶祸福。占卜詩籤可以用於求籤卜運、解決問題、選擇人生方向等方面。籤詩的內容大多與中國傳統文化、宗教信仰等有關，具有深厚的文化底蘊。</p>
              </div>
              <div class="card-footer text-center">
                  <div class="btn-group">
                    <a href="/stick" class="btn btn-sm btn-outline-secondary" role="button">前往詩籤</a>
                  </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection