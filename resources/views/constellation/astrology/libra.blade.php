@extends('layouts.main')

@section('title', '天秤座 - 星座運勢')
@section('description',
'天秤座的代表符號是天秤，象徵著平衡和公正。天秤座的人通常具有和諧、溫和、優雅、美感和理智等特點。他們喜歡和平、公正和平等，並且在人際關係中非常擅長斡旋和調和矛盾。天秤座的人也很注重外表和形象，喜歡打扮得體、精緻，對美感有很高的鑑賞力。天秤座的人很有人情味，對於家庭和朋友也非常重視。他們崇尚和諧的生活方式，喜歡營造一個溫馨、舒適的家庭環境，也喜歡和親朋好友交往、聚會。此外，天秤座的人也很懂得享受生活，喜歡追求高品質的生活享受，例如美食、藝術、音樂、旅遊等。')

@section('main')
<div class="container">
    <h1>天秤座 - 星座運勢</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item"><a href="/astrology/zodiac">星座</a></li>
            <li class="breadcrumb-item active" aria-current="page">天秤座 - 星座運勢</li>
        </ol>
    </nav>
    <div class="row flex-nowrap justify-content-between">
        <div class="box">
            @include('../layouts/topads')
            <div class="card">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <h2>天秤座</h2>
                            <p>元素： <span class="badge rounded-pill bg-success">風</span></p>
                            <p>顏色： 淺藍色</p>
                            <p>守護星： 金星</p>
                            <p>最佳配對： <span class="badge rounded-pill bg-success">雙子座</span>、<span
                                    class="badge rounded-pill bg-success">天秤座</span>、<span
                                    class="badge rounded-pill bg-success">水瓶座</span></p>
                            <p>幸運數字： 4、6、13、15、24</p>
                            <p>日期：9/23 ~ 10/22</p>
                        </div>
                        <div class="col">
                            <img src="/images/constellation/libra.png" class="figure-img img-fluid" alt="天秤座">
                        </div>
                    </div>
                    <h2>天秤座配對指數</h2>
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
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            100</div>
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
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
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
                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            90</div>
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
                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            80</div>
                                    </div>
                                </td>
                                <th>魔羯座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            70</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>水瓶座</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            95</div>
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
                    <h2>天秤座性格特徵</h2>
                    <div class="feature">
                        <p><b>優點：</b>合作、外交、親切、公正、社交</p>
                        <p><b>缺點：</b>優柔寡斷，避免對抗，會懷恨在心，自憐</p>
                        <p><b>天秤座喜歡：</b>和諧、溫柔、與人分享、戶外活動</p>
                        <p><b>天秤座討厭：</b>暴力、不公正、大聲喧嘩</p>
                    </div>
                    <p>天秤座的人生來追求平衡和和諧，他們善於觀察周圍的環境和人際關係，善於協調矛盾和不同的意見。他們喜歡美麗和藝術，有一定的審美品味，追求高品質的生活。由於他們喜歡和平和諧的氛圍，因此通常會盡力避免衝突和爭執，甚至在某些情況下會過度妥協和委曲求全。
                    </p>
                    <p>天秤座的人熱愛社交和人際交往，懂得與人相處，善於表達自己的意見和感受，往往受到身邊人的喜愛和尊重。他們對於公正和正義有著高度的追求，並且相信真理和公平會最終戰勝一切。他們也非常在意自己的形象和外表，喜歡穿著得體、舒適，給人留下良好的印象。
                    </p>
                    <p>然而，天秤座的人也有一些弱點。由於他們過於注重平衡和和諧，有時會犯懶惰和優柔寡斷的毛病。他們很容易受到外界的影響，缺乏自信和獨立思考的能力。此外，他們也不喜歡面對不愉快的事情和情感，有時會逃避現實和責任。
                    </p>
                    <p>在愛情和感情方面，天秤座的人非常浪漫和追求浪漫，他們喜歡有著平等和互惠的愛情關係。他們希望對方能夠理解自己的需要和情感，並且有著良好的溝通和協調能力。在友情方面，天秤座的人也很重視和諧和友誼，喜歡與志同道合的人交往和分享生活。他們很有同情心，願意幫助身邊的人，讓他們感受到溫暖和關懷。</p>
                    @include('../layouts/topads_two')
                    <h2>天秤座 - 愛情、感情</h2>
                    <img src="/images/constellation/gemini_1.jpg" class="img-thumbnail figure-img img-fluid" alt="天秤座">
                    <p>天秤座是一個追求平衡和和諧的星座，這也反映在他們對愛情和感情的追求上。他們通常喜歡浪漫和甜言蜜語，並渴望有一個美好的愛情故事。天秤座的人對感情很謹慎，會在選擇伴侶時仔細地權衡利弊。
                    </p>
                    <p>他們喜歡傾聽對方的心聲，也善於為對方創造浪漫和驚喜。他們很注重平等和公正，希望在感情中能夠得到相應的尊重和回報。因此，在感情中，他們會儘可能地平衡自己和對方的需求，並尋求一種雙贏的關係。
                    </p>
                    <p>然而，由於他們經常尋求平衡和妥協，天秤座的人有時可能會有點優柔寡斷，尤其是在面對困難決策時。他們也有可能會因為過分注重對方的感受而忽略了自己的需求。因此，他們需要在愛情和感情中找到一種平衡點，既能夠關注自己的需求，又能夠關注對方的感受。
                    </p>
                    <p>在感情中，天秤座的人也非常注重外表和形象。他們希望自己和對方都能夠保持良好的形象，因此他們會花時間和精力在裝扮和打扮上。不過，他們也不會只關注外表，對於內在的品質和特質也非常看重。</p>
                    <h2>天秤座 - 家人、朋友</h2>
                    <img src="/images/constellation/gemini_2.jpg" class="img-thumbnail figure-img img-fluid" alt="天秤座">
                    <p>天秤座是一個非常友好、溫柔和有調和能力的星座。他們非常愛護自己的家人和朋友，並願意為他們做任何事情。他們通常不會在朋友之間挑選，因為他們想要和所有人都建立良好的關係。他們善於聆聽和理解他人，能夠容易地站在別人的角度去思考問題。
                    </p>
                    <p>對於家人而言，天秤座非常注重家庭和諧。他們會盡力創造一個和睦、溫馨的家庭氛圍，並樂於為家人提供支持和幫助。他們非常關心家人的健康和幸福，也會盡力解決家庭問題。
                    </p>
                    <p>對於朋友而言，天秤座非常容易相處。他們喜歡在社交場合中認識新的朋友，並願意分享自己的時間和精力。他們也很關心朋友的需要，並會盡力幫助他們解決問題。然而，由於他們喜歡和所有人都建立良好關係，有時可能會讓朋友感覺不夠重視。
                    </p>
                    @include('../layouts/topads_three')
                    <h2>天秤座 - 事業、金錢</h2>
                    <img src="/images/constellation/gemini_3.jpg" class="img-thumbnail figure-img img-fluid" alt="天秤座">
                    <p>天秤座的人通常是愛好和平、協調與公正的，這些特質同樣反映在他們的事業和金錢觀上。他們常常會傾向於從事需要協調與平衡的職業，例如法律、公共關係、藝術設計、醫學等，並且能夠在不同的利益之間找到平衡點。
                    </p>
                    <p>他們通常擁有很好的交際能力和人脈，能夠在不同的社交場合中游刃有餘。這使得他們在從事需要與人溝通和合作的職業中非常成功。此外，他們也具有很好的分析能力和判斷力，能夠快速找到問題的關鍵，並提出有效的解決方案。
                    </p>
                    <p>在財務方面，天秤座的人通常是理性和謹慎的，他們會仔細考慮每一筆花費，並儘可能地避免浪費。他們也能夠有效地管理自己的財務，使得自己的金錢狀況穩定和可持續發展。不過，有時候他們也會因為過於追求平衡和公正而犧牲自己的經濟能力，需要注意保持自我平衡。
                    </p>
                    <p>在職場上，天秤座的人通常是很有主見和自信的，但同時也不會忽視團隊合作和共識的重要性。他們善於協調和調和不同意見，能夠讓團隊成員和諧共處，共同達成目標。由於天秤座的人通常具有藝術天賦，因此很多人在藝術和文化領域取得成功。
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/zodiac')
</div>
@endsection