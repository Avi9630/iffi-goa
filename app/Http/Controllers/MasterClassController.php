<?php

namespace App\Http\Controllers;

use App\Models\MasterClassTopic;
use App\Models\MasterDate;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MasterClassController extends Controller
{
    function index()
    {
        // $dates = DB::table('master_date')->orderBy('date')->get();

        // return view('master', compact('dates'));

        // Get dates for tabs
        $dates = MasterDate::orderBy('date')->get();
        // Load all topics with related master_classes, speakers, and moderators
        $topics = MasterClassTopic::with(['masterClass', 'speakers', 'moderators', 'masterDate'])->get();
        // dd($topics);
        return view('master', compact('dates', 'topics'));
    }
}
