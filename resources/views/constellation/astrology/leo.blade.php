@extends('layouts.main')

@section('title', '獅子座 - 星座運勢')
@section('description',
'獅子座的人通常性格豪放、自信、有野心、熱情、創造力強，並且對自己的形象和聲譽非常在意。他們也很慷慨大方、大度、講義氣、具有領導才能和決策力。獅子座們通常非常自信，有時甚至會顯得過於自信，但是這樣的自信也使他們有著非凡的魅力和能力去實現自己的願望。他們熱愛表現自己，希望成為眾人矚目的焦點，並擁有受人尊敬和讚揚的感覺。')

@section('main')
<div class="container">
    <h1>獅子座 - 星座運勢</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/astrology/zodiac">星座</a></li>
            <li class="breadcrumb-item active" aria-current="page">獅子座 - 星座運勢</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>獅子座</h2>
                            <p>元素： <span class="badge rounded-pill bg-danger">火</span></p>
                            <p>顏色： 金色</p>
                            <p>守護星： 太陽</p>
                            <p>最佳配對： <span class="badge rounded-pill bg-danger">牡羊座</span>、<span
                                    class="badge rounded-pill bg-danger">射手座</span>、<span
                                    class="badge rounded-pill bg-danger">獅子座</span></p>
                            <p>幸運數字： 1、3、10、19</p>
                            <p>7/23 ~ 8/22</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/leo.png" class="figure-img img-fluid" alt="獅子座">
                        </div>
                    </div>
                    <h2>獅子座配對指數</h2>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="col-1">牡羊座</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            100</div>
                                    </div>
                                </td>
                                <th class="col-1">金牛座</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            65</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>雙子座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
                                    </div>
                                </td>
                                <th>巨蟹座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>獅子座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            90</div>
                                    </div>
                                </td>
                                <th>處女座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
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
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>射手座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            95</div>
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
                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
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
                    <h2>獅子座性格特徵</h2>
                    <div class="feature">
                        <p><b>優點：</b>有創意、熱情、大方、熱心、開朗、幽默</p>
                        <p><b>缺點：</b>傲慢、固執、以自我為中心、懶惰、不靈活</p>
                        <p><b>獅子座喜歡：</b>戲劇、度假、被欣賞、昂貴的東西、鮮豔的色彩、和朋友一起玩</p>
                        <p><b>獅子座討厭：</b>被忽視、面對困難的現實、不像國王或王后那樣對待</p>
                    </div>
                    <p>獅子座的人通常有著強烈的個性和自信，是一個極具魅力的星座。他們喜歡成為關注的焦點，也樂於在人群中表現自己。獅子座非常自信，他們深信自己有能力成為領導者，並且往往能夠成功地實現這一目標。他們通常具有高度的決斷力和領導能力，這使得他們在各種場合都能夠表現出色。
                    </p>
                    <p>此外，獅子座還有一些其他的性格特徵。他們通常非常慷慨和大方，經常願意為他人付出。獅子座喜歡享受生活，他們通常有很高的品味和要求，對於美好事物有著極高的追求。獅子座的人也很有自信心，相信自己的能力和決策，但有時候也會表現出固執和自大的一面。
                    </p>
                    <p>獅子座也是一個非常熱情的星座，他們熱愛生命，對於自己的目標和夢想充滿熱情和動力。他們喜歡把自己的熱情和正能量傳遞給身邊的人，讓大家都能夠感受到他們的熱情和動力。
                    </p>
                    <p>總的來說，獅子座的人有著強烈的自信和個性，擁有著極高的領導能力和決斷力，同時也非常慷慨和熱情。但有時候也會表現出自大和固執的一面，需要更多的包容和理解。</p>
                    @include('../layouts/topads_two')
                    <h2>獅子座 - 愛情、感情</h2>
                    <img src="/images/constellation/leo_1.jpg" class="img-thumbnail figure-img img-fluid" alt="獅子座">
                    <p>獅子座通常對愛情充滿熱情和渴望，他們喜歡被愛和受到關注，並且希望自己的伴侶對他們充滿崇敬和欽佩。他們對愛情充滿信心和自信心，相信自己可以為伴侶帶來快樂和幸福。獅子座也非常重視浪漫和感性的表達，喜歡在愛情中展現自己的創造力和才華，讓伴侶感受到自己的熱情和真誠。
                    </p>
                    <p>不過，獅子座也有一定的驕傲和自我中心，他們希望在愛情中得到尊重和讚美，並且喜歡掌控和主導感情的節奏。如果遇到對自己沒有足夠欣賞和崇敬的伴侶，獅子座可能會感到受到了冷落和忽視，進而變得不耐煩和暴躁。
                    </p>
                    <p>獅子座也非常重視自己的形象和外在表現，希望自己的伴侶能夠給予自己足夠的尊重和讚美，讓自己在愛情中更加自信和有吸引力。他們喜歡在公共場合展示自己的愛情，並且願意花費金錢和時間來為伴侶製造浪漫和驚喜。
                    </p>
                    <p>獅子座在愛情中也非常忠誠和忠實，對於自己的伴侶會有很強的保護和照顧意識，並且願意為伴侶犧牲和付出。但是，他們也需要得到對方的理解和支持，否則可能會產生情感上的矛盾和摩擦。</p>
                    <h2>獅子座 - 家人、朋友</h2>
                    <img src="/images/constellation/leo_2.jpg" class="img-thumbnail figure-img img-fluid" alt="獅子座">
                    <p>獅子座是一個非常重視家庭和友情的星座，他們熱情、忠誠、大方、慷慨，對於家人和朋友都會表現出極大的關心和愛護。他們是非常好客的人，經常邀請朋友到家中聚會，並願意為他們做任何事情。在獅子座看來，家庭和友情是生命中最重要的事情之一，他們會盡力維護這些關係。
                    </p>
                    <p>對於家庭，獅子座非常關心父母和兄弟姐妹，他們願意為家人付出任何的時間和精力。在家庭中，獅子座通常是領袖性的人物，他們會帶領家庭走向更好的方向，並為家人做出決策。獅子座非常重視家庭和諧和幸福的氛圍，他們會盡力去創造一個溫馨、和睦的家庭環境。
                    </p>
                    <p>對於朋友，獅子座也非常重視友情，他們願意和朋友分享他們的成功和快樂，也願意在朋友需要幫助時伸出援手。獅子座的朋友通常很多，因為他們非常外向和友好，喜歡結交各種各樣的人。在朋友之間，獅子座通常是活力四射、引領風騷的人物，他們經常組織各種活動和聚會，讓朋友們度過愉快的時光。
                    </p>
                    @include('../layouts/topads_three')
                    <h2>獅子座 - 事業、金錢</h2>
                    <img src="/images/constellation/leo_3.jpg" class="img-thumbnail figure-img img-fluid" alt="獅子座">
                    <p>獅子座在事業和金錢方面的表現通常都相當優秀。他們通常具有領導才能和堅定的決心，能夠在工作中為自己和團隊帶來成功。獅子座非常注重自己的形象和聲譽，他們渴望在職場上取得成功並贏得他人的讚揚。
                    </p>
                    <p>獅子座很有自信，並相信自己的能力可以為自己帶來財富。他們通常會投資於具有高回報的事業或項目，並能夠通過自己的努力實現財務自由。然而，由於獅子座通常比較浪費和奢侈，他們需要注意在花費上的控制，以避免出現金錢上的困難。
                    </p>
                    <p>另外，獅子座也很注重自己的職業發展。他們通常會積極地追求更高的職位和更好的薪酬待遇，並不斷努力提升自己的能力和技能。他們也很善於與人溝通和建立關係，能夠在職場上獲得更多的機會和支持。
                    </p>
                    <p>總的來說，獅子座在事業和金錢方面的表現都相當優秀，但也需要注意在花費和投資上的控制，以免陷入金錢上的困難。他們需要不斷努力提升自己的能力和技能，以保持自己在職場上的競爭力，並實現自己的職業發展目標。
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/zodiac')
</div>
@endsection