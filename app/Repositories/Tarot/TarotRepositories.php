<?php

namespace App\Repositories\Tarot;

use App\Models\Tarot\TarotModels;

class TarotRepositories
{
    private $oTarotModels;
    public function __construct(TarotModels $_oTarotModels)
    {
        $this->oTarotModels = $_oTarotModels;
    }
    public function getAllTarot(int $_iTypeID)
    {
        $aAllTarot = $this->oTarotModels->selectRaw('*')
        ->where('type_id', $_iTypeID)
        ->get()
        ->toArray();
        return $aAllTarot;
    }

    public function getTarot(int $_iNumber)
    {
        $aTarot = $this->oTarotModels->selectRaw('*')
        ->where('number', $_iNumber)
        ->get()
        ->toArray();
        return $aTarot;
    }

    public function getShareTarot(array $_aID)
    {
        $aTarot = $this->oTarotModels->selectRaw('id, type_id, number, name, content, image_key')
        ->whereIn('id', $_aID)
        ->get()
        ->keyBy('id')
        ->toArray();
        return $aTarot;
    }
}