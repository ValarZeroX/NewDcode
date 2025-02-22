<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Tarot\TarotRepositories;
use App\Services\Tarot\TarotServices;
use App\Repositories\Tarot\DailyRepositories;
use Illuminate\Support\Facades\App;

class TarotController extends Controller
{
    private $oTarotServices;
    private $oTarotRepositories;
    private $oDailyRepositories;
    private $aImage = [
        1 => 'one_card.jpg',
        2 => 'three_card.jpg',
        3 => 'tarot_card.jpg',
        4 => 'four_element.jpg',
        5 => 'six_pointed_star.jpg',
        6 => 'two_card.jpg',
        7 => 'tarot_background.jpg',
        8 => 'nine_card.jpg',
        9 => 'one_card.jpg',
    ];
    private $aDict = [
        1 => [
            '單張牌占卜法',
            '類型:結果型、是否型;張數:1張;適合占卜單一事件的結果或是非、今日運勢。',
            'onecard',
            1
        ],
        2 => [
            '聖三角占卜法',
            '類型:時間型;張數:3張;針對問題做出解釋與推測，對於瞭解問題狀況與推估未來發展有很大幫助。',
            'threecard',
            2
        ],
        3 => [
            '四張牌占卜法',
            '類型:分析型;張數:4張;四張卡片提供以下訊息 :; -已知的問題;-未知的問題;-問題點在哪;-如何解決',
            'fourcard',
            3
        ],
        4 => [
            '四元素占卜法',
            '類型:分析型;張數:4張;火:面對問題如何採取行動。;風:面對問題的理解，有那些負面的狀況。;水:關於問題對於情感還有當事人周遭的發展。;土:關於這個問題的實際層面考量、物質資源上的發展。',
            'fourelement',
            4
        ],
        5 => [
            '六芒星占卜法',
            '類型:綜合型;張數:7張;1.表示問題的過去直到目前為止的原因。;2.表示問題的現在。;3.表示問題的未來。;4.表示較近的未來影響(當事人的想法)。;5.表示稍遠的未來影響(環境與幫助)。;6.表示長久的影響(周圍的限制與會遇到的麻煩)。;7.表示對這個問題最後的預測。',
            'six-pointed-star',
            5
        ],
        6 => [
            '友誼占卜法',
            '類型:分析型;張數:6張;1.代表你對對方的看法。;2.代表對方對你的看法。;3.代表你認為目前雙方關係。;4.代表對方認為目前雙方關係。;5.代表你期望未來雙方關係的發展。;6.代表對方期望未來雙方關係的發展。',
            'friendship',
            6
        ],
        7 => [
            '每周運勢占卜',
            '類型:時間型、綜合型;張數:7張;1.太陽:星期日，或代表整體運勢。;2.月亮:星期一，或代表情緒、內心世界、與親人或親密伴侶的關係。;3.火星:星期二，代表行動、工作、性愛。;4.水星:星期三，或代表學習、交通、溝通、朋友。;5.木星:星期四，或代表理想、工作、願望、帶來好運的事情。;6.金星:星期五，或代表金錢、愛情。;7.土星:星期六，或代表限制、困難、帶來厄運的事情。',
            'week',
            7
        ],
        8 => [
            '二選一占卜法',
            '類型:分析型;張數:5張;面臨二選一狀況時，最常用的占卜法。;例如:該選擇A君還是B君?該繼續升學或是就?諸如此類有關抉擇的問題，能夠提供相當好的建議與解答。',
            'either',
            8
        ],
        // 9 => [
        //     '暗戀塔羅牌占卜法',
        //     '類型:分析型;張數:1張;您是否在暗戀某人，但不確定下一步應該做什麼？暗戀塔羅牌會了解你們之間的狀態，並就如何處理今天的互動提供建議。',
        //     'flirt',
        //     9
        // ],
    ];

