@extends('layouts.main')

@section('title', '雙子座 - 星座介紹')
@section('description',
'雙子代表著兩個不同的性格在同一個人身上。雙子座的人好奇心強，富有想像力，思維敏捷，能夠迅速地理解新事物。他們很好交朋友，健談又風趣，但也容易讓人感到輕浮或表面。雙子座的人內心有著不安定的因素，需要不斷地嘗試新事物來轉移注意力。他們通常會有多種興趣和專長，但也容易失去興趣，轉而追求新的挑戰。由於思維敏捷，雙子座的人在溝通和表達方面很有天賦，常常擅長文字、演說、表演等領域。')

@section('main')
<div class="container">
    <h1>雙子座 - 星座介紹</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/astrology/zodiac">星座</a></li>
            <li class="breadcrumb-item active" aria-current="page">雙子座 - 星座介紹</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>雙子座</h2>
                            <p>元素： <span class="badge rounded-pill bg-success">風</span></p>
                            <p>顏色： 黃色</p>
                            <p>守護星： 水星</p>
                            <p>最佳配對： <span class="badge rounded-pill bg-danger">牡羊座</span>、<span
                                    class="badge rounded-pill bg-success">天秤座</span>、<span
                                    class="badge rounded-pill bg-success">水瓶座</span></p>
                            <p>幸運數字： 5、7、14、23</p>
                            <p>日期：5/21 ~ 6/20</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/gemini.png" class="figure-img img-fluid" alt="雙子座">
                        </div>
                    </div>
                    <h2>雙子座配對指數</h2>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="col-1">牡羊座</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
                                    </div>
                                </td>
                                <th class="col-1">金牛座</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                            45</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>雙子座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
                                    </div>
                                </td>
                                <th>巨蟹座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            60</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>獅子座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                                <th>處女座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            50</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>天秤座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            85</div>
                                    </div>
                                </td>
                                <th>天蠍座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            40</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>射手座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            65</div>
                                    </div>
                                </td>
                                <th>魔羯座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            30</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>水瓶座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            90</div>
                                    </div>
                                </td>
                                <th>雙魚座</th>
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
                    <h2>雙子座性格特徵</h2>
                    <div class="feature">
                        <p><b>優點：</b>溫柔、深情、好奇、適應力強、能夠快速學習和交流思想</p>
                        <p><b>缺點：</b>神經質、反复無常、優柔寡斷</p>
                        <p><b>雙子座喜歡：</b>音樂、書籍、雜誌、與任何人聊天、在市區短途旅行</p>
                        <p><b>雙子座討厭：</b>獨處、受限制、重複和例行公事</p>
                    </div>
                    <p>雙子座的人通常喜好知識和冒險，他們喜歡思考、交流和探索新的想法和經驗。雙子座的人善於說服和表達，並能輕易地應對各種人際關係和情境。他們有時會顯得有些輕浮，但是這也是他們的魅力所在。
                    </p>
                    <p>雙子座的人好奇心強，對周圍的人和事物充滿好奇心，對新鮮感和變化感非常敏銳。他們善於表達自己的想法和情感，能夠用各種方式與人交流，這讓他們非常受歡迎。
                    </p>
                    <p>由於雙子座的人好奇心強，因此他們常常表現出難以捉摸的特點。他們可能會對一件事情感興趣一會兒，但很快又轉移了注意力，因此有時候可能會被人認為是善變和不可靠的。然而，這種特點同時也讓他們擁有更多的經驗和知識，能夠更好地適應不同的環境。
                    </p>
                    <p>雙子座的人天生聰明靈活，能夠迅速地掌握新技能和概念。他們善於觀察和分析，對於週遭的環境和事物有著敏銳的洞察力。他們喜歡探索並嘗試新的事物，這讓他們總是能夠帶來新鮮感和創新的想法。</p>
                    <p>雙子座的人天生善於交際和社交，能夠很好地適應不同的社交環境。他們擅長於與人交流，能夠與不同的人建立起良好的關係。他們的開朗和樂觀性格常常讓人感到愉快和輕鬆。</p>
                    @include('../layouts/topads_two')
                    <h2>雙子座 - 愛情、感情</h2>
                    <img src="/images/constellation/gemini_1.jpg" class="img-thumbnail figure-img img-fluid" alt="雙子座">
                    <p>雙子座對於愛情和感情是充滿著好奇心和渴望，他們對於感情充滿著熱情，並且對於新鮮感十分追求。他們天生善於交際，非常喜歡和人群交流，因此在感情方面也是非常主動的，很容易就能吸引到對方的注意。雙子座的人喜歡和對方進行精神層面的交流，尤其是對於愛好相同的人更是如此。
                    </p>
                    <p>然而，由於雙子座的人好奇心強烈，喜歡新鮮感和多元化，所以他們在感情上比較難以長久堅持。當他們失去了對感情的新鮮感和刺激時，他們會感到厭倦，對感情也會逐漸冷淡。因此，對於雙子座的人來說，長久的關係可能需要更多的努力和妥協。
                    </p>
                    <p>另外，雙子座的人也較容易受到外在環境的影響，對於新奇刺激的事物非常敏感，他們往往會因為新的事物而對感情產生變化。所以，在和雙子座的人交往時，需要有耐心和理解，讓他們感受到關心和支持。
                    </p>
                    <p>總體而言，雙子座的人在感情上表現出好奇、主動、追求新鮮感、易受外在影響等特點。因此，對於與雙子座的人交往，需要保持開放、有趣、有耐心和彼此理解，才能擁有一段長久、美好的感情關係。</p>
                    <h2>雙子座 - 家人、朋友</h2>
                    <img src="/images/constellation/gemini_2.jpg" class="img-thumbnail figure-img img-fluid" alt="雙子座">
                    <p>雙子座是一個喜歡與人互動、善於溝通的星座，對於家人和朋友非常重視，能夠建立親密的關係。他們通常喜歡有趣的事情，喜歡和人交流，因此在社交場合中很容易結交朋友。
                    </p>
                    <p>對於家人而言，雙子座通常表現得很照顧和關心，而且對家庭有強烈的歸屬感。他們很喜歡和家人一起玩樂，與家人一起度過時光，讓他們感到非常快樂。另外，雙子座通常很會說話，有時候會講一些有趣的故事或是笑話，讓家人在他們身邊感到開心和放鬆。
                    </p>
                    <p>對於朋友，雙子座也是一個非常好相處的星座。他們通常喜歡結交各式各樣的朋友，從不同的人身上學習到不同的東西。雙子座通常非常開朗、活潑，喜歡在朋友之間擔任橋樑的角色，促進大家之間的交流和了解。他們非常愛好自由，不喜歡被束縛，因此他們通常也會尊重朋友們的生活方式和選擇。
                    </p>
                    @include('../layouts/topads_three')
                    <h2>雙子座 - 事業、金錢</h2>
                    <img src="/images/constellation/gemini_3.jpg" class="img-thumbnail figure-img img-fluid" alt="雙子座">
                    <p>雙子座的人通常非常聰明、機智、多才多藝，有很強的創造力和表達能力，是一群追求知識、思想多變的人。因此，他們在事業上有很多選擇，可以從事文學、傳媒、藝術、科學、商業等各個領域。
                    </p>
                    <p>由於他們擅長與人溝通和交流，往往會選擇需要與人打交道的工作，比如說銷售、市場營銷、公關、顧問等等。他們還非常善於思考和創新，能夠在困境中快速找到解決方案，因此也非常適合從事創業和經營管理。
                    </p>
                    <p>另外，雙子座的人也非常善於學習和適應，他們對於新事物有很強的好奇心和探索欲望，能夠快速掌握新知識和技能。因此，他們也非常適合從事需要不斷學習和進修的職業，比如說教育、研究、科技等等。
                    </p>
                    <p>在金錢方面，雙子座的人通常非常聰明，他們注重理財和投資，擅長分析市場趨勢和風險，能夠做出明智的決策。他們也不會過度消費或浪費金錢，而是會選擇合適的時機和方式進行投資，追求長期穩健的財富增值。
                    </p>
                    <p>然而，雙子座的人有時也會因為好奇心和求新求變的性格而導致不穩定的職業生涯和金錢狀況。他們可能會因為對於新事物的追求而輕易放棄現有的工作或投資，而這樣的行為可能會對他們的穩定性和財務狀況造成一定的影響。
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/zodiac')
</div>
@endsection