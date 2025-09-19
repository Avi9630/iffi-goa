<?php

namespace App\Http\Controllers;

use App\Models\JuryDetail;
use Illuminate\Http\Request;

class CmotController extends Controller
{
    function cmotJury($year)
    {
        $juryDetails = JuryDetail::where(['jury_type_id' => 5, 'status' => 1, 'year' => $year])->get();
        return view('cmot.cmot-jury', compact(['juryDetails', 'year']));
    }

    function cmotGrandJury($year)
    {
        $juryDetails = JuryDetail::where(['jury_type_id' => 6, 'status' => 1, 'year' => $year])->get();
        return view('cmot.cmot-grand-jury', compact(['juryDetails','year']));
    }
}