    public function __construct(TarotServices $_oTarotServices, TarotRepositories $_oTarotRepositories, DailyRepositories $_oDailyRepositories)
    {
        $this->oTarotServices = $_oTarotServices;
        $this->oTarotRepositories = $_oTarotRepositories;
        $this->oDailyRepositories = $_oDailyRepositories;
    }

    public function drawListLang($locale)
    {
        App::setLocale($locale);
        $tarotMethods = trans('tarot.tarot_list');
        $aCardArray = $this->oTarotServices->formatCardArray($tarotMethods);
        return view('tarot/lang/draw_list',['event' => true, 'data' => $aCardArray, 'title' => trans('tarot.tarot_cards'), 'image' => $this->aImage]);
    }

    public function getOneCardLang($locale)
    {
        App::setLocale($locale);
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aOneCard = $this->oTarotServices->getOneCard($aAllTarot);
        return view('tarot/lang/onecard', ['event' => true, 'data' => $aOneCard, 'title' => $tarotMethods[1][0], 'maxcard' => 1, 'type' => $tarotMethods[1][3]]);
    }

    public function getAllTarotLang($locale)
    {
        App::setLocale($locale);
        $meanings = trans('tarot.tarot_card_meanings');
        $aAllTarot = trans('tarot_cards');
        $aNewAllTarot = $this->oTarotServices->formatAllTarot($aAllTarot);
        return view('tarot/lang/showall', ['event' => true, 'data' => $aNewAllTarot, 'title' => $meanings]);
    }

    public function getDetailLang($locale, $_iNumber)
    {
        App::setLocale($locale);
        $aAllTarot = trans('tarot_cards');
        $aTarot = [];
        $aTarot[0] = $aAllTarot[$_iNumber];
        $aOneCard = $this->oTarotServices->getOneCard($aTarot);
        return view('tarot/lang/detail', ['event' => true, 'data' => $aOneCard]);
    }

    public function getShareTarotLang($locale, $_sID, $_sReversed, $_sType)
    {
        App::setLocale($locale);
        $tarotMethods = trans('tarot.tarot_list');
        $aID = explode(',', $_sID) ;
        $aReversed = explode(',', $_sReversed) ;
        $aAllTarot = trans('tarot_cards');
        foreach ($aID as  $iID) {
            $aTarot[$iID] = $aAllTarot[$iID-1];
        }
        $aShareTarot = $this->oTarotServices-> formatShareTarot($aTarot, $aID, $aReversed);
        return view('tarot/lang/sharetarot', ['event' => true, 'data' => $aShareTarot, 'title' => trans('tarot.share_card'), 'info' => $tarotMethods[$_sType]]);
    }

    public function getThreeCardLang($locale)
    {
        App::setLocale($locale);
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aThreeCard = $this->oTarotServices->getCard($aAllTarot, 3);
        return view('tarot/lang/threecard', ['event' => true, 'data' => $aThreeCard, 'title' => $tarotMethods[2][0], 'maxcard' => 3, 'type' => $tarotMethods[2][3]]);
    }

    public function getFourCardLang($locale)
    {
        App::setLocale($locale);
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aCard = $this->oTarotServices->getCard($aAllTarot, 4);
        return view('tarot/lang/fourcard', ['event' => true, 'data' => $aCard, 'title' => $tarotMethods[3][0], 'maxcard' => 4, 'sub' => [trans('tarot.four_cards_2'),trans('tarot.four_cards_3'),trans('tarot.four_cards_4'),trans('tarot.four_cards_5')], 'type' => $tarotMethods[3][3]]);
    }

    public function getFourElementLang($locale)
    {
        App::setLocale($locale);
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aNewAllTarot = $this->oTarotServices->formatFourElementTarotLang($aAllTarot, trans('tarot'));
        return view('tarot/lang/fourelement', ['event' => true, 'data' => $aNewAllTarot, 'title' => $tarotMethods[4][0], 'maxcard' => 4, 'type' => $tarotMethods[4][3]]);
    }

