@extends('layouts.main')

@section('title', '星座 - 十二星座')
@section('description', '十二星座是西方占星術中的重要元素，分別代表了不同的星座符號，象徵著不同的性格特質和命運走向。白羊座代表著勇氣和熱情，金牛座代表著實用和耐力，雙子座代表著機智和多才多藝，巨蟹座代表著情感和家庭，獅子座代表著自尊和榮耀，處女座代表著細心和完美主義，天秤座代表著和諧和平衡，天蠍座代表著神秘和激情，射手座代表著自由和冒險，魔羯座代表著實現和穩定，水瓶座代表著獨立和創新，雙魚座代表著敏感和浪漫。透過了解十二星座的特點，可以更好地了解自己和身邊的人，更好地應對生活中的挑戰和機會。')

@section('main')
<div class="container">
    <h1>星座 - 十二星座</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page">星座 - 十二星座</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="row row-cols-12 row-cols-md-12 g-12">
        <div class="col">
            <h2>十二星座</h2>
            <div class="alert alert-success" role="alert">
                <p>當有人問：“你的星座是什麼？” 他們指的是你的太陽星座。在占星術中，您的黃道帶（或太陽）星座對您的生活和個性影響最大！根據你出生那一刻富有表現力的太陽的位置，你可能是 12 個星座之一，每個星座都有自己的一套優勢、挑戰、情緒、模式、關係等等。在這裡，我們慶祝每個星座的獨特性！</p>
                <p>每個星座都是不同的。每個星座都與其自己的行星、元素、原型、季節等有著深刻而直接的聯繫，所有這些都在該星座表達的特徵和情感中發揮著作用。了解您自己的星座的性質可以幫助您獲得個人觀點、成長以及與周圍宇宙和地球的更大聯繫。</p>
           </div>
        </div>
    </div>
    <div class="row row-cols-12 row-cols-md-12 g-12">
        <div class="col">
            <h2>火象星座</h2>
            <div class="alert alert-info" role="alert">
                 <p>這三個星座由快速而活躍的火元素統治，想法樂觀，個性普遍直率、真誠，討厭猜忌，感情通常喜歡主動出擊。他們照亮了生活，無論走到哪裡都能引起人們的注意。白羊座、獅子座和射手座隨時準備煽動他人並開始新事物，他們是黃道十二宮的真正開拓者。</p>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>牡羊座</h2><small class="text-muted mx-2"> 3/21 ~ 4/19</small>
                </div>
                <div class="caard-header">
                    <div id="aries" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>他們是天生的領導者，不容忽視！他們隨時準備負責並征服他們遇到的任何挑戰。勇敢而有競爭力的白羊座是一股強大的力量，在新的領域開闢道路，尋找未被發現的寶藏。這個無畏的星座以戰士的身份生活，為它所接觸的一切注入火焰、激情和力量。</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/astrology/zodiac/aries" role="button">詳細說明</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>獅子座</h2><small class="text-muted mx-2"> 7/23 ~ 8/22</small>
                </div>
                <div class="caard-header">
                    <div id="leo" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>在充滿活力的太陽的統治下，在火元素的溫暖的驅使下，迷人、華麗、戲劇化的獅子是派對的生命，熱愛關注。擁有一顆閃亮的金子般的心，獅子座是一個忠誠的情人，也是一個驕傲而勇敢的領導者。獅子的這個標誌體現了皇室的氣息，就像叢林中的國王和王后一樣。獅子座有時會表現出錯誤，但從來不知道隱藏自己的感情！避開獅子座的戲劇性，你會發現一些獅子座會是所見過的最慷慨的人。</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/astrology/zodiac/leo" role="button">詳細說明</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>射手座</h2><small class="text-muted mx-2"> 11/22 ~ 12/21</small>
                </div>
                <div class="caard-header">
                    <div id="sagittarius" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>這一星座的人性格開朗，思想活躍，注重文化修養，同時又不忘放眼世界。你人在現實生活，但思想常常飛向遙遠的過去和美好的未來。射手座的人熱情洋溢，對生活充滿火熱的激情。你從不計較個人的得失，不論是在思想上還是在行動上，你隨時都準備去經歷風險。你對人生、未來和樂觀情緒使你永葆青春。在人生道路上，你所做的一切努力都是為了使人們擺脱困境。此外，樂觀主義精神，健康的體魄和快樂的情緒會給你帶來運氣和廣泛的好感。你很善於幫助和鼓舞自己與周圍的人，並振奮他們的精神。</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/astrology/zodiac/sagittarius" role="button">詳細說明</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-12 row-cols-md-12 g-12">
        <div class="col">
            <h2>土象星座</h2>
            <div class="alert alert-info" role="alert">
                 <p>在堅實實用的土象的影響下，這三個星座在力量、決心和實用性上茁壯成長，與物質世界合二為一。他們專注而有紀律，渴望完成工作。金牛座、處女座和摩羯座是十二生肖中最務實的星座，在世界上創造真正的基礎感和安全感。</p>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>金牛座</h2><small class="text-muted mx-2"> 4/20 ~ 5/20</small>
                </div>
                <div class="caard-header">
                    <div id="taurus" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>金牛座知道如何放慢腳步，欣賞生活中美好的事物。穩定的金牛既耐心又堅定，過著與辛勤工作和豐厚回報相平衡的生活。金牛座的性格就像牛一般，態度穩定，處世相當慎重，但在另一方面也很頑固，只要一發起脾氣來，往往沒有人能夠阻止。金牛座的人，經常滿面笑容，不愛管閒事，也不會破壞別人的和平相處，可算是相當高明的社交高手。</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/astrology/zodiac/taurus" role="button">詳細說明</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>處女座</h2><small class="text-muted mx-2"> 8/23 ~ 9/22</small>
                </div>
                <div class="caard-header">
                    <div id="virgo" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>這個勤奮、注重細節和挑剔的標誌由處女座代表，因為它的純潔和挑剔的天性。善於觀察的處女座能迅速發現缺陷並加以修復，幫助他人發揮最大潛力。處女座最強大的能力之一就是吸收大量信息，只挑選重要和有用的信息。這使得處女座成為所有星座中最俱生產力和效率的星座之一。</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/astrology/zodiac/virgo" role="button">詳細說明</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>魔羯座</h2><small class="text-muted mx-2"> 12/22 ~ 1/19</small>
                </div>
                <div class="caard-header">
                    <div id="capricorn" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>這一星座的人性格開朗，思想活躍，注重文化修養，同時又不忘放眼世界。你人在現實生活，但思想常常飛向遙遠的過去和美好的未來。射手座的人熱情洋溢，對生活充滿火熱的激情。你從不計較個人的得失，不論是在思想上還是在行動上，你隨時都準備去經歷風險。你對人生、未來和樂觀情緒使你永葆青春。在人生道路上，你所做的一切努力都是為了使人們擺脱困境。此外，樂觀主義精神，健康的體魄和快樂的情緒會給你帶來運氣和廣泛的好感。你很善於幫助和鼓舞自己與周圍的人，並振奮他們的精神。</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/astrology/zodiac/capricorn" role="button">詳細說明</a>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/topads_two')
    <div class="row row-cols-12 row-cols-md-12 g-12">
        <div class="col">
            <h2>風象星座</h2>
            <div class="alert alert-info" role="alert">
                 <p>這三個星座由清晰直接的風元素統治，包含真理、對話和想法。他們是真理和正義的傳播者、調解者和鬥士。憑藉敏銳的頭腦和真正的社會意識，雙子座、天秤座和水瓶座是十二星座的智力代表。</p>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>雙子座</h2><small class="text-muted mx-2"> 5/21 ~ 6/20</small>
                </div>
                <div class="caard-header">
                    <div id="gemini" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>聰明而好奇的雙子座是一個思維敏捷、溝通順暢、充滿想法的星座。他們的多功能性和適應性源於他們分裂的個性部分是智慧，部分是散漫！雙胞胎以信息為動力，在與他人分享想法和對話時感到最自在。雙子座就像一塊海綿，盡可能多地吸收信息。無論是通過閱讀、談話還是寫作，雙子座對知識的渴望是不變的。作為十二星座中最健談的星座，雙胞胎以善於社交而著稱，並且總是在尋找美好時光。蓬勃發展的多樣性，你永遠不知道你會得到什麼雙子座！</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/astrology/zodiac/gemini" role="button">詳細說明</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>天秤座</h2><small class="text-muted mx-2"> 9/23 ~ 10/22</small>
                </div>
                <div class="caard-header">
                    <div id="libra" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>金星守護的天秤座是一個充滿愛意的星座，非常注重夥伴關係並優先考慮他人的需求。這個天秤座的星座天生具有對錯的感覺，這使他們非常注重正義、誠實和公平。作為平衡的標誌，天秤座代表頭腦和心靈他們注重邏輯和事實，以確保一切都在上升和上升，但真正在一對一關係的相互感情和親密關係中茁壯成長. 內外兼修的天秤座代表著和諧、優雅和平等。</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/astrology/zodiac/libra" role="button">詳細說明</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>水瓶座</h2><small class="text-muted mx-2"> 1/20 ~ 2/18</small>
                </div>
                <div class="caard-header">
                    <div id="aquarius" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>水瓶座的人，不願意接受情感上的絲毫束縛。你時而異想天開，幽默過人，時而又冷若冰霜，令人費解，這常常是一個不易相處的人。有優秀的推理力和求知精神，客觀、冷靜，善於思考，講求科學、邏輯和概念，價值觀很強。是一個只忠於自己的信念，又令人難以捉摸的星座。</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/astrology/zodiac/aquarius" role="button">詳細說明</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-12 row-cols-md-12 g-12">
        <div class="col">
            <h2>水象星座</h2>
            <div class="alert alert-info" role="alert">
                 <p>水象星座包括巨蟹座、天蠍座和雙魚座。他們情感豐富，直覺敏銳，擅長理解和共情他人。巨蟹座以家庭和安全感為重，天蠍座熱情且有強烈的洞察力，雙魚座則富有想像力和同情心。水象星座的人通常能夠感受到他人的情緒波動，並且在處理情感問題時表現出色。這使他們成為朋友和家庭中的心靈支柱。</p>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>巨蟹座</h2><small class="text-muted mx-2"> 6/21 ~ 7/22</small>
                </div>
                <div class="caard-header">
                    <div id="cancer" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>巨蟹座頑強忠誠和愛心，是黃道十二宮的養育者，會極力保護自己和他們珍視的一切。他們是戀人，不是戰士，但會永遠為他們所愛的人而戰。巨蟹座的硬殼體現了巨蟹座的舒適、安全和保護。這個星座與母性的優雅和兇猛有關，使他們既感性又直覺，並且深受潛意識思想和感覺的影響。</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/astrology/zodiac/cancer" role="button">詳細說明</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>天蠍座</h2><small class="text-muted mx-2"> 10/23 ~ 11/21</small>
                </div>
                <div class="caard-header">
                    <div id="scorpio" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>有很多天蠍座人個性冷淡、沉默，這符合沙漠帶給人的印象。不論你談論什麼，他都會有點沉默寡言和不動嘴，他/她的每次的回答總是乾巴巴的、讓人難以理解。不想把自己的事情和內心想法公開出來，這是他/她們經常的説辭。很注重個人隱私，實際上，對於天蠍座人來説，她根本不認為那種真心話大冒險的遊戲有什麼意義。</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/astrology/zodiac/scorpio" role="button">詳細說明</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="well card">
                <div class="card-header">
                    <h2>雙魚座</h2><small class="text-muted mx-2"> 2/19 ~ 3/20</small>
                </div>
                <div class="caard-header">
                    <div id="pisces" class="zodiac center-div"></div>
                </div>
                <div class="card-body">
                    <p>充滿了同情心和同理心，他們經常把別人的需要放在自己的前面。由海王星統治的雙魚座天生具有直覺和令人難以置信的創造力。雙魚座有著海洋一樣深邃和廣闊的靈魂，在幻想世界中茁壯成長，在那裡它的想像力可以自由流動。在與精神世界的緊密聯繫的推動下，魚的星座知道如何在冷酷的現實與愛和理解的溫暖之間取得平衡。</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-sm btn-outline-secondary" href="/astrology/zodiac/pisces" role="button">詳細說明</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection