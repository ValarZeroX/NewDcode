<?php

namespace App\Services\Stick;

class StickServices
{
    public function handleFormat(array $_aAllStick)
    {
        $aAllStick = [];
        foreach ($_aAllStick as $iStickID => $aStick) {
            $aAllStick[$iStickID]['number'] = $aStick['number'];
            $aAllStick[$iStickID]['number_text'] = $aStick['number_text'];
            // $aAllStick[$iStickID]['subtitle'] = $this->handleText($aStick['subtitle']);
            // $aAllStick[$iStickID]['stick_text'] = $this->handleText($aStick['stick_text']);
            $aAllStick[$iStickID]['subtitle'] = $aStick['subtitle'];
            $aAllStick[$iStickID]['stick_text'] = $aStick['stick_text'];
            if(empty($aStick['explanation'])){
                $aAllStick[$iStickID]['explanation'] = [];
            }else{
                $aAllStick[$iStickID]['explanation']  = $aStick['explanation'];
                // $aAllStick[$iStickID]['explanation'] =  $this->handleTextCase(json_decode($aStick['explanation'],
                // $aAllStick[$iStickID]['explanation'] =  $this->handleTextCase($aStick['explanation']);
                // $data = json_decode(stripslashes($aStick['explanation']), true);
                // var_export($data);
                // $explanation = json_decode('"' . $data['explanation'] . '"', true);
                // $aAllStick[$iStickID]['explanation'] = $this->handleTextCase(json_decode($aStick['explanation'],true));
                // var_export(json_decode($aStick['explanation'],true));
            }
        }
        return $aAllStick;
    }

    // private function handleNumber(int $_iNumber) : string{
    //     $_iNumber = 64;
    //     $numc =['零','一','二','三','四','五','六','七','八','九'];
    //     $unic = ['十','百','千'];
    //     $iNumber = str_replace(",", "", $_iNumber);

    //     var_dump(strlen($iNumber));
    //     return '';
    // }
    private function handleText(string $_sText) : array
    {
        return explode(',', $_sText);
    }

    private function handleTextCase(array $_aExplanation)
    {
        foreach ($_aExplanation as $sKey => $aValue) {

            $aExplanationBox = explode(';', $aValue);
            foreach ($aExplanationBox as $aVal) {
                $aExplanation[$sKey][] = explode(',', $aVal);
            }

        }
        return $aExplanation;
    }
}