    public function getSixPointedStarLang($locale)
    {
        App::setLocale($locale);
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aCard = $this->oTarotServices->getCard($aAllTarot, 7);
        $aSub = [trans('tarot.six_pointed_star_2'),trans('tarot.six_pointed_star_3'),trans('tarot.six_pointed_star_4'),trans('tarot.six_pointed_star_5'),trans('tarot.six_pointed_star_6'),trans('tarot.six_pointed_star_7'),trans('tarot.six_pointed_star_8')];
        return view('tarot/lang/six-pointed-star', ['event' => true, 'data' => $aCard, 'title' => $tarotMethods[5][0],'sub' => $aSub, 'maxcard' => 7, 'type' => $tarotMethods[5][3]]);
    }

    public function getFriendshipLang($locale)
    {
        App::setLocale($locale);
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aCard = $this->oTarotServices->getCard($aAllTarot, 6);
        $aSub = [trans('tarot.friendship_2'),trans('tarot.friendship_3'),trans('tarot.friendship_4'),trans('tarot.friendship_5'),trans('tarot.friendship_6'),trans('tarot.friendship_7')];
        return view('tarot/lang/friendship', ['event' => true, 'data' => $aCard, 'title' => $tarotMethods[6][0], 'maxcard' => 6, 'sub' => $aSub, 'type' => $tarotMethods[6][3]]);
    }

    public function getWeekLang($locale)
    {
        App::setLocale($locale);
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aCard = $this->oTarotServices->getCard($aAllTarot, 7);
        $aSub = [trans('tarot.week_1'),trans('tarot.week_2'),trans('tarot.week_3'),trans('tarot.week_4'),trans('tarot.week_5'),trans('tarot.week_6'),trans('tarot.week_7')];
        return view('tarot/lang/week', ['event' => true, 'data' => $aCard, 'title' => $tarotMethods[7][0], 'maxcard' => 7, 'sub' => $aSub, 'type' => $tarotMethods[7][3]]);
    }

    public function getEitherLang($locale)
    {
        App::setLocale($locale);
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aCard = $this->oTarotServices->getCard($aAllTarot, 5);
        $aSub = [trans('tarot.either_2'),trans('tarot.either_3'),trans('tarot.either_4'),trans('tarot.either_5'),trans('tarot.either_6')];
        return view('tarot/lang/either', ['event' => true, 'data' => $aCard, 'title' => $tarotMethods[8][0], 'maxcard' => 5, 'sub' => $aSub, 'type' => $tarotMethods[8][3]]);
    }

    public function getLoveLang($locale)
    {
        App::setLocale($locale);
        $aAllTarot = trans('tarot_cards');
        $aCard = $this->oTarotServices->getCard($aAllTarot, 10);
        $aSub = [trans('tarot.love_1'),trans('tarot.love_2'),trans('tarot.love_3'),trans('tarot.love_4'),trans('tarot.love_5'),trans('tarot.love_6'),trans('tarot.love_7'),trans('tarot.love_8'),trans('tarot.love_9'),trans('tarot.love_10')];
        return view('tarot/lang/love', ['event' => true, 'data' => $aCard, 'maxcard' => 10, 'sub' => $aSub]);
    }

    public function getReadingLang($locale, $_iID)
    {
        App::setLocale($locale);
        $aAllTarot = trans('tarot_masses');
        $aTarot = $aAllTarot[$_iID];
        return view('tarot/lang/masses_reading', ['event' => true, 'data' => $aTarot['cards'], 'title' => $aTarot['title'], 'description' => $aTarot['description']]);
    }

    public function getMassesLang($locale)
    {
        App::setLocale($locale);
        $aAllTarot = trans('tarot_masses');
        return view('tarot/lang/masses', ['event' => true, 'data' => $aAllTarot]);
    }

