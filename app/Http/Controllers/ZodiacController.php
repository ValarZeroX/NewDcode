<?php

namespace App\Http\Controllers\Constellation;

use App\Http\Controllers\Controller;

class Zodiac extends Controller
{

    private $oZodiacRepositories;

    public function __construct(ZodiacRepositories $_oZodiacRepositories)
    {
        $this->oZodiacRepositories = $_oZodiacRepositories;
    }

    public function getDetail($_sZodiac)
    {
        return view('constellation/astrology/'.$_sZodiac ,['event' => true,  'data' => []]);
    }
}