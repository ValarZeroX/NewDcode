@extends('layouts.main')

@section('title', '射手座 - 星座運勢')
@section('description',
'射手座是十二星座中的第九個星座，其代表符號為弓箭手。射手座的主宰行星是木星，象徵著運氣和幸運。射手座的人通常性格樂觀、開朗、直率、勇敢、熱情，不喜歡束縛和限制，渴望自由和冒險。他們喜歡探索新事物、學習新知識，有很強的好奇心和求知欲。射手座的人也有時會不太注意細節，不善於處理瑣碎的事情，容易衝動，需要更多的耐心和沈穩。')

@section('main')
<div class="container">
    <h1>射手座 - 星座運勢</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/astrology/zodiac">星座</a></li>
            <li class="breadcrumb-item active" aria-current="page">射手座 - 星座運勢</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>射手座</h2>
                            <p>元素： <span class="badge rounded-pill bg-danger">火</span></p>
                            <p>顏色： 藍色</p>
                            <p>守護星： 木星</p>
                            <p>最佳配對： <span class="badge rounded-pill bg-danger">牡羊座</span>、<span
                                    class="badge rounded-pill bg-danger">獅子座</span>、<span
                                    class="badge rounded-pill bg-danger">射手座</span></p>
                            <p>幸運數字： 3、7、9、12、21</p>
                            <p>日期：11/22 ~ 12/21</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/sagittarius.png" class="figure-img img-fluid" alt="射手座">
                        </div>
                    </div>
                    <h2>射手座配對指數</h2>
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
                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            40</div>
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
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            50</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>獅子座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            95</div>
                                    </div>
                                </td>
                                <th>處女座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            40</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>天秤座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                                <th>天蠍座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            60</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>射手座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            90</div>
                                    </div>
                                </td>
                                <th>魔羯座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            50</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>水瓶座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
                                    </div>
                                </td>
                                <th>雙魚座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                            60</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>射手座性格特徵</h2>
                    <div class="feature">
                        <p><b>優點：</b>慷慨、理想主義、極富幽默感</p>
                        <p><b>缺點：</b>承諾多於兌現，非常沒有耐心</p>
                        <p><b>射手座喜歡：</b>自由、旅行、哲學、戶外</p>
                        <p><b>射手座討厭：</b>粘人、拘束、離譜的理論、細節</p>
                    </div>
                    <p>射手座是黃道帶上的第九個星座，屬於火象星座。人們通常將射手座與勇敢、熱情、開朗、樂觀等詞語聯想在一起。射手座的人性格自由奔放，充滿好奇心，對於未知的事物充滿探究的熱情。他們的樂觀、自信、活力和熱情常常讓人們留下深刻印象。</p>
                    <p>射手座的人喜歡冒險和挑戰，他們渴望探索世界的各個角落，無論是實際的旅行還是通過學習和研究來擴展知識領域。他們對於不斷的學習和成長非常重視，也很擅長將自己的經驗和知識與他人分享。
                    </p>
                    <p>對於自由和獨立非常看重，他們不喜歡被約束和限制，希望能夠自由自在地展現自己的才華和能力。他們對於道德和正義也十分敏感，對於不公平和不道德的事情非常反感。
                    </p>
                    <p>在愛情方面也充滿激情和熱情，他們喜歡追求真愛，希望找到一個能夠和自己一起冒險和成長的人。他們對於維持感情的開放和誠實十分看重，不喜歡被束縛和控制。</p>
                    <p>在友情方面，射手座的人做朋友非常熱情開朗，他們的社交圈子往往很廣，善於和各種不同性格的人相處。他們對於朋友的忠誠度很高，非常重視朋友之間的信任和支持。</p>
                    @include('../layouts/topads_two')
                    <h2>射手座 - 愛情、感情</h2>
                    <img src="/images/constellation/sagittarius_1.jpg" class="img-thumbnail figure-img img-fluid" alt="射手座">
                    <p>射手座是熱情洋溢、自由不羈的星座，對於愛情、感情也有著自己的獨特看法。他們認為愛情不應該限制自己的自由，因此尋求的是彼此之間的默契和相互理解，而不是束縛和掌控對方。
                    </p>
                    <p>射手座在愛情方面非常直率，他們喜歡自由自在地去追求自己喜歡的人，也喜歡對心儀的對象表達自己的情感。射手座的人很有魅力，很容易吸引到許多異性的注意，他們也很享受被人追求的感覺。但是，射手座的人對愛情也有著自己的堅持，他們不會輕易妥協，對於那些沒有共同目標和價值觀的人，他們往往會選擇放手。
                    </p>
                    <p>在感情方面，射手座的人很注重心靈上的相容性，他們喜歡有智慧和思想的人，能夠和自己進行有意義的交流和討論。此外，射手座的人也很喜歡冒險和新奇的體驗，他們希望能夠和心儀的人一起創造屬於他們自己的回憶。
                    </p>
                    <p>不過，射手座的人有時也會因為太過自由和冒險而忽略了對感情的維護，對於那些需要安全感和穩定性的人，他們可能無法滿足對方的需求。</p>
                    <h2>射手座 - 家人、朋友</h2>
                    <img src="/images/constellation/sagittarius_2.jpg" class="img-thumbnail figure-img img-fluid" alt="射手座">
                    <p>射手座的人熱愛自由，對待家人和朋友也是如此。他們是熱情洋溢、樂觀開朗的人，總是能夠在朋友之間建立良好的關係。射手座的人非常喜歡交朋友，擁有眾多的朋友是他們的一種享受。射手座的人喜歡獨立思考，所以在朋友圈裡，他們經常會是個独立思考、有自己看法的人。
                    </p>
                    <p>對家人有著深厚的感情，他們會用自己的方式表達出來。家人對他們來說非常重要，射手座的人也總是盡力維護家人的利益。不過，射手座的人比較自由奔放，可能會和家人產生一些分歧，所以射手座的人需要調整好自己的態度，多理解家人的想法。
                    </p>
                    <p>喜歡分享自己的想法和經歷，也樂於傾聽別人的故事。他們喜歡刺激和冒險，對於那些願意和他們一起冒險的朋友非常珍惜。射手座的人很少把自己關在家裡，他們會鼓勵自己和朋友們出去走走，去經歷更多的事情。
                    </p>
                    <p>在友誼上，射手座的人尊重朋友的自由，絕不會做出過分的要求，他們喜歡和志同道合的人在一起，不會強求自己和朋友們有相同的興趣和嗜好。射手座的人樂於接受不同的觀點和文化，因此他們的朋友圈也相當廣泛。</p>
                    @include('../layouts/topads_three')
                    <h2>射手座 - 事業、金錢</h2>
                    <img src="/images/constellation/sagittarius_3.jpg" class="img-thumbnail figure-img img-fluid" alt="射手座">
                    <p>射手座是一個樂觀、積極和有冒險精神的星座。他們對事業和金錢的態度也是如此。他們喜歡追求自己的夢想和挑戰，往往有著不屈不撓的精神。在事業方面，射手座傾向於追求自由、多樣化和創新。他們可能會有許多不同的興趣和才能，因此可能會嘗試不同的職業或行業。
                    </p>
                    <p>射手座的人對於金錢通常持有著輕鬆、隨和的態度。他們相信金錢不是萬能的，而且賺錢只是達成目標的手段之一。射手座的人通常會選擇一份能夠滿足他們的生活需求、提供足夠自由和彈性的工作。他們可能會更注重事業的成就和貢獻，而不是金錢回報。然而，射手座的人也會有保障自己經濟能力的需求，因此他們通常會保持著節儉和理財的習慣。
                    </p>
                    <p>他們往往能夠在各種環境中找到自己的位置。他們的開放心態和多元文化的背景使得他們能夠融入不同的文化、群體和行業。射手座的人可能會嘗試不同的事情，從旅遊到學習新技能，從創業到參加志願服務。他們喜歡在不同的經驗中學習和成長，並且相信這些經驗可以幫助他們達到更高的事業和人生目標。
                    </p>
                    <p>在事業和金錢方面，射手座的人可能會面臨一些挑戰。他們可能會感到自己的興趣和才能太廣泛，而無法集中精力在一件事情上。此外，射手座的人可能會過於樂觀，導致在決策和規劃方面缺乏謹慎性。但是，射手座的人有冒險精神，這可以促使他們冒險嘗試新的想法和方法，有時也會帶來意想不到的收穫。射手座的人也有很強的好奇心和求知欲，他們願意不斷學習和嘗試新的東西，這可能有助於他們在事業上取得成功
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/zodiac')
</div>
@endsection