    public function drawList()
    {
        App::setLocale('zh-hant');
        $tarotMethods = trans('tarot.tarot_list');
        $aCardArray = $this->oTarotServices->formatCardArray($tarotMethods);
        return view('tarot/draw_list',['event' => true, 'data' => $aCardArray, 'title' => trans('tarot.tarot_cards'), 'image' => $this->aImage]);
    }

    public function getAllTarot()
    {
        App::setLocale('zh-hant');
        $meanings = trans('tarot.tarot_card_meanings');
        $aAllTarot = trans('tarot_cards');
        $aNewAllTarot = $this->oTarotServices->formatAllTarot($aAllTarot);
        return view('tarot/showall', ['event' => true, 'data' => $aNewAllTarot, 'title' => '塔羅牌解讀']);
    }

    public function getDetail($_iNumber)
    {
        App::setLocale('zh-hant');
        $aAllTarot = trans('tarot_cards');
        $aTarot = [];
        $aTarot[0] = $aAllTarot[$_iNumber];
        $aOneCard = $this->oTarotServices->getOneCard($aTarot);
        return view('tarot/detail', ['event' => true, 'data' => $aOneCard]);
    }

    public function getShareTarot($_sID, $_sReversed, $_sType)
    {
        App::setLocale('zh-hant');
        $tarotMethods = trans('tarot.tarot_list');
        $aID = explode(',', $_sID) ;
        $aReversed = explode(',', $_sReversed) ;
        $aAllTarot = trans('tarot_cards');
        foreach ($aID as  $iID) {
            $aTarot[$iID] = $aAllTarot[$iID-1];
        }
        $aShareTarot = $this->oTarotServices-> formatShareTarot($aTarot, $aID, $aReversed);
        return view('tarot/sharetarot', ['event' => true, 'data' => $aShareTarot, 'title' => trans('tarot.share_card'), 'info' => $tarotMethods[$_sType]]);
    }

    public function getOneCard()
    {
        App::setLocale('zh-hant');
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aOneCard = $this->oTarotServices->getOneCard($aAllTarot);
        return view('tarot/onecard', ['event' => true, 'data' => $aOneCard, 'title' => $tarotMethods[1][0], 'maxcard' => 1, 'type' => $tarotMethods[1][3]]);
    }

    public function getThreeCard()
    {
        App::setLocale('zh-hant');
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aThreeCard = $this->oTarotServices->getCard($aAllTarot, 3);
        return view('tarot/threecard', ['event' => true, 'data' => $aThreeCard, 'title' => $tarotMethods[2][0], 'maxcard' => 3, 'type' => $tarotMethods[2][3]]);
    }

    public function getFourCard()
    {
        App::setLocale('zh-hant');
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aCard = $this->oTarotServices->getCard($aAllTarot, 4);
        return view('tarot/fourcard', ['event' => true, 'data' => $aCard, 'title' => $tarotMethods[3][0], 'maxcard' => 4, 'sub' => [trans('tarot.four_cards_2'),trans('tarot.four_cards_3'),trans('tarot.four_cards_4'),trans('tarot.four_cards_5')], 'type' => $tarotMethods[3][3]]);
    }

    public function getFourElement()
    {
        App::setLocale('zh-hant');
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aNewAllTarot = $this->oTarotServices->formatFourElementTarotLang($aAllTarot, trans('tarot'));
        return view('tarot/fourelement', ['event' => true, 'data' => $aNewAllTarot, 'title' => $tarotMethods[4][0], 'maxcard' => 4, 'type' => $tarotMethods[4][3]]);
    }

    public function getSixPointedStar()
    {
        App::setLocale('zh-hant');
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aCard = $this->oTarotServices->getCard($aAllTarot, 7);
        $aSub = [trans('tarot.six_pointed_star_2'),trans('tarot.six_pointed_star_3'),trans('tarot.six_pointed_star_4'),trans('tarot.six_pointed_star_5'),trans('tarot.six_pointed_star_6'),trans('tarot.six_pointed_star_7'),trans('tarot.six_pointed_star_8')];
        return view('tarot/six-pointed-star', ['event' => true, 'data' => $aCard, 'title' => $tarotMethods[5][0],'sub' => $aSub, 'maxcard' => 7, 'type' => $tarotMethods[5][3]]);
    }

