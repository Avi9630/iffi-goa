<?php

namespace App\Http\Controllers;

use App\Models\Ticker;
use Illuminate\Http\Request;

class TickerController extends Controller
{
    public function getAllTicker()
    {
        $tickers = Ticker::where(['status' => 1])->get();
        return $tickers;
    }
}
