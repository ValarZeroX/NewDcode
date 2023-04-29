@extends('layouts.main')

@section('title', '巨蟹座 - 星座介紹')
@section('description',
'巨蟹座的代表符號是螃蟹，牠們的性格通常被形容為敏感、情感豐富、保護性強、愛家、善良和溫柔。巨蟹座的人有著非常豐富的想像力和感性的特點，對家庭和朋友非常重視，喜歡在自己的空間中享受生活。他們通常非常關注情感和人際關係，但也很容易受到情緒的波動影響。巨蟹座的人做事穩健，是很好的聆聽者和忠誠的朋友，但有時也會顯得固執和敏感。')

@section('main')
<div class="container">
    <h1>巨蟹座 - 星座介紹</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/astrology/zodiac">星座</a></li>
            <li class="breadcrumb-item active" aria-current="page">巨蟹座 - 星座介紹</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>巨蟹座</h2>
                            <p>元素： <span class="badge rounded-pill bg-info">水</span></p>
                            <p>顏色： 白色</p>
                            <p>主宰星： 月亮</p>
                            <p>最佳配對： <span class="badge rounded-pill bg-warning">金牛座</span>、<span
                                    class="badge rounded-pill bg-info">雙魚座</span>、<span
                                    class="badge rounded-pill bg-info">天蠍座</span></p>
                            <p>幸運數字： 2、3、15、20</p>
                            <p>日期：6/21 ~ 7/22</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/cancer.png" class="figure-img img-fluid" alt="巨蟹座">
                        </div>
                    </div>
                    <h2>巨蟹座配對指數</h2>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="col-1">牡羊座</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                            55</div>
                                    </div>
                                </td>
                                <th class="col-1">金牛座</th>
                                <td class="col-5">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100">
                                            100</div>
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
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
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
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            75</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>天秤座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            40</div>
                                    </div>
                                </td>
                                <th>天蠍座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            85</div>
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
                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            65</div>
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
                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            90</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>巨蟹座性格特徵</h2>
                    <div class="feature">
                        <p><b>優點：</b>頑強、豐富想像力、忠誠、情緒化、富有同情心、有說服力</p>
                        <p><b>缺點：</b>喜怒無常、悲觀、多疑、控制欲強、缺乏安全感</p>
                        <p><b>巨蟹座喜歡：</b>藝術、家庭愛好、在水邊或水中放鬆、幫助所愛的人、與朋友一起享用美食</p>
                        <p><b>巨蟹座討厭：</b>陌生人、任何對媽媽的批評、私生活的暴露</p>
                    </div>
                    <p>巨蟹座的人通常情感豐富，充滿著熱情和同理心。他們很重視家庭和家人，也非常關心朋友和周圍的人。巨蟹座的人情緒化，容易受到環境和周圍人的情緒影響，因此他們需要一個穩定的環境和支持系統來保持情緒穩定。他們是非常敏感的人，容易感受到他人的情感和需求，因此常常會成為朋友和家人的心靈寄託。
                    </p>
                    <p>巨蟹座的人也很注重家庭生活，他們喜歡與家人在一起並且享受傳統的價值觀。他們非常善於照顧和保護自己的家人，願意為家庭做出任何努力。此外，巨蟹座的人也很有創造力和想象力，他們喜歡藝術和文學，對於音樂、文化和歷史等也有著濃厚的興趣。
                    </p>
                    <p>然而，巨蟹座的人也有一些缺點。他們可能會陷入情感的波動中，有時會讓自己陷入負面情緒中，而且有時會過於情緒化，讓自己變得過於脆弱。此外，他們也很注重自己的舒適和安全，有時可能會因為安逸而缺乏勇氣和挑戰自己的精神。
                    </p>
                    <p>總體而言，巨蟹座的人是非常溫暖和關心的人，他們的情感深刻且敏感，也非常愛家人和朋友。他們的創造力和想象力使他們成為藝術和文學方面的佼佼者，然而他們的情緒化和對舒適的追求也可能成為他們的缺點。
                    </p>
                    @include('../layouts/topads_two')
                    <h2>巨蟹座 - 愛情、感情</h2>
                    <img src="/images/constellation/cancer_1.jpg" class="img-thumbnail figure-img img-fluid" alt="巨蟹座">
                    <p>巨蟹座是一個極度感性和情感豐富的星座，他們對愛情和感情非常看重，通常會表現出極度的關心和關注。他們很容易感受到別人的情感，並且能夠對此做出細膩的反應，因此往往被稱為“感性的鑽石”。
                    </p>
                    <p>在愛情方面，巨蟹座非常浪漫且認真，他們尋求真正的連接和情感上的投入。他們很容易被對方的細節所吸引，並且非常重視家庭和關係的穩定性。對於巨蟹座來說，一個穩定的家庭和溫暖的愛情是最重要的，因此他們通常會努力創造一個溫馨的家庭環境和穩定的關係。
                    </p>
                    <p>在感情方面，巨蟹座非常重視友情和親密關係，他們往往是一個團體中最友善和體貼的人。他們通常會努力維護關係，並且會表現出極度的包容和理解。巨蟹座的人們很容易被他們的真誠和關懷所吸引，因此通常有很多朋友和親密的關係。
                    </p>
                    <h2>巨蟹座 - 家人、朋友</h2>
                    <img src="/images/constellation/cancer_2.jpg" class="img-thumbnail figure-img img-fluid" alt="巨蟹座">
                    <p>巨蟹座是十二星座中最為家庭和善的星座之一，家人和朋友對於他們而言非常重要。他們有一種強烈的保護慾和關愛態度，常常會無私地照顧家人和朋友，為他們提供各種支持和幫助。
                    </p>
                    <p>對於巨蟹座來說，家庭是他們最重要的一環。他們非常珍惜親密的關係，會不遺餘力地照顧家人的需要。巨蟹座的人通常對家庭事務非常熟悉，他們會經常參與到家庭中各種決策和事務中，尤其是對於家人的健康和幸福，他們會特別關注和關心。
                    </p>
                    <p>此外，巨蟹座也非常善於維護友誼和建立友情。他們通常非常親切和友好，喜歡結交新朋友，並且會維持長期穩定的友誼關係。巨蟹座的人非常善於聆聽和關心別人，會為朋友提供幫助和支持，並且樂於分享他們自己的生活和經驗。
                    </p>
                    <p>不過，巨蟹座的人也有一些需要改進的地方。他們有時會對自己的家人和朋友過度關心和擔憂，甚至可能有些過度保護和控制。此外，他們也可能過度依賴朋友和家人的意見，需要在這方面學習更加自主和獨立。</p>
                    @include('../layouts/topads_three')
                    <h2>巨蟹座 - 事業、金錢</h2>
                    <img src="/images/constellation/cancer_3.jpg" class="img-thumbnail figure-img img-fluid" alt="巨蟹座">
                    <p>巨蟹座對於事業和金錢的看法，通常是比較保守和穩健的。他們很注重家庭和家人，因此在職業和工作選擇上，會傾向選擇穩定的職業和收入。他們通常是很謹慎的決策者，會仔細思考和評估每一個選擇，以避免任何風險和不確定性。
                    </p>
                    <p>巨蟹座是很有創造力和想像力的人，他們通常在藝術、設計、文學等創意行業中表現得很好。此外，他們也很善於與人相處，因此在與公眾互動的工作，如餐飲、旅遊、社交活動等方面也會表現出色。
                    </p>
                    <p>在財務方面，巨蟹座通常是非常謹慎的，他們很注重儲蓄和理財。他們會儘可能地減少不必要的開支，並努力增加自己的資產和財富。此外，巨蟹座也很注重質量和耐久性，他們願意為購買高品質的物品付出更多的代價，並且願意維護和保養這些物品，使其使用壽命更長。
                    </p>
                    <p>巨蟹座在事業方面也非常勤奮和積極，他們往往將自己的家庭和事業視為一體，會以家庭為中心，努力創造更好的環境和生活質量。由於巨蟹座具有很好的洞察力和領悟力，他們能夠在很短的時間內發現問題並解決問題，這使得他們在管理和領導方面非常出色。
                    </p>
                    <p>此外，巨蟹座還擅長與人溝通和交際，他們能夠與不同的人建立良好的關係，這在商業和職場上非常重要。巨蟹座通常非常謹慎和細心，能夠有效地規劃和管理時間和資源，並且經常制定長遠的計劃和目標。他們也很懂得欣賞生活的美好，會將工作和休閒適當地平衡，從而達到事業和生活的雙贏。
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/zodiac')
</div>
@endsection