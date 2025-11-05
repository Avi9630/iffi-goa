<?php

namespace App\Http\Controllers;

use App\Models\IndianPanorama;
use App\Models\PanoramaCinema;
use App\Models\IndianCinema;
use Illuminate\Http\Request;
use App\Models\JuryDetail;

class IndianPanoramaController extends Controller
{
    public function officialFeature(Request $request)
    {
        $payload            =   $request->all();
        $year               =   isset($payload['year']) ? $payload['year'] : '';

        $officialFeature = IndianPanorama::with('officialSelection')
            ->where('official_selection_id', 1)
            ->when(!empty($year), function ($query) use ($year) {
                return $query->where('year', $year);
            })
            ->get();

        return view('indian-panorama.official-selection-feature', [
            'officialFeature'   =>    $officialFeature,
            'year'              =>    $year
        ]);
    }

    public function officialNonFeature(Request $request)
    {
        $payload            =   $request->all();
        $year               =   isset($payload['year']) ? $payload['year'] : '';
        $officialFeature = IndianPanorama::with('officialSelection')
            ->where('official_selection_id', 2)
            ->when(!empty($year), function ($query) use ($year) {
                return $query->where('year', $year);
            })
            ->get();
        return view('indian-panorama.official-selection-non-feature', [
            'officialNonFeature' =>  $officialFeature,
            'year' =>  $year,
        ]);
    }

    public function accessibleFilm(Request $request, $year, $slug)
    {
        $indianCinemaId =   IndianCinema::where('slug', $slug)->pluck('id')->first();
        $accessibleFilm =   PanoramaCinema::with('accessibleFilm')
            ->where('indian_cinema_id', $indianCinemaId)
            ->where('year', $year)
            ->where('status', 1)
            ->limit(8)
            ->get()
            ->map(function ($cinema) {
                $cinema->curated_section_title = $cinema->curatedSection->title ?? null;
                return $cinema;
            });
        // dd($accessibleFilm);
        return view('indian-cinema.accessible-film', [
            'accessibleFilm'    =>  $accessibleFilm,
            'year'              =>  $year,
        ]);
    }

    function juryFeature($year)
    {
        $juryDetails = JuryDetail::where(['jury_type_id' => 1, 'status' => 1, 'year' => $year])->get();
        return view('indian-panorama.indian-panorama-jury-feature', compact('juryDetails'));
    }

    function juryNonFeature($year)
    {
        $juryDetails = JuryDetail::where(['jury_type_id' => 2, 'status' => 1, 'year' => $year])->get();
        return view('indian-panorama.indian-panorama-jury-non-feature', compact('juryDetails'));
    }
}