    public function getFriendship()
    {
        App::setLocale('zh-hant');
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aCard = $this->oTarotServices->getCard($aAllTarot, 6);
        $aSub = [trans('tarot.friendship_2'),trans('tarot.friendship_3'),trans('tarot.friendship_4'),trans('tarot.friendship_5'),trans('tarot.friendship_6'),trans('tarot.friendship_7')];
        return view('tarot/friendship', ['event' => true, 'data' => $aCard, 'title' => $tarotMethods[6][0], 'maxcard' => 6, 'sub' => $aSub, 'type' => $tarotMethods[6][3]]);
    }

    public function getWeek()
    {
        App::setLocale('zh-hant');
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aCard = $this->oTarotServices->getCard($aAllTarot, 7);
        $aSub = [trans('tarot.week_1'),trans('tarot.week_2'),trans('tarot.week_3'),trans('tarot.week_4'),trans('tarot.week_5'),trans('tarot.week_6'),trans('tarot.week_7')];
        return view('tarot/week', ['event' => true, 'data' => $aCard, 'title' => $tarotMethods[7][0], 'maxcard' => 7, 'sub' => $aSub, 'type' => $tarotMethods[7][3]]);
    }

    public function getEither()
    {
        App::setLocale('zh-hant');
        $tarotMethods = trans('tarot.tarot_list');
        $aAllTarot = trans('tarot_cards');
        $aCard = $this->oTarotServices->getCard($aAllTarot, 5);
        $aSub = [trans('tarot.either_2'),trans('tarot.either_3'),trans('tarot.either_4'),trans('tarot.either_5'),trans('tarot.either_6')];
        return view('tarot/either', ['event' => true, 'data' => $aCard, 'title' => $tarotMethods[8][0], 'maxcard' => 5, 'sub' => $aSub, 'type' => $tarotMethods[8][3]]);
    }

    public function getFlirt()
    {
        $aTarotOneDaily = $this->oDailyRepositories->getOneDaily(1, rand(0, 21));
        return view('tarot/flirt', ['event' => true, 'data' => $aTarotOneDaily, 'title' => $this->aDict[9][0], 'maxcard' => 1, 'sub' => ['未來對你有什麼好處？現在是時候發現這一天的可能性了！'], 'type' => $this->aDict[9][3]]);
    }

    public function getDaily()
    {
        $aAllTarot = $this->oTarotRepositories->getAllTarot(1);
        $aOneCard = $this->oTarotServices->getOneCard($aAllTarot);
        return view('tarot/daily', ['event' => true, 'data' => $aOneCard, 'title' => '每日塔羅占卜', 'maxcard' => 1]);
    }

    public function getDailyLove()
    {
        $aFile = app_path('JsonData/tarotDailyLove.json');
        $sJsonData = file_get_contents($aFile);
        $aAllTarot = json_decode($sJsonData, true);
        $aOneCard = $this->oTarotServices->getOneCard($aAllTarot);
        return view('tarot/daily_love', ['event' => true, 'data' => $aOneCard, 'title' => '每日愛情塔羅占卜', 'maxcard' => 1]);
    }

    public function getReading($_iID)
    {
        App::setLocale('zh-hant');
        $aAllTarot = trans('tarot_masses');
        $aTarot = $aAllTarot[$_iID];
        return view('tarot/masses/masses_reading', ['event' => true, 'data' => $aTarot['cards'], 'title' => $aTarot['title'], 'description' => $aTarot['description']]);
    }

    public function getMasses()
    {
        App::setLocale('zh-hant');
        $aAllTarot = trans('tarot_masses');
        return view('tarot/masses/masses', ['event' => true, 'data' => $aAllTarot]);
    }
}