<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ZodiacController extends Controller
{
    public function index()
    {
        return view('constellation/zodiac_date',['event' => true]);
    }

    public function drawAstroChart(Request $oRequest)
    {
        $sYear = $oRequest->input("year");
        $sMonth = $oRequest->input("month");
        $sDay = $oRequest->input("day");
        $sHour = $oRequest->input("hour");
        $sMinutes = $oRequest->input("minutes");
        $sLongitude = $oRequest->input("longitude");
        $sLatitude = $oRequest->input("latitude");
        if ($sLongitude == null) {
            $sLongitude = 0;
        }
        if ($sLatitude == null) {
            $sLatitude = 0;
        }
        $aData = ['Year' => $sYear, 'Month' => $sMonth, 'Day' => $sDay, 'Hour' => $sHour, 'Minutes' => $sMinutes, 'Longitude' => $sLongitude, 'Latitude' => $sLatitude];
        return view('constellation/zodiac_date',['event' => true,  'data' => $aData]);
    }
}