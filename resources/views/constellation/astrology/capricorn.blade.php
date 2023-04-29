@extends('layouts.main')

@section('title', '摩羯座 - 星座介紹')
@section('description',
'摩羯座是黃道帶上第十個星座。它的象徵是山羊，象徵著耐力和毅力。摩羯座的人通常非常有計劃性和目標導向，以實現他們的抱負和野心。他們往往對自己和身邊的人都很嚴格，並以實際行動和成就為尊。他們通常表現出冷靜、理性、可靠和勤奮的特質，從而為自己贏得了不少成功。')

@section('main')
<div class="container">
    <h1>摩羯座 - 星座介紹</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/astrology/zodiac">星座</a></li>
            <li class="breadcrumb-item active" aria-current="page">摩羯座 - 星座介紹</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>摩羯座</h2>
                            <p>元素： <span class="badge rounded-pill bg-warning">土</span></p>
                            <p>顏色： 棕色、黑色</p>
                            <p>守護星： 土星</p>
                            <p>最佳配對： <span class="badge rounded-pill bg-warning">金牛座</span>、<span
                                    class="badge rounded-pill bg-info">巨蟹座</span>、<span
                                    class="badge rounded-pill bg-warning">摩羯座</span></p>
                            <p>幸運數字： 4、8、13、22</p>
                            <p>日期：12/22 ~ 1/19</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/capricorn.png" class="figure-img img-fluid" alt="摩羯座">
                        </div>
                    </div>
                    <h2>摩羯座配對指數</h2>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="col-1">牡羊座</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            40</div>
                                    </div>
                                </td>
                                <th class="col-1">金牛座</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            85</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>雙子座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            30</div>
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
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            50</div>
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
                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            65</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>射手座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                            55</div>
                                    </div>
                                </td>
                                <th>魔羯座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            90</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>水瓶座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                            45</div>
                                    </div>
                                </td>
                                <th>雙魚座</th>
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
                    <h2>摩羯座性格特徵</h2>
                    <div class="feature">
                        <p><b>優點：</b>有責任感、紀律嚴明、自我控制、優秀的管理者</p>
                        <p><b>缺點：</b>無所不知、不寬容、居高臨下、做最壞的打算</p>
                        <p><b>摩羯座喜歡：</b>家庭、傳統、音樂、低調的地位、高品質的工藝</p>
                        <p><b>摩羯座討厭：</b>浪費時間和金錢、不尊重規則和傳統、過度浮躁和情緒化</p>
                    </div>
                    <p>摩羯座是黃道帶上的第十二個星座，也是土象星座之一。摩羯座的象徵是山羊，象徵著積極、實際、有耐性和耐力的品質。
                    </p>
                    <p>摩羯座的人通常非常踏實和努力，他們善於獨立思考和計劃，並能夠忍耐和耐心地工作，以實現自己的目標。他們往往有很高的自律性和責任感，非常認真地對待自己的事業和生活。
                    </p>
                    <p>摩羯座的人也很現實，注重實際的事物，善於理財和管理金錢。他們通常對自己的未來有明確的規劃，並為此而不斷奮斗。
                    </p>
                    <p>摩羯座的人也被認為是非常保守的，他們往往對新事物持有懷疑態度，需要更多的時間來接受和習慣。此外，他們也被認為是非常沉默寡言和內向的，不太擅長表達自己的情感。</p>
                    @include('../layouts/topads_two')
                    <h2>摩羯座 - 愛情、感情</h2>
                    <img src="/images/constellation/capricorn_1.jpg" class="img-thumbnail figure-img img-fluid" alt="摩羯座">
                    <p>摩羯座的人通常在愛情和感情方面是非常穩定和踏實的。他們認為愛情是需要經營和投資的，他們會認真對待自己的感情並且願意為之付出努力。因為摩羯座的人通常非常謹慎，他們在選擇伴侶時也會非常慎重，需要對方具備穩定、成熟的品質，以及值得信賴和尊重的人格特質。
                    </p>
                    <p>在戀愛關係中，摩羯座的人會盡可能地保持忠誠和專注。他們往往會表現出務實和穩健的態度，認為愛情需要經營和持續的投入，而不是浪漫和熱情的衝動。雖然摩羯座的人可能不太擅長表達自己的情感，但他們通常會用實際行動來表達對伴侶的愛和關懷。
                    </p>
                    <p>不過，摩羯座的人在表達情感和放鬆自己方面可能需要更多的時間和努力。他們往往過於關注工作和事業，因此可能需要伴侶的鼓勵和支持，才能更好地關注自己的感情生活。如果伴侶能夠理解他們的努力和犧牲，並且幫助他們平衡工作和感情，摩羯座的人就能夠擁有幸福穩定的戀愛關係。
                    </p>
                    <p>總的來說，摩羯座的人在愛情和感情方面通常表現出實際和穩健的特質。他們需要的是一個值得信任和尊重的伴侶，以及共同努力經營和維繫感情的信念和決心。</p>
                    <h2>摩羯座 - 家人、朋友</h2>
                    <img src="/images/constellation/capricorn_2.jpg" class="img-thumbnail figure-img img-fluid" alt="摩羯座">
                    <p>摩羯座的人重視家庭和友誼，對他們來說，家人和朋友是人生中最重要的支柱之一。儘管他們有時可能會因專注於自己的事業而忽略家人和朋友，但他們深知家人和朋友的重要性，並會盡力保持與他們的聯繫。
                    </p>
                    <p>對於家人而言，摩羯座的人是忠誠和關愛的。他們會盡力提供穩定和安全的家庭環境，同時也希望家庭成員尊重和遵循家庭的規則和傳統。雖然他們可能會比較嚴格和保守，但他們的目的是確保家庭的穩定和繁榮。
                    </p>
                    <p>對於朋友而言，摩羯座的人可能會有些保守和謹慎，但一旦他們建立起信任和友誼，他們會成為可靠的和持久的朋友。他們通常會與那些目標明確、自律且有責任感的人交往，與那些缺乏目標和決心的人則不太合拍。
                    </p>
                    <p>摩羯座的人通常會與那些與他們的價值觀相符的人交往，他們會尊重並欣賞那些懂得自我控制和克制的人，而不喜歡那些過於浮躁和情緒化的人。在朋友之間，摩羯座的人往往會表現出非常務實和實用的特點，他們通常不喜歡太多的娛樂活動，而是更喜歡與朋友分享共同的利益和成就。</p>
                    @include('../layouts/topads_three')
                    <h2>摩羯座 - 事業、金錢</h2>
                    <img src="/images/constellation/capricorn_3.jpg" class="img-thumbnail figure-img img-fluid" alt="摩羯座">
                    <p>摩羯座的人在事業和金錢方面通常非常努力和堅定。他們往往非常注重事業的穩定和成功，因此很有可能會將自己投入到一份工作中並長時間地努力工作。摩羯座的人也很有耐心，能夠承受長時間的壓力和重複的工作，這使他們在許多職業中非常成功，尤其是在企業、金融和法律領域。
                    </p>
                    <p>在金錢方面，摩羯座的人通常非常節儉和謹慎。他們喜歡有穩定的儲蓄，並願意為將來做出儲蓄計劃和投資決策。由於他們很謹慎，因此很少會在決策上冒險，這也意味著他們往往不會有過度的消費或債務。此外，摩羯座的人還非常重視工作的回報，他們往往會為了更好的職業前途而願意花費更多的時間和精力。
                    </p>
                    <p>不過，摩羯座的人也可能有一些不足。由於他們太過注重工作和金錢，很可能會忽略自己的健康和家庭生活。他們可能會將太多時間花在工作上，從而導致身體疲勞和壓力。此外，他們也可能會在與家人和朋友的關係上缺乏靈活性和耐心，這可能會對他們的人際關係造成影響。
                    </p>
                    <p>摩羯座的人在事業和金錢方面通常非常有耐心、專注和堅定。他們會為實現自己的目標而不斷努力，同時也會非常重視儲蓄和投資。但是，他們也需要關注自己的身體健康和人際關係，以保持整體的平衡和幸福。
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/zodiac')
</div>
@endsection