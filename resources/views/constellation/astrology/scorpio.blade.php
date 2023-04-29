@extends('layouts.main')

@section('title', '天蠍座 - 星座介紹')
@section('description',
'天蠍座是十二星座之一，屬於水象星座，代表著深刻、神秘和熱情。天蠍座的人往往充滿熱情和魅力，他們有強烈的洞察力和直覺能力，喜歡探索人生的意義和深層次的事情。他們很少表現自己的情感，但對於身邊人的情感卻有極強的感應力，能夠理解和感受到他人的情感和需求。天蠍座的人內心深處總是帶著一些神秘的東西，讓人感到不可捉摸和難以了解。')

@section('main')
<div class="container">
    <h1>天蠍座 - 星座介紹</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/astrology/zodiac">星座</a></li>
            <li class="breadcrumb-item active" aria-current="page">天蠍座 - 星座介紹</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>天蠍座</h2>
                            <p>元素： <span class="badge rounded-pill bg-info">水</span></p>
                            <p>顏色： 紅色、黑色</p>
                            <p>守護星： 冥王星</p>
                            <p>最佳配對： <span class="badge rounded-pill bg-info">巨蟹座</span>、<span
                                    class="badge rounded-pill bg-info">天蠍座</span>、<span
                                    class="badge rounded-pill bg-info">雙魚座</span></p>
                            <p>幸運數字： 8、11、18、22</p>
                            <p>日期：10/23 ~ 11/21</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/scorpio.png" class="figure-img img-fluid" alt="天蠍座">
                        </div>
                    </div>
                    <h2>天蠍座配對指數</h2>
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
                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>雙子座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            50</div>
                                    </div>
                                </td>
                                <th>巨蟹座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            95</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>獅子座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
                                    </div>
                                </td>
                                <th>處女座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>天秤座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            60</div>
                                    </div>
                                </td>
                                <th>天蠍座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            100</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>射手座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            50</div>
                                    </div>
                                </td>
                                <th>魔羯座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            60</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>水瓶座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            40</div>
                                    </div>
                                </td>
                                <th>雙魚座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            95</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>天蠍座性格特徵</h2>
                    <div class="feature">
                        <p><b>優點：</b>足智多謀、強大、勇敢、熱情、真正的朋友</p>
                        <p><b>缺點：</b>不信任、嫉妒、操縱、暴力</p>
                        <p><b>天蠍座喜歡：</b>真實、事實、正確、才華、戲弄、激情</p>
                        <p><b>天蠍座討厭：</b>不誠實、洩露秘密、膚淺、閒聊</p>
                    </div>
                    <p>天蠍座的人通常被描述為強烈而神秘的人，他們經常被認為是情感深刻的人，具有敏銳的直覺和豐富的想像力。天蠍座的人擁有極強的意志力和堅定不移的性格，很少會被外在的壓力或誘惑所左右。他們往往能夠維持冷靜和理智的態度，並從困境中找到出路。天蠍座的人非常自信，有著強烈的野心和毅力，總是追求自己的目標。
                    </p>
                    <p>他們對人類情感和心理學有著非常深入的理解和洞察力。他們對於神秘、隱秘和未知的事物也很感興趣，因此經常被認為是一些秘密團體或神秘組織的成員。
                    </p>
                    <p>感情上他們很容易被深深地吸引並投入到感情中去。他們通常對自己的伴侶非常專注和忠誠，但如果他們感到受到背叛或失望，他們也會變得極端憤怒和報復心態。因此，天蠍座的人往往需要一個有安全感的關係，以便充分表達他們的情感。
                    </p>
                    <p>在事業上，天蠍座的人非常聰明、獨立和有野心。他們通常很適合在需要專業技能和高度創造力的工作中發揮自己的才能，例如藝術、音樂、科學、心理學和犯罪學等領域。此外，天蠍座的人也很擅長於經營和管理，因為他們很有決斷力和卓越的洞察力。</p>
                    <p>總的來說，天蠍座的人有著獨特的性格和魅力，他們往往能夠帶來驚人的成就和巨大的貢獻。但是，由於他們的強烈情感和報復性格，有時他</p>
                    @include('../layouts/topads_two')
                    <h2>天蠍座 - 愛情、感情</h2>
                    <img src="/images/constellation/scorpio_1.jpg" class="img-thumbnail figure-img img-fluid" alt="天蠍座">
                    <p>天蠍座的人是充滿熱情和感性的人，他們對愛情和感情非常認真和深刻。他們需要與伴侶建立起深厚的情感聯繫，而不僅僅是外在的吸引力。因此，對於天蠍座的人來說，愛情和感情是一種奉獻和承諾，需要兩人共同經營。
                    </p>
                    <p>他們對於情感的深度和真實性有極高的要求。他們喜歡在愛情關係中探索新的事物和經歷，同時也渴望能夠建立起一個安全、穩定和持久的關係。
                    </p>
                    <p>然而，天蠍座的人同樣也有著敏感和多疑的性格，他們容易陷入情感的波動中。當他們感到受到傷害或背叛時，他們可能會變得非常激動和嫉妒，對伴侶產生猜疑和不信任。因此，建立信任和尊重是非常重要的，這樣才能讓天蠍座的人在感情中獲得安全感和幸福。
                    </p>
                    <p>另外，天蠍座的人對於性也有著強烈的渴望和好奇心。他們喜歡探索和體驗新的性愛方式和方式，並且會非常投入和享受這種體驗。但是，天蠍座的人也非常重視兩人之間的感情連結，他們不會只是單純追求性愛的快感，而是希望與伴侶建立起深刻的情感聯繫。</p>
                    <h2>天蠍座 - 家人、朋友</h2>
                    <img src="/images/constellation/scorpio_2.jpg" class="img-thumbnail figure-img img-fluid" alt="天蠍座">
                    <p>天蠍座的人是非常忠誠、敏感和富有感情的人。他們對於家人和朋友有著非常強烈的歸屬感，總是願意為了他們做出犧牲和付出。同時，他們也希望得到家人和朋友的支持和理解。
                    </p>
                    <p>通常不會輕易地交出自己內心深處的感受，但是對於家人和朋友，他們會更加信任和坦誠。他們會傾聽和理解他們的需求和感受，同時也會盡力幫助他們解決問題。不過，如果天蠍座的人覺得自己的信任被背叛，他們可能會變得非常敏感和不信任。
                    </p>
                    <p>在家庭和友情關係中，天蠍座的人也非常注重感情的深度和質量。他們認為，表面上的禮貌和熱情並不足以建立真正的關係。因此，他們會花時間去了解自己的家人和朋友，以便更好地了解他們的內心，從而建立更深層次的關係。
                    </p>
                    @include('../layouts/topads_three')
                    <h2>天蠍座 - 事業、金錢</h2>
                    <img src="/images/constellation/scorpio_3.jpg" class="img-thumbnail figure-img img-fluid" alt="天蠍座">
                    <p>天蠍座的人非常有冒險精神和企業家精神，他們對於事業非常有野心和決心，有著無比的毅力和耐力去達成目標。他們通常是高度自我激勵的，有很強的適應能力和反應能力，能夠應對環境中的變化。
                    </p>
                    <p>對金錢的態度是非常謹慎和保守的，他們很清楚自己的價值觀，並且不會隨意破壞自己的原則，因此他們經常會制定合理的預算計劃，儘管他們願意冒險，但他們不會過度冒險，而是尋求穩健的投資方式。
                    </p>
                    <p>對於工作非常認真和負責任，他們會在工作中努力追求卓越和完美。他們非常擅長掌握人際關係，因此在工作中也表現出了良好的團隊合作能力和協調能力。
                    </p>
                    <p>天蠍座的人往往對於職業生涯有著非常明確的目標和計劃，他們會不斷地學習和成長，以便為未來的發展做好準備。他們通常有很強的領導能力和創新能力，可以在創業或事業的發展中獨當一面。
                    </p>
                    <p>總的來說，天蠍座的人在事業和金錢方面非常謹慎和有計劃，並且會通過自己的努力和決心達成自己的目標。他們擅長掌握人際關係，對於職業生涯有著明確的規劃和目標，對於未來充滿信心和希望。
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/zodiac')
</div>
@endsection