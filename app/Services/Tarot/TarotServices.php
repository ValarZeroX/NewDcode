<?php

namespace App\Services\Tarot;

class TarotServices
{
    public function formatCardArray($_aCardArray)
    {
        $aNewCardArray = [];
        foreach ($_aCardArray as $iTypeID => $aValue) {
            $aNewCardArray[$iTypeID][0] = $aValue[0];
            $aNewCardArray[$iTypeID][1] = explode(';', $aValue[1]);
            $aNewCardArray[$iTypeID][2] = $aValue[2];
        }
        return $aNewCardArray;
    }

    public function getOneCard($_aAllTarot)
    {
        shuffle($_aAllTarot);
        $aOneTarot = array_pop($_aAllTarot);
        // $aOneTarot = $_aAllTarot[21];
        $iUR = rand(0, 1);

        $aNewTarot = [];
        foreach ($aOneTarot as $sKey => $sValue) {
            $aNewTarot[$sKey] = nl2br($sValue);
            if ($sKey == 'upright_keyword' || $sKey == 'reversed_keyword') {
                if (preg_match('/[,]/', $sValue)) {
                    $aNewTarot[$sKey] = explode(',', $sValue);
                } else {
                    $aNewTarot[$sKey] = explode('、', $sValue);
                }
            }
        }
        $aNewTarot['reversed'] = $iUR;
        return $aNewTarot;
    }

    public function getThreeCard($_aAllTarot)
    {
        shuffle($_aAllTarot);
        // $aOneTarot = array_pop($_aAllTarot);
        $aThreeTarot[0] = $_aAllTarot[0];
        $aThreeTarot[1] = $_aAllTarot[1];
        $aThreeTarot[2] = $_aAllTarot[2];
        $aNewThreeTarot = [];
        foreach ($aThreeTarot as $iKey => $aOneTarot) {
            $iUR = rand(0, 1);
            $aNewTarot = [];
            foreach ($aOneTarot as $sKey => $sValue) {
                $aNewTarot[$sKey] = nl2br($sValue);
                if ($sKey == 'upright_keyword' || $sKey == 'reversed_keyword') {
                    if (preg_match('/[,]/', $sValue)) {
                        $aNewTarot[$sKey] = explode(',', $sValue);
                    } else {
                        $aNewTarot[$sKey] = explode('、', $sValue);
                    }
                }
            }
            $aNewTarot['reversed'] = $iUR;
            $aNewThreeTarot[$iKey] = $aNewTarot;
        }
        return $aNewThreeTarot;
    }

    public function getCard($_aAllTarot, $_iNumber)
    {
        shuffle($_aAllTarot);
        for ($i = 0; $i < $_iNumber; $i++) {
            $aTarot[$i] = $_aAllTarot[$i];
        }
        $aTarotInfo = [];
        foreach ($aTarot as $iKey => $aOneTarot) {
            $iUR = rand(0, 1);
            $aNewTarot = [];
            foreach ($aOneTarot as $sKey => $sValue) {
                $aNewTarot[$sKey] = nl2br($sValue);
                if ($sKey == 'upright_keyword' || $sKey == 'reversed_keyword') {
                    if (preg_match('/[,]/', $sValue)) {
                        $aNewTarot[$sKey] = explode(',', $sValue);
                    } else {
                        $aNewTarot[$sKey] = explode('、', $sValue);
                    }
                }
            }
            $aNewTarot['reversed'] = $iUR;
            $aTarotInfo[$iKey] = $aNewTarot;
        }
        return $aTarotInfo;
    }

    public function formatAllTarot($_aAllTarot)
    {
        $aTarotInfo = [];
        foreach ($_aAllTarot as $iKey => $aTarot) {
            $iNumber = $aTarot['number'];
            $aNewTarot = [];
            //大阿爾克那
            if ($iNumber >= 0 && $iNumber <= 21) {
                foreach ($aTarot as $sKey => $sValue) {
                    if ($sKey == 'name' || $sKey == 'image_key') {
                        $aNewTarot[$sKey] = nl2br($sValue);
                    }
                    if ($sKey == 'upright_keyword' || $sKey == 'reversed_keyword') {
                        if (preg_match('/[,]/', $sValue)) {
                            $aNewTarot[$sKey] = explode(',', $sValue);
                        } else {
                            $aNewTarot[$sKey] = explode('、', $sValue);
                        }
                    }
                }
                $aTarotInfo['Major'][$iNumber] = $aNewTarot;
            }
            //權杖
            if ($iNumber >= 22 && $iNumber <= 35) {
                foreach ($aTarot as $sKey => $sValue) {
                    if ($sKey == 'name' || $sKey == 'image_key') {
                        $aNewTarot[$sKey] = nl2br($sValue);
                    }
                    if ($sKey == 'upright_keyword' || $sKey == 'reversed_keyword') {
                        if (preg_match('/[,]/', $sValue)) {
                            $aNewTarot[$sKey] = explode(',', $sValue);
                        } else {
                            $aNewTarot[$sKey] = explode('、', $sValue);
                        }
                    }
                }
                $aTarotInfo['Wands'][$iNumber] = $aNewTarot;
            }
            //錢幣
            if ($iNumber >= 36 && $iNumber <= 49) {
                foreach ($aTarot as $sKey => $sValue) {
                    if ($sKey == 'name' || $sKey == 'image_key') {
                        $aNewTarot[$sKey] = nl2br($sValue);
                    }
                    if ($sKey == 'upright_keyword' || $sKey == 'reversed_keyword') {
                        if (preg_match('/[,]/', $sValue)) {
                            $aNewTarot[$sKey] = explode(',', $sValue);
                        } else {
                            $aNewTarot[$sKey] = explode('、', $sValue);
                        }
                    }
                }
                $aTarotInfo['Pentacles'][$iNumber] = $aNewTarot;
            }
            //聖杯
            if ($iNumber >= 50 && $iNumber <= 63) {
                foreach ($aTarot as $sKey => $sValue) {
                    if ($sKey == 'name' || $sKey == 'image_key') {
                        $aNewTarot[$sKey] = nl2br($sValue);
                    }
                    if ($sKey == 'upright_keyword' || $sKey == 'reversed_keyword') {
                        if (preg_match('/[,]/', $sValue)) {
                            $aNewTarot[$sKey] = explode(',', $sValue);
                        } else {
                            $aNewTarot[$sKey] = explode('、', $sValue);
                        }
                    }
                }
                $aTarotInfo['Cups'][$iNumber] = $aNewTarot;
            }
            //寶劍
            if ($iNumber >= 64 && $iNumber <= 77) {
                foreach ($aTarot as $sKey => $sValue) {
                    if ($sKey == 'name' || $sKey == 'image_key') {
                        $aNewTarot[$sKey] = nl2br($sValue);
                    }
                    if ($sKey == 'upright_keyword' || $sKey == 'reversed_keyword') {
                        if (preg_match('/[,]/', $sValue)) {
                            $aNewTarot[$sKey] = explode(',', $sValue);
                        } else {
                            $aNewTarot[$sKey] = explode('、', $sValue);
                        }
                    }
                }
                $aTarotInfo['Swords'][$iNumber] = $aNewTarot;
            }
        }
        return $aTarotInfo;
    }

