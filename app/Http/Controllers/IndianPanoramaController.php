<?php

namespace App\Http\Controllers;

use App\Models\IndianCinema;
use App\Models\IndianPanorama;
use App\Models\OfficialSelection;
use App\Models\PanoramaCinema;
use Illuminate\Http\Request;
use DB;

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

    public function accessibleFilm(Request $request,$year ,$slug )
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
        return view('indian-panorama.accessible-film', [
            'accessibleFilm'    =>  $accessibleFilm,
            'year'              =>  $year,
        ]);
    }
}
