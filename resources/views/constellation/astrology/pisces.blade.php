@extends('layouts.main')

@section('title', '雙魚座 - 星座介紹')
@section('description',
'雙魚座是十二星座中的最後一個星座，代表著結束和開始。它的守護行星是海王星和木星，代表著幻想、創造力和智慧。雙魚座的人通常是充滿藝術氣息的夢想家，喜歡在自己的想像中創造新的世界。他們對於別人的痛苦和需要很敏感，總是會盡力幫助他人。雙魚座的人常常不愿意面對現實，常常陷入自己的世界中，但是也因此擁有了豐富的內心世界和強烈的想像力。他們喜歡藝術和音樂，對於自己的情感很敏感。')

@section('main')
<div class="container">
    <h1>雙魚座 - 星座介紹</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/astrology/zodiac">星座</a></li>
            <li class="breadcrumb-item active" aria-current="page">雙魚座 - 星座介紹</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>雙魚座</h2>
                            <p>元素： <span class="badge rounded-pill bg-info">水</span></p>
                            <p>顏色： 海藍色</p>
                            <p>守護星： 海王星</p>
                            <p>最佳配對： <span class="badge rounded-pill bg-info">	巨蟹座</span>、<span
                                    class="badge rounded-pill bg-info">天蠍座</span>、<span
                                    class="badge rounded-pill bg-info">雙魚座</span></p>
                            <p>幸運數字： 3、9、12、15、18、24</p>
                            <p>日期：2/19 ~ 3/20</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/pisces.png" class="figure-img img-fluid" alt="雙魚座">
                        </div>
                    </div>
                    <h2>雙魚座配對指數</h2>
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
                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
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
                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            30</div>
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
                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            65</div>
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
                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            90</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>雙魚座性格特徵</h2>
                    <div class="feature">
                        <p><b>優點：</b>富有同情心、藝術氣質、直覺、溫柔、睿智、音樂</p>
                        <p><b>缺點：</b>害怕、過度信任、悲傷、渴望逃避現實</p>
                        <p><b>雙魚座喜歡：</b>獨處、愛情、睡覺、音樂、浪漫、游泳、精神主題</p>
                        <p><b>雙魚座討厭：</b>無所不知、被批評、往事重現、任何形式的殘忍</p>
                    </div>
                    <p>雙魚座是十二星座中的最後一個星座，它的象徵是兩條游泳向不同方向的魚，代表著雙重的性格和對於追求內在與外在之間的掙扎。雙魚座的人是非常感性和敏感的，他們經常依據感覺而行動，對於別人的情感狀態也有敏銳的觸覺，因此他們是很好的聆聽者和支持者。此外，雙魚座的人常常擁有豐富的想像力和創造力，喜歡藝術和文化活動。
                    </p>
                    <p>雙魚座的人傾向於避免爭吵和衝突，他們更喜歡以和平的方式解決問題。然而，他們也有時候會太過傾向自己的想法，導致缺乏決斷力。他們需要努力學習如何在適當的時候表達自己的觀點，並做出決策。
                    </p>
                    <p>在感情方面，雙魚座的人是非常浪漫和感性的。他們尋找一個能夠與他們深入連結和分享情感的人，通常很忠誠於伴侶。然而，他們也需要學會如何保持獨立和自我，以免在關係中失去自我。
                    </p>
                    <p>在事業方面，雙魚座的人通常喜歡從事與藝術、文化、音樂等相關的工作，並擁有創造力和想像力。他們也很適合從事需要同理心和情感支持的工作，例如諮商師、社工、醫護人員等。然而，由於他們傾向於逃避現實，可能需要努力學習如何處理實際問題和財務管理。</p>
                    @include('../layouts/topads_two')
                    <h2>雙魚座 - 愛情、感情</h2>
                    <img src="/images/constellation/pisces_1.jpg" class="img-thumbnail figure-img img-fluid" alt="雙魚座">
                    <p>雙魚座是一個浪漫、敏感且具有藝術氣質的星座，他們的內心充滿了對愛情和浪漫的渴望。他們往往是溫柔體貼的伴侶，對待感情非常認真，也很有責任感。
                    </p>
                    <p>雙魚座的人會用心聆聽對方的需求，並努力讓他們感到被關注和重視。他們對愛情充滿了理想和幻想，希望能夠與自己的伴侶建立深厚的情感連結。在戀愛關係中，雙魚座的人往往表現得非常浪漫和感性，他們喜歡用詩意的語言表達自己的情感，也喜歡用各種方式營造浪漫的氛圍。
                    </p>
                    <p>不過，雙魚座的人有時也會過於感性和情緒化，容易讓自己陷入情感困境中。他們往往需要找到一個平衡點，既能夠表達自己的情感，同時也需要理性思考和冷靜分析。
                    </p>
                    <p>在友情方面，雙魚座的人很容易與他人建立深厚的情誼。他們對待朋友非常熱心友善，總是願意伸出援手幫助他人。雙魚座的人非常善良和富有同情心，往往可以成為朋友們的情感支柱。</p>
                    <p>然而，雙魚座的人有時也會過於依賴他人，甚至容易受到他人的影響。他們需要學會獨立思考和自我保護，不要過度依賴他人的意見和建議。</p>
                    <h2>雙魚座 - 家人、朋友</h2>
                    <img src="/images/constellation/pisces_2.jpg" class="img-thumbnail figure-img img-fluid" alt="雙魚座">
                    <p>雙魚座的人通常很有同情心，善解人意，這讓他們在家人和朋友中有很好的人緣。他們非常關注自己的親人和朋友，會花時間和精力照顧他們。對於家人，他們會為了家人的幸福和利益而付出很多。他們喜歡與家人和朋友分享自己的感受和想法，也樂於傾聽他人的想法和意見。
                    </p>
                    <p>儘管雙魚座的人很友善，但他們也需要有屬於自己的私人空間。他們需要獨處來沉澱自己的情緒和思維，這也是他們保持內心平衡的重要方式。當他們感到壓力和緊張時，他們可能會選擇暫時疏遠家人和朋友。
                    </p>
                    <p>雙魚座的人非常喜歡創造藝術和美好的事物，因此他們經常會結交一些志同道合的朋友。他們通常很好相處，對於不同文化和背景的人都很包容和開放。但是，由於他們善良而感性的本性，他們也會受到一些不真誠的朋友的傷害和欺騙。因此，雙魚座的人需要在朋友之間保持一定的警惕和謹慎。
                    </p>
                    @include('../layouts/topads_three')
                    <h2>雙魚座 - 事業、金錢</h2>
                    <img src="/images/constellation/pisces_3.jpg" class="img-thumbnail figure-img img-fluid" alt="雙魚座">
                    <p>雙魚座的人在事業和金錢方面可能會遇到一些挑戰。由於他們的想像力和創意很豐富，他們可能會更喜歡從事一些具有藝術性和創造性的工作，例如文學、藝術、音樂等，而不是傳統的商業工作。雙魚座的人也傾向於放棄積極主動的角色，而更喜歡從事需要他們應用創造力和直覺的工作。
                    </p>
                    <p>然而，雙魚座的人在事業上非常有才華，尤其是當他們能夠將自己的創造力與實際問題解決能力相結合時，他們會非常出色。雙魚座的人也非常懂得人際關係，這使得他們在團隊中非常受歡迎。此外，他們也能夠從他們的直覺和想像中獲得獨特的洞察力和靈感，這使得他們在設計和創意行業中非常出色。
                    </p>
                    <p>在財務方面，雙魚座的人通常不太擅長管理自己的財務。他們更傾向於著眼於當前的需要和慾望，而忽略了長期的金錢管理。他們也可能會因為對金錢和物質的追求不太關心而忽略了自己的財務健康。因此，他們需要學會如何管理自己的財務，以確保他們的未來穩定和可持續發展。
                    </p>
                    <p>總的來說，雙魚座的人可以通過將他們的創意和直覺應用於實際的問題上，來發揮他們的事業潛力。他們需要學會更積極地管理自己的財務，並保持對自己的財務狀況的關注。
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/zodiac')
</div>
@endsection