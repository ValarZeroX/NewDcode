@extends('layouts.main')

@section('title', '水瓶座 - 星座介紹')
@section('description',
'水瓶座他們天生好奇心強，喜歡探索新事物和思想，獨立自主，個性鮮明。他們非常開放，喜歡和不同背景、文化的人相處，對於社會和人類的未來充滿著探索和幻想。水瓶座的人很聰明，思維靈活，很擅長分析和創新，喜歡解決複雜的問題。')

@section('main')
<div class="container">
    <h1>水瓶座 - 星座介紹</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/astrology/zodiac">星座</a></li>
            <li class="breadcrumb-item active" aria-current="page">水瓶座 - 星座介紹</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>水瓶座</h2>
                            <p>元素： <span class="badge rounded-pill bg-success">風</span></p>
                            <p>顏色： 淺藍色、銀色</p>
                            <p>守護星： 天王星</p>
                            <p>最佳配對： <span class="badge rounded-pill bg-warning">處女座</span>、<span
                                    class="badge rounded-pill bg-success">天秤座</span>、<span
                                    class="badge rounded-pill bg-success">水瓶座</span></p>
                            <p>幸運數字： 4、7、11、22、29</p>
                            <p>日期：1/20 ~ 2/18</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/aquarius.png" class="figure-img img-fluid" alt="水瓶座">
                        </div>
                    </div>
                    <h2>水瓶座配對指數</h2>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="col-1">牡羊座</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            60</div>
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
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                                <th>巨蟹座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>獅子座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            60</div>
                                    </div>
                                </td>
                                <th>處女座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            85</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>天秤座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            100</div>
                                    </div>
                                </td>
                                <th>天蠍座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 70%" aria-valuenow="4070" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>射手座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                                <th>魔羯座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
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
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>水瓶座性格特徵</h2>
                    <div class="feature">
                        <p><b>優點：</b>進步的、原創的、獨立的、人道主義的</p>
                        <p><b>缺點：</b>逃避情緒表達，喜怒無常，不妥協，冷漠</p>
                        <p><b>水瓶座喜歡：</b>與朋友一起玩樂、冒險的生意、為事業而戰、智力對話。</p>
                        <p><b>水瓶座討厭：</b>限制、失信、孤獨、沉悶或乏味的情況。</p>
                    </div>
                    <p>水瓶座的人通常具有開放和創新的思維方式，追求獨立和自由。他們喜歡與眾不同，嘗試新鮮事物和想法。水瓶座的人常常富有想像力和創意，有時也會非常理想主義和理性。他們喜歡思考和探究，可能會涉及哲學、科學、技術、藝術等領域。
                    </p>
                    <p>在人際交往方面，水瓶座的人可能會比較難捉摸和獨立。他們傾向於有自己的社交圈子，但不太需要與人親密。水瓶座的人傾向於支持平等和公正，通常與那些有自己思想和追求的人交往。
                    </p>
                    <p>在事業和金錢方面，水瓶座的人可能會有不同尋常的職業選擇和目標。他們可能會被新興的、前沿的領域吸引，喜歡研究和發現新事物。水瓶座的人可能會有獨特的創意和想法，但也可能需要努力學習如何將這些創意轉化為實際的項目或產品。在財務方面，水瓶座的人通常會注重平衡和節制，但也可能會因為追求創意和理想而忽略了實際的經濟狀況。
                    </p>
                    <p>總的來說，水瓶座的人是追求自由和創新的人，他們傾向於與有追求和思想的人交往，通常有著非常獨特的人生追求。</p>
                    @include('../layouts/topads_two')
                    <h2>水瓶座 - 愛情、感情</h2>
                    <img src="/images/constellation/aquarius_1.jpg" class="img-thumbnail figure-img img-fluid" alt="水瓶座">
                    <p>水瓶座是一個開放、獨立的星座，因此他們在愛情和感情方面通常也表現得非常獨立。他們很重視自己的自由和獨立性，不喜歡被束縛和限制。因此，他們可能會表現得相對冷淡，需要一些時間才能真正地與他人建立情感聯繫。
                    </p>
                    <p>然而，一旦水瓶座的人建立起感情聯繫，他們通常會非常投入和忠誠。他們非常關心他們所愛的人，願意為他們做任何事情。但是，他們通常也會對愛情和感情保持一定的理性，他們不會輕易地被感性和情感所左右，而是會更多地考慮事情的實際和現實性。
                    </p>
                    <p>水瓶座的人也非常擅長思考和探索，他們通常會對一些非傳統的愛情和感情形式保持開放的態度。例如，他們可能更傾向於接受開放式的關係或多元戀愛關係。他們也會更傾向於與有共同興趣和價值觀的人建立關係，而不是只因為浪漫的愛情而在一起。
                    </p>
                    <p>水瓶座的人在愛情和感情方面表現得非常獨立、理性和開放。他們通常會尊重他人的自由和獨立性，但也希望他人能夠尊重他們的獨立和自由。</p>
                    <h2>水瓶座 - 家人、朋友</h2>
                    <img src="/images/constellation/aquarius_2.jpg" class="img-thumbnail figure-img img-fluid" alt="水瓶座">
                    <p>水瓶座是一個重視友情的星座，他們與朋友之間的聯繫比與家人之間的聯繫更為緊密。水瓶座通常喜歡結交不同背景和興趣愛好的人，他們希望能夠學習到不同的觀點和經驗。水瓶座喜歡獨立和自由，但也需要與人交流和溝通，與他們在一起，你會感受到他們充滿活力和創造力。水瓶座很有責任感，會盡力幫助朋友解決問題。
                    </p>
                    <p>水瓶座對家人也十分關心，尤其是對父母。他們雖然不是那種表達方式很熱情的人，但在心底里，他們會很關心家人的一舉一動。水瓶座通常會為家人的福利和未來而努力工作，尤其是對於自己的孩子，他們會為他們提供最好的教育和生活條件。
                    </p>
                    <p>水瓶座也是一個很有社交能力的星座，他們通常能夠獲得許多朋友和社交資源，這有助於他們在事業上獲得成功。水瓶座對於朋友和家人的支持和鼓勵也非常重要，他們需要得到來自身邊人的支持和肯定，才能更加自信和努力地前進。
                    </p>
                    <p>水瓶座是一個注重人際關係和社交網絡的星座，他們與朋友和家人之間的聯繫都很密切，會盡力為他們提供幫助和支持。在與水瓶座相處的過程中，你會感受到他們的熱情和創造力，同時也會受益於他們廣泛的社交資源。</p>
                    @include('../layouts/topads_three')
                    <h2>水瓶座 - 事業、金錢</h2>
                    <img src="/images/constellation/aquarius_3.jpg" class="img-thumbnail figure-img img-fluid" alt="水瓶座">
                    <p>水瓶座的人通常具有創新和獨立的精神，喜歡嘗試新的事物和方法。他們也很理性，有計劃地制定自己的目標和計劃。這些特點使得水瓶座的人在事業和財務方面有一定的優勢。
                    </p>
                    <p>在事業方面，水瓶座的人喜歡在工作中發揮自己的創意和獨立性。他們喜歡解決問題和嘗試新的方法，這使得他們在創新性和領導能力方面有很大的發揮空間。水瓶座的人也善於處理複雜的問題，因為他們可以看到整個圖像，而不僅僅是局部細節。
                    </p>
                    <p>然而，水瓶座的人可能會過於理性和獨立，導致在團隊中缺乏溝通和協作能力。他們也可能會因過於獨立和創新而不願意遵守規則和傳統。因此，水瓶座的人需要學會與他人合作和溝通，以充分發揮自己的潛力。
                    </p>
                    <p>在財務方面，水瓶座的人通常具有理性和審慎的特點。他們通常不會衝動地進行投資或消費，而是製定計劃並遵循自己的預算。水瓶座的人也有創新的思維，他們可能會嘗試新的投資方式和理財策略。
                    </p>
                    <p>然而，水瓶座的人也可能過於樂觀和理想化，導致在金融決策和投資方面缺乏謹慎性。他們也可能會因為過於關注未來而忽略當前的財務狀況。因此，水瓶座的人需要注意保持理性和審慎，以確保自己的財務穩定和安全。
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/zodiac')
</div>
@endsection