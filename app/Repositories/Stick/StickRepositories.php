<?php

namespace App\Repositories\Stick;

use App\Models\Stick\StickModels;

class StickRepositories
{
    private $oStickModels;
    public function __construct(StickModels $_oStickModels)
    {
        $this->oStickModels = $_oStickModels;
    }
    public function getAllStick($_iTypeID)
    {
        $aAllStick = $this->oStickModels->selectRaw('number, number_text, subtitle, stick_text')
        ->where('type_id', $_iTypeID)
        ->orderBy('number')
        ->get()
        ->toArray();
        return $aAllStick;
    }

    /**
     * getStickTotal 取詩籤數量
     *
     * @param  int $_iTypeID 詩籤種類
     * @return array
     */
    public function getStickTotal($_iTypeID)
    {
        $aAllStick = $this->oStickModels
        ->where('type_id', $_iTypeID)
        ->get()
        ->keyBy('number')
        ->toArray();
        return $aAllStick;
    }

    /**
     * getStick 取詩籤
     *
     * @param  int $_iTypeID 詩籤種類
     * @param  int $_iNumber 詩籤編號
     * @return array
     */
    public function getStick($_iTypeID, $_iNumber)
    {
        $aStick = $this->oStickModels->selectRaw('number, number_text, subtitle, stick_text, explanation')
        ->where([['type_id', '=', $_iTypeID], ['number','=',$_iNumber]])
        ->get()
        ->toArray();
        return $aStick;
    }

    public function update($_iTypeID, $_iNumber, $_sText)
    {
        $this->oStickModels->where([['type_id', '=', $_iTypeID], ['number','=',$_iNumber]])
        ->update(['stick_text' => $_sText]);
    }

    public function insert($_iTypeID, $_iNumber, $_sNumber_text, $_sSubtitle, $_sStick_text, $_sExplanation)
    {
        $this->oStickModels->insert(['type_id' => $_iTypeID, 'number' => $_iNumber, 'number_text' => $_sNumber_text, 'subtitle' => $_sSubtitle, 'stick_text' => $_sStick_text, 'explanation' => $_sExplanation]);
    }

    public function updateCase1($_iTypeID, $_iNumber, $_sExplanation)
    {
        $this->oStickModels->where([['type_id', '=', $_iTypeID], ['number','=',$_iNumber]])
        ->update(['explanation' => $_sExplanation]);
    }
}