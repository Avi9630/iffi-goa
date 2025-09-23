<?php

namespace App\Http\Controllers;

use App\Models\JuryDetail;
use Illuminate\Http\Request;

class BestWebSeriesController extends Controller
{
    function bestWebSeriesJury($year)
    {
        $juryDetails = JuryDetail::where(['jury_type_id' => 3, 'status' => 1, 'year' => $year])->get();
        return view('web-series.web-series-jury', compact('juryDetails'));
    }

    function previewCommitee($year)
    {
        $juryDetails = JuryDetail::where(['jury_type_id' => 4, 'status' => 1, 'year' => $year])->get();
        return view('web-series.Best-web-series-previw-commitee', compact(['juryDetails', 'year']));
    }
}
