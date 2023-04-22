<?php

namespace App\Repositories\Tarot;

use App\Models\Tarot\DailyModels;

class DailyRepositories
{
    private $oDailyModels;
    public function __construct(DailyModels $_oDailyModels)
    {
        $this->oDailyModels = $_oDailyModels;
    }

    public function getAllDaily($_iTypeID)
    {
        $aAllDailyTarot = $this->oDailyModels->selectRaw('type, number, name, content, image_key')
        ->where([['type', '=', $_iTypeID], ['image_key','!=', '']])
        ->get()
        ->toArray();
        return $aAllDailyTarot;
    }

    public function getOneDaily($_iTypeID, $_iNumber)
    {
        $aOneDailyTarot = $this->oDailyModels->selectRaw('type, number, name, content, image_key')
        ->where([['type', '=', $_iTypeID], ['number', '=', $_iNumber], ['image_key','!=', '']])
        ->get()
        ->toArray();
        return $aOneDailyTarot;
    }
}