    public function formatFourElementTarot($_aAllTarot)
    {
        $aFire = [];
        $aAir = [];
        $aWater = [];
        $aEarth = [];
        foreach ($_aAllTarot as $iKey => $aTarot) {
            $sElement = $aTarot['element'];
            $iNumber = $aTarot['number'];
            $aNewTarot = [];
            $iUR = rand(0, 1);
            if ($sElement == '火元素') {
                foreach ($aTarot as $sKey => $sValue) {
                    $aNewTarot[$sKey] = nl2br($sValue);
                    if ($sKey == 'upright_keyword' || $sKey == 'reversed_keyword') {
                        if (preg_match('/[,]/', $sValue)) {
                            $aNewTarot[$sKey] = explode(',', $sValue);
                        } else {
                            $aNewTarot[$sKey] = explode('、', $sValue);
                        }
                    }
                }
                $aNewTarot['reversed'] = $iUR;
                $aFire[$iNumber] = $aNewTarot;
            }
            if ($sElement == '風元素') {
                foreach ($aTarot as $sKey => $sValue) {
                    $aNewTarot[$sKey] = nl2br($sValue);
                    if ($sKey == 'upright_keyword' || $sKey == 'reversed_keyword') {
                        if (preg_match('/[,]/', $sValue)) {
                            $aNewTarot[$sKey] = explode(',', $sValue);
                        } else {
                            $aNewTarot[$sKey] = explode('、', $sValue);
                        }
                    }
                }
                $aNewTarot['reversed'] = $iUR;
                $aAir[$iNumber] = $aNewTarot;
            }
            if ($sElement == '水元素') {
                foreach ($aTarot as $sKey => $sValue) {
                    $aNewTarot[$sKey] = nl2br($sValue);
                    if ($sKey == 'upright_keyword' || $sKey == 'reversed_keyword') {
                        if (preg_match('/[,]/', $sValue)) {
                            $aNewTarot[$sKey] = explode(',', $sValue);
                        } else {
                            $aNewTarot[$sKey] = explode('、', $sValue);
                        }
                    }
                }
                $aNewTarot['reversed'] = $iUR;
                $aWater[$iNumber] = $aNewTarot;
            }
            if ($sElement == '土元素') {
                foreach ($aTarot as $sKey => $sValue) {
                    $aNewTarot[$sKey] = nl2br($sValue);
                    if ($sKey == 'upright_keyword' || $sKey == 'reversed_keyword') {
                        if (preg_match('/[,]/', $sValue)) {
                            $aNewTarot[$sKey] = explode(',', $sValue);
                        } else {
                            $aNewTarot[$sKey] = explode('、', $sValue);
                        }
                    }
                }
                $aNewTarot['reversed'] = $iUR;
                $aEarth[$iNumber] = $aNewTarot;
            }
        }
        shuffle($aFire);
        shuffle($aAir);
        shuffle($aWater);
        shuffle($aEarth);
        $aFourElementTarot[0] = $aFire[0];
        $aFourElementTarot[1] = $aAir[1];
        $aFourElementTarot[2] = $aWater[2];
        $aFourElementTarot[3] = $aEarth[3];
        return $aFourElementTarot;
    }

    public function formatShareTarot($_aTarot, $_aID, $_aReversed)
    {
        $aNewTarot = [];
        foreach ($_aID as $iKey => $iID) {
            $aNewTarot[$iKey] = $_aTarot[$iID];
            $aNewTarot[$iKey]['reversed'] = $_aReversed[$iKey];
        }
        return $aNewTarot;
    }
}
