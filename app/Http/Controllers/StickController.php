<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Stick\StickRepositories;
use App\Services\Stick\StickServices;

class StickController extends Controller
{
    private $oStickRepositories;
    private $oStickServices;
    private $aDict = [1 => '六十甲子籤', 2 => '月老靈簽', 3 => '觀音一百籤', 4 => '觀音二十八籤', 5 => '關聖帝君一百籤'];
    private $aRemark = [1 => '「六十甲子籤」是中國傳統的占卜方式，以甲子、乙丑、丙寅……壬子、癸丑共六十個甲子為一個周期，每個甲子對應著一首詩籤。人們在祈求吉利或解決問題時，會隨機抽取一首詩籤，以此來預測未來的吉凶和命運走向。六十甲子籤源遠流長，歷史悠久，至今仍然在華人社會中廣泛流傳。', 2 => '台灣民間信仰，每年七夕，七星娘娘會把人世間未婚的成年男女製成名冊，向天庭呈報。月下老人收到名冊後，按照個性、善惡、興趣與條件抄寫成一本配偶名冊，然後用紅線綁牢男女二人之足，使合適的男女配成一對佳偶。', 3 => '觀音一百籤，又稱觀音靈簽，是佛教中常用的占卜方式之一。此籤分為吉凶兩部分，每籤均有經文和詩句相伴，可以指引人們在求神問卜時，尋求心靈的指引和安慰。籤詩通俗易懂，充滿智慧，被許多人視為佛教智慧的縮影，引領人們走向美好的生活。', 4 => '觀音二十八籤是佛教徒常用的占卜工具，是觀音菩薩慈悲智慧的體現。透過這些籤詩，可以領悟佛理，化解問題，得到觀音菩薩的指引和庇佑。籤詩風格優美簡潔，含蓄深刻，具有啟發性和感召力。', 5 => '《關聖帝君一百籤》是民間信仰中非常受歡迎的卜卦書籍，被視為保佑平安、求得庇佑和指引方向的神典。其中每一籤都蘊含豐富的哲理和智慧，透過觀念的融入，為人生的抉擇和方向提供了有益的啟示。'];
    private $aStick = [
        1 => [
            'file' => 'sixtyJiazi.json',
            'rand' => [
                'min' => 1,
                'max' => 62
            ],
            'description' => '「六十甲子籤」是中國傳統的占卜方式，以甲子、乙丑、丙寅……壬子、癸丑共六十個甲子為一個周期，每個甲子對應著一首詩籤。人們在祈求吉利或解決問題時，會隨機抽取一首詩籤，以此來預測未來的吉凶和命運走向。六十甲子籤源遠流長，歷史悠久，至今仍然在華人社會中廣泛流傳。',
            'image' => 'sixty_jiazi.jpg',
        ],
        2 =>
        [
            'file' => 'moonStick.json',
            'rand' => [
                'min' => 1,
                'max' => 101
            ],
            'description' => '月老靈簽是道教中的簽籤神諭，主要是用來卜問姻緣婚姻方面的問題。簽筒中有許多簽籤，抽到的簽將對應到一段神諭，可以得到月老的指示和提醒。',
            'image' => 'moon_old_man.jpg'
        ],
        3 =>
        [
            'file' => 'guanyinOneHundred.json',
            'rand' => [
                'min' => 1,
                'max' => 100
            ],
            'description' => '觀音一百籤，又稱觀音靈簽，是佛教中常用的占卜方式之一。此籤分為吉凶兩部分，每籤均有經文和詩句相伴，可以指引人們在求神問卜時，尋求心靈的指引和安慰。籤詩通俗易懂，充滿智慧，被許多人視為佛教智慧的縮影，引領人們走向美好的生活。',
            'image' => 'guanyin_one_hundred.jpg'
        ],
        4 =>
        [
            'file' => 'guanyinTwentyEight.json',
            'rand' => [
                'min' => 1,
                'max' => 28
            ],
            'description' => '觀音二十八籤是佛教徒常用的占卜工具，是觀音菩薩慈悲智慧的體現。透過這些籤詩，可以領悟佛理，化解問題，得到觀音菩薩的指引和庇佑。籤詩風格優美簡潔，含蓄深刻，具有啟發性和感召力。',
            'image' => 'guanyin_twenty_eight.jpg'
        ],
        5 =>
        [
            'file' => 'GuanShengdijunOneHundred.json',
            'rand' => [
                'min' => 1,
                'max' => 100
            ],
            'description' => '《關聖帝君一百籤》是民間信仰中非常受歡迎的卜卦書籍，被視為保佑平安、求得庇佑和指引方向的神典。其中每一籤都蘊含豐富的哲理和智慧，透過觀念的融入，為人生的抉擇和方向提供了有益的啟示。',
            'image' => 'guan_shengdijun_one_hundred.jpg'
        ],
    ];
    public function __construct(StickRepositories $_oStickRepositories, StickServices $_oStickServices)
    {
        $this->oStickRepositories = $_oStickRepositories;
        $this->oStickServices = $_oStickServices;
    }

