@extends('layouts.main')

@section('title', 'DCode 塔羅占卜')
@section('description',
"歡迎來到我們的網站！我們提供多種神秘學占卜服務，包括塔羅占卜、詩籤解籤和星座介紹。我們的塔羅占卜能幫助您探索自己的內心世界，解決問題，預測未來；詩籤解籤則能為您提供啟示，引領您走向更好的人生道路；星座介紹則讓您更深入地了解自己和周遭的人事物，從而增強自我認識和人際關係。DCode網站將根據您提供的問題和出生資料，給予準確的解答和建議。請瀏覽我們的網站，開始您的神秘之旅！")

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dcode</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <h1>詩籤解籤、塔羅占卜</h1>
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
          <div class="col">
            <div class="card shadow-sm">
              <div class="image-container card-img-top">
                <img class="cards_image card-img-top" src="/images/constellation/gemini_2.jpg">
              </div>
              <div class="card-header text-center">十二星座</div>
              <div class="card-body">
                <p class="card-text">十二星座是人們根據太陽、月亮和行星在黃道帶上的位置劃分的星座，包括牡羊座、金牛座、雙子座、巨蟹座、獅子座、處女座、天秤座、天蠍座、射手座、摩羯座、水瓶座和雙魚座。每個星座都有自己的特點和個性，人們可以根據星座瞭解自己和身邊人的傾向和行為模式。星座也常被用於占星學和命理學中，被認為可以影響一個人的性格和命運。</p>
              </div>
              <div class="card-footer text-center">
                  <div class="btn-group">
                    <a href="/astrology/zodiac" class="btn btn-sm btn-outline-secondary" role="button">前往星座介紹</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div class="image-container card-img-top">
                <img class="cards_image card-img-top" src="/images/constellation/taurus_3.jpg">
              </div>
              <div class="card-header text-center">大眾塔羅占卜</div>
              <div class="card-body">
                <p class="card-text">大眾塔羅占卜網站提供各種塔羅牌占卜，包括愛情、財運、事業、健康、未來預測等，幫助人們解答各種疑問與困惑。使用網站占卜非常簡單，只需選擇你感興趣的類型，集中精神思考你的問題，然後點擊抽牌，就可以獲得你的塔羅牌占卜結果了。大眾塔羅占卜網站不僅提供各種占卜結果的解析，還有塔羅牌的詳細介紹和歷史文化背景，讓你更深入了解塔羅牌的奧秘。</p>
              </div>
              <div class="card-footer text-center">
                  <div class="btn-group">
                    <a href="/tarot/masses" class="btn btn-sm btn-outline-secondary" role="button">前往占卜</a>
                  </div>
              </div>
            </div>
          </div>
    </div>
    <br>
    <h2>每日塔羅占卜系列</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
      <div class="col">
        <div class="card shadow-sm">
          <div class="image-container card-img-top">
            <img class="cards_image card-img-top" src="/images/tarot/daily_tarot.jpg">
          </div>
          <div class="card-header text-center">每日塔羅占卜</div>
          <div class="card-body">
            <p class="card-text">每日塔羅占卜可以幫助你探索當天的能量和主題，提供指引和啟示，幫助你更好地理解和應對生活中的挑戰和機遇。透過抽出一張牌，解讀牌面的象徵意義，可以給你啟發和靈感。每日塔羅占卜不僅可以幫助你掌握當下的情況，還可以幫助你發現潛在的問題和解決方案。</p>
          </div>
          <div class="card-footer text-center">
              <div class="btn-group">
                <a href="/tarot/daily" class="btn btn-sm btn-outline-secondary" role="button">前往占卜</a>
              </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <div class="image-container card-img-top">
            <img class="cards_image card-img-top" src="/images/tarot/love.jpg">
          </div>
          <div class="card-header text-center">每日愛情塔羅占卜</div>
          <div class="card-body">
            <p class="card-text">每日愛情塔羅占卜是一種運用塔羅牌的方式，以解讀當天的感情狀態、關係及愛情運勢為目的。每張塔羅牌代表著不同的象徵和含義，透過牌面的解讀，可以為當天的感情狀態帶來啟示和建議。</p>
          </div>
          <div class="card-footer text-center">
              <div class="btn-group">
                <a href="/tarot/daily/love" class="btn btn-sm btn-outline-secondary" role="button">前往占卜</a>
              </div>
          </div>
        </div>
      </div>
    </div>
    @include('../layouts/zodiac')
</div>
@endsection