@extends('layouts.zodiac_main')

@section('title', '星座 - 十二星座完整日期、星盤查詢')
@section('description',
'星盤（Natal
Chart）是一種天文學和占星學的工具，用於研究和解讀個人的出生時刻的天體位置和它們之間的關係。它被認為可以提供有關一個人性格、天賦、命運和潛在能力的深入洞察。星盤基於出生時的星體位置和角度，包括太陽、月亮、行星和其他天體。這些資訊被繪製在圓形圖表中，圖表的中心代表地球，外圍則表示太陽系的其他星體。')

@section('main')
<div class="container">
    <h1>星座 - 十二星座完整日期、星盤查詢</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dcode</a></li>
            <li class="breadcrumb-item active" aria-current="page">星座 - 十二星座完整日期、星盤查詢</li>
        </ol>
    </nav>
    @include('../layouts/topads')
    <div class="row row-cols-12 row-cols-md-12 g-12">
        <div class="col">
            <h2>十二星座完整日期表格</h2>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">星座名稱</th>
                        <th scope="col">英文星座名稱</th>
                        <th scope="col">日期</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>白羊座</td>
                        <td>Aries</td>
                        <td>3/21 ~ 4/19</td>
                    </tr>
                    <tr>
                        <td>金牛座</td>
                        <td>Taurus</td>
                        <td>4/20 ~ 5/20</td>
                    </tr>
                    <tr>
                        <td>雙子座</td>
                        <td>Gemini</td>
                        <td>5/21 ~ 6/20</td>
                    </tr>
                    <tr>
                        <td>巨蟹座</td>
                        <td>Cancer</td>
                        <td>6/21 ~ 7/22</td>
                    </tr>
                    <tr>
                        <td>獅子座</td>
                        <td>Leo</td>
                        <td>7/23 ~ 8/22</td>
                    </tr>
                    <tr>
                        <td>處女座</td>
                        <td>Virgo</td>
                        <td>8/23 ~ 9/22</td>
                    </tr>
                    <tr>
                        <td>天秤座</td>
                        <td>Libra</td>
                        <td>9/23 ~ 10/22</td>
                    </tr>
                    <tr>
                        <td>天蠍座</td>
                        <td>Scorpio</td>
                        <td>10/23 ~ 11/21</td>
                    </tr>
                    <tr>
                        <td>射手座</td>
                        <td>Sagittarius</td>
                        <td>11/22 ~ 12/21</td>
                    </tr>
                    <tr>
                        <td>魔羯座</td>
                        <td>Capricorn</td>
                        <td>12/22 ~ 1/19</td>
                    </tr>
                    <tr>
                        <td>水瓶座</td>
                        <td>Aquarius</td>
                        <td>1/20 ~ 2/18</td>
                    </tr>
                    <tr>
                        <td>雙魚座</td>
                        <td>Pisces</td>
                        <td>2/19 ~ 3/20</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row row-cols-12 row-cols-md-12 g-12">
            <div class="col">
                <h2>為什麼星座日期有些許不同?</h2>
                <div class="alert alert-success" role="alert">
                    <p>十二星座的日期之所以有些不一樣，是因為星座是根據太陽在黃道上的位置而定義的。在西方占星學中，十二星座是根據黃道帶的分割而來，每個星座佔據大約30度的黃道。然而，黃道並非完全均勻，而是因為地球的軌道運動而有所變動，這導致星座的實際日期稍有不同。
                    </p>
                    <p>此外，不同的占星學家和占星系統也可能有不同的計算方法和標準，這也可能導致星座日期的差異。要獲得準確的星座可以透過星盤去取得。</p>
                </div>
            </div>
        </div>
        <div class="row row-cols-12 row-cols-md-12 g-12">
            <div class="col">
                <h2>星盤</h2>
                <div class="alert alert-success" role="alert">
                    <p>星盤（Natal Chart）是一種天文學和占星學的工具，用於研究和解讀個人的出生時刻的天體位置和它們之間的關係。它被認為可以提供有關一個人性格、天賦、命運和潛在能力的深入洞察。</p>
                    <p>星盤基於出生時的星體位置和角度，包括太陽、月亮、行星和其他天體。這些資訊被繪製在圓形圖表中，圖表的中心代表地球，外圍則表示太陽系的其他星體。</p>
                </div>
            </div>
        </div>
        <div class="row row-cols-12 row-cols-md-12 g-12">
            <div class="col">
                <h3>出生日期時間</h3>
                {{ csrf_field() }}
                <div class="input-group mb-12">
                    <span class="input-group-text">西元</span>
                    <select class="form-select year" name="year">
                        @for ($i = 1900; $i <= 2050; $i++) <option value={{$i}} @if ($i==1960) selected @endif>{{$i}}
                            </option>
                            @endfor
                    </select>
                    <span class="input-group-text">年</span>
                </div>
                <div class="input-group mb-12 mt-3">
                    <select class="form-select month" name="month">
                        @for ($i = 1; $i <= 12; $i++) <option value={{$i}} @if ($i==1) selected @endif>{{$i}}
                            </option>
                            @endfor
                    </select>
                    <span class="input-group-text">月</span>
                    <select class="form-select day" name="day">
                        @for ($i = 1; $i <= 31; $i++) <option value={{$i}} @if ($i==1) selected @endif>{{$i}}
                            </option>
                            @endfor
                    </select>
                    <span class="input-group-text">日</span>
                </div>
                <div class="input-group mb-12 mt-3">
                    <select class="form-select hour" name="hour">
                        @for ($i = 0; $i <= 23; $i++) <option value={{$i}} @if ($i==0) selected @endif>{{$i}}
                            </option>
                            @endfor
                    </select>
                    <span class="input-group-text">時</span>
                    <select class="form-select minutes" name="minutes">
                        @for ($i = 0; $i <= 59; $i++) <option value={{$i}} @if ($i==0) selected @endif>{{$i}}
                            </option>
                            @endfor
                    </select>
                    <span class="input-group-text">分</span>
                </div>
                <h3 class="mt-3">出生地</h3>
                <div class="input-group mb-12">
                    <span class="input-group-text">地點</span>
                    <select class="form-select location" name="location">
                        <option value='其他' selected>其他</option>
                        <option value="121.5654,25.0330">台北市</option>
                        <option value="121.4737,25.0120">基隆市</option>
                        <option value="121.5389,25.0948">新北市</option>
                        <option value="121.3000,24.9936">桃園市</option>
                        <option value="120.6611,23.9689">新竹市</option>
                        <option value="120.9686,24.8060">新竹縣</option>
                        <option value="121.1736,24.9734">苗栗縣</option>
                        <option value="120.6839,24.1477">台中市</option>
                        <option value="120.9605,23.6978">彰化縣</option>
                        <option value="120.9876,23.8387">南投縣</option>
                        <option value="120.3897,23.7558">雲林縣</option>
                        <option value="120.4879,23.4755">嘉義市</option>
                        <option value="120.5740,22.9979">嘉義縣</option>
                        <option value="120.2053,22.9976">台南市</option>
                        <option value="120.3319,22.6306">高雄市</option>
                        <option value="120.6417,24.1626">屏東縣</option>
                        <option value="121.1480,24.8053">宜蘭縣</option>
                        <option value="121.4424,25.1814">花蓮縣</option>
                        <option value="121.3646,24.6783">台東縣</option>
                        <option value="119.3390,26.1496">澎湖縣</option>
                        <option value="119.5000,26.4000">金門縣</option>
                        <option value="119.9333,26.2167">連江縣</option>
                    </select>
                </div>
                <div class="input-group mb-12 mt-3">
                    <span class="input-group-text">經度<a
                            href="https://support.google.com/maps/answer/18539?hl=zh-Hant&co=GENIE.Platform%3DAndroid"
                            target="_blank" title="如何找出經緯度?"><span class="material-icons-outlined md-14">
                                help_outline
                            </span></a></span>
                    <input type="number" class="form-control longitude" name="longitude" value="0">
                    <span class="input-group-text">緯度<a
                            href="https://support.google.com/maps/answer/18539?hl=zh-Hant&co=GENIE.Platform%3DAndroid"
                            target="_blank" title="如何找出經緯度?"><span class="material-icons-outlined md-14">
                                help_outline
                            </span></a></span>
                    <input type="number" class="form-control latitude" name="latitude" value="0">
                </div>
                <div class="mt-3">
                    <h4>如何找出經緯度</h4>
                    <div class="alert alert-success" role="alert">
                        可以透過google map取的出生地的經緯度，詳細方式可以參考<a
                            href="https://support.google.com/maps/answer/18539?hl=zh-Hant&co=GENIE.Platform%3DiOS&oco=1"
                            target="_blank">這裡</a>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <input class="btn btn-outline-secondary submit-date" type="submit" value="查詢星盤">
                </div>
            </div>
        </div>
        <div class="info-box">
            <div class="d-flex justify-content-center mt-5">
                <div class="card">
                    <div class="card-body">
                        <div id="paper"></div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="mt-5">星位、宮位</h2>
        <div class="info-box">
            <div class="d-flex justify-content-center mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="planet-positions">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex mt-5">
            <table class="table table-striped table-bordered text-center table-hover">
                <thead>
                    <tr>
                        <th class="col-2">星位</th>
                        <th class="col-8">說明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>太陽</th>
                        <td>太陽是星盤中最重要的行星之一，它代表個人的核心本質和意識。太陽象徵著個人的自我、意志力和生命力，它的位置和相對角度在星盤中顯示了一個人的太陽星位。太陽星位的位置可以提供有關個人性格、自我表達方式和個人目標的洞察力。在星盤中，太陽的星位通常被視為個人的核心特質和生命使命的指南針。
                        </td>
                    </tr>
                    <tr>
                        <th>水星</th>
                        <td>水星是星盤中代表溝通、思考和學習能力的行星。它象徵著個人的智力、口才和思維方式。水星的星位位置和相對角度反映了一個人的思考模式、溝通風格和學習能力。水星的星位可以提供有關個人的語言能力、邏輯思考、交流方式以及學習和知識尋求的傾向的信息。在星盤中，水星的位置通常被視為個人思考和溝通的關鍵要素，也反映了個人在表達自己和與他人溝通中的風格和優勢。
                        </td>
                    </tr>
                    <tr>
                        <th>金星</th>
                        <td>金星是星盤中代表愛情、美感和價值觀的行星。它象徵著個人的愛情和關係模式，以及對美感和藝術的喜好。金星的星位位置和相對角度反映了一個人在愛情和關係中的需求、價值觀和吸引力。金星的星位可以提供有關個人的戀愛風格、對伴侶的選擇標準、對美的欣賞和創造力的傾向的信息。在星盤中，金星的位置通常被視為個人關係和愛情生活的關鍵要素，也反映了個人在追求愛情和追求美好事物方面的風格和優勢。
                        </td>
                    </tr>
                    <tr>
                        <th>火星</th>
                        <td>火星是星盤中代表行動、激情和決斷力的行星。它象徵著個人的動力、競爭意識和性能力。火星的星位位置和相對角度反映了一個人在行動、追求目標和解決衝突方面的風格和傾向。火星的星位可以提供有關個人的決斷力、行動力、競爭性和性格特質的信息。在星盤中，火星的位置通常被視為個人能量的指示器，也反映了個人在追求目標、面對挑戰和發揮主導力方面的風格和優勢。火星的位置和相位可以幫助我們了解個人在行動和達成目標方面的特點和挑戰。
                        </td>
                    </tr>
                    <tr>
                        <th>木星</th>
                        <td>木星是星盤中代表擴張、成功和運氣的行星。它象徵著擴大和成長的力量，代表著幸運、機會和豐富。木星的星位位置和相對角度反映了一個人在追求目標、拓展領域和實現成功方面的風格和傾向。木星的星位可以提供有關個人的機遇、成功、信念系統和智慧的信息。在星盤中，木星的位置通常被視為個人運氣的指示器，也反映了個人在拓展和發展方面的能力和優勢。木星的位置和相位可以幫助我們了解個人在事業、學術、信仰和個人成長方面的特點和潛力。
                        </td>
                    </tr>
                    <tr>
                        <th>土星</th>
                        <td>土星是星盤中代表責任、紀律和成就的行星。它象徵著結構、穩定和實際性，代表著人生中的挑戰、限制和成熟。土星的星位位置和相對角度反映了一個人在達成目標、建立結構和實現穩定方面的風格和傾向。土星的星位可以提供有關個人的責任感、堅持力和耐力的信息。在星盤中，土星的位置通常被視為個人成就和專業發展的指示器，也反映了個人在實踐目標、克服困難和建立穩定基礎方面的能力和挑戰。土星的位置和相位可以幫助我們了解個人在事業、財務、關係和個人成長方面的特點和潛力。
                        </td>
                    </tr>
                    <tr>
                        <th>天王星</th>
                        <td>天王星是一顆代表突破、創新和自由的行星。它象徵著個人獨立性、革新思維和對自由的追求。在星盤中，天王星的星位位置和相對角度反映了一個人的非傳統和獨特的特質，以及對社會和個人自由的關注。天王星的星位可以提供有關個人創造力、革新能力和獨立思維的信息。它代表著突破傳統框架、追求個人真理和實現個人理想的力量。天王星的位置和相位可以幫助我們了解個人在社會、人際關係和個人成長方面的獨特特點和潛力。它也可能暗示著個人可能遭遇的變革、突變和意外事件。
                        </td>
                    </tr>
                    <tr>
                        <th>海王星</th>
                        <td>海王星是一顆代表夢想、幻想和靈性的行星。它象徵著個人的想像力、直覺力和靈性追求。在星盤中，海王星的星位位置和相對角度反映了一個人的夢想、幻想和直覺能力，以及對靈性和超越物質界限的關注。海王星的星位可以提供有關個人的創造力、直覺力和靈性體驗的信息。它代表著對無形世界的追求，可能與藝術、音樂、靈性實踐和超感知能力有關。海王星的位置和相位可以幫助我們了解個人在情感、靈性和創造領域的潛能和挑戰。它也可能暗示著個人可能面臨的迷惑、迷失和逃避現實的傾向。
                        </td>
                    </tr>
                    <tr>
                        <th>冥王星</th>
                        <td>冥王星是一顆代表轉變、重生和深度轉化的行星。它象徵著個人的力量、轉型和深層意義的探索。在星盤中，冥王星的星位位置和相對角度反映了一個人的內在力量、轉變的能力和深度洞察力。冥王星的星位可以提供有關個人在面對轉變和深度轉化時的能力和傾向的信息。它代表著個人的力量、權力和深層意義的追求，可能與個人的權力運用、內在變革和心靈成長有關。冥王星的位置和相位可以幫助我們了解個人在面對轉變和深度轉化時的潛能和挑戰。它也可能暗示著個人可能面臨的掌握力、自我控制和深度內省的需求。
                        </td>
                    </tr>
                    <tr>
                        <th>升交點</th>
                        <td>
                            <p>升交點（Ascending
                                Node）是天體軌道與黃道交點中的一個重要概念，也稱為北交點或升交點。在天文學中，黃道是太陽在天空中所經過的路徑，而升交點則是黃道與天球赤道交叉的點。
                            </p>
                            <p>在星盤解讀中，升交點表示天體在出生時通過黃道的那一點，也就是天體從南天球移到北天球的位置。升交點的位置可以影響個人的性格特質、命運和人生路徑。它通常與個人的升星座（ASC）和宮位有關，共同塑造了個人的個性和行為模式。
                            </p>
                            <p>升交點在星盤中的位置可以提供有關個人在生命中重要主題和發展領域的資訊。它被視為個人的靈魂起點，可能影響個人的外在形象、行為風格、人際關係和自我表達方式。</p>
                        </td>
                    </tr>
                    <tr>
                        <th>莉莉絲</th>
                        <td>
                            <p>星盤中的「Lilith」指的是黑月亮（Black Moon
                                Lilith），也稱為「莉莉絲」。它是一個在星盤中的虛點，代表了一種原始、不受約束的能量。黑月亮通常被視為與女性力量、性與情慾、獨立和自由意志等相關。</p>
                            <p>在星盤解讀中，黑月亮的位置可以提供關於個人的深層慾望、黑暗面以及與社會規範相衝突的部分的洞察。它可能揭示出一個人內心深處的欲望、不受約束的本能和原始的力量。黑月亮的位置和與其他行星的相位組合，可以提供更詳細的解讀和理解。
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h2 class="mt=5">四大尖軸</h2>
        <div class="info-box">
            <div class="d-flex justify-content-center mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="aspect">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex mt-5">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>四大尖軸</th>
                        <th>說明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>上升星座 (ASC)</th>
                        <td>也稱為升星座，代表個人出生時東方地平線上的星座。它反映了個人的外在特質、個性表現和第一印象。上升星座可以提供關於個人的外貌、行為風格、舉止和對外界的反應的信息。</td>
                    </tr>
                    <tr>
                        <th>天底星座 (IC)</th>
                        <td>也稱為下中天星座，代表個人出生時西方地平線上的星座。它與家庭、根基、情感和個人生活的私密層面相關。天底星座揭示了個人在家庭和私人生活中的需求、情感安全感以及對家庭和傳統價值觀的重視。
                        </td>
                    </tr>
                    <tr>
                        <th>下降星座 (DSC)</th>
                        <td>也稱為降星座或西升星座，代表個人出生時西方天頂線上的星座。它反映了個人與他人、伴侶關係和社交互動的方式。下降星座提供了關於個人的合作能力、人際關係風格和伴侶選擇的信息。
                        </td>
                    </tr>
                    <tr>
                        <th>天頂星座 (MC)</th>
                        <td>也稱為中天星座，代表個人出生時東方天頂線上的星座。它關聯到個人的事業、社會地位、目標和追求的職業方向。天頂星座顯示了個人在社會和職業領域中的抱負、野心以及對成功和成就的追求。
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    window.zodiac = {!! json_encode(trans('zodiac')) !!};
</script>
@endsection