    public function index()
    {
        return view('stick/stick',['event' => true, 'data' => $this->aDict, 'remark' => $this->aRemark, 'title' => '詩籤', 'stick' => $this->aStick]);
    }

    public function draw($_iTypeID)
    {
        $iRand = rand($this->aStick[$_iTypeID]['rand']['min'], $this->aStick[$_iTypeID]['rand']['max']);
        return view('stick/draw', ['event' => true, 'data' => $_iTypeID, 'title' => $this->aDict[$_iTypeID], 'typeid' => $_iTypeID, 'description' => $this->aStick[$_iTypeID]['description'], 'number' => $iRand]);
    }

    // public function drawStick($_iTypeID)
    // {
    //     $aAllStick = $this->oStickRepositories->getStickTotal($_iTypeID);
    //     $aNewStick = $this->oStickServices->handleFormat($aAllStick);
    //     // echo '<pre>';
    //     // $aJson = json_encode($aNewStick, JSON_UNESCAPED_UNICODE);
    //     // var_export($aJson);
    //     // exit;
    //     $iRand = rand($this->aStick[$_iTypeID]['rand']['min'], $this->aStick[$_iTypeID]['rand']['max']);
    //     $aFile = app_path('JsonData/' . $this->aStick[$_iTypeID]['file']);
    //     $sJsonData = file_get_contents($aFile);
    //     $aGetStick = json_decode($sJsonData, true);
    //     // var_export($aData[$iRand]);exit;
    //     // shuffle($aAllStick);
    //     // $aGetStick = array_pop($aAllStick);
    //     return response()->json(['event' => true, 'data' => $aGetStick[$iRand]]);
    // }

    public function getDetail($_iTypeID, $_iNumber)
    {
        // echo '<pre>';
        // $aStick = $this->oStickRepositories->getStick($_iTypeID, $_iNumber);
        // $aNewStick = $this->oStickServices->handleFormat($aStick);
        // var_export($aNewStick);
        $aFile = app_path('JsonData/' . $this->aStick[$_iTypeID]['file']);
        $sJsonData = file_get_contents($aFile);
        $aStick = json_decode($sJsonData, true);
        $aNewStick = $this->oStickServices->handleFormat($aStick);
        // var_export($aNewStick[$_iNumber]);exit;
        return view('stick/detail', ['event' => true, 'data' => $aNewStick[$_iNumber], 'title' => $this->aDict[$_iTypeID], 'typeid' => $_iTypeID, 'description' => $this->aStick[$_iTypeID]['description']]);
    }

    public function showAll($_iTypeID)
    {
        $aFile = app_path('JsonData/' . $this->aStick[$_iTypeID]['file']);
        $sJsonData = file_get_contents($aFile);
        $aStick = json_decode($sJsonData, true);
        $aNewStick = $this->oStickServices->handleFormat($aStick);
        return view('stick/showall', ['event' => true, 'data' => $aNewStick, 'title' => $this->aDict[$_iTypeID], 'typeid' => $_iTypeID, 'description' => $this->aStick[$_iTypeID]['description']]);
    }
}
