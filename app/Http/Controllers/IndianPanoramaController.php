<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndianPanoramaController extends Controller
{
    public function officialFeature()
    {
        $officialFeature = DB::table('indian_panorama_cinema')
            ->join(
                'indian_panorama_official_selections',
                'indian_panorama_cinema.official_selection_id',
                '=',
                'indian_panorama_official_selections.id',
            )
            ->where('indian_panorama_cinema.official_selection_id', '=', '1')
            ->select(
                'indian_panorama_cinema.*',
                'indian_panorama_official_selections.title AS curated_section_title',
            )
            ->limit(8)
            ->get();
        // dd($officialFeature);
        return view('indian-panorama.official-selection-feature', [
            'officialFeature' =>  $officialFeature,
        ]);
    }

    public function officialNonFeature()
    {
        $officialNonFeature = DB::table('indian_panorama_cinema')
            ->join(
                'indian_panorama_official_selections',
                'indian_panorama_cinema.official_selection_id',
                '=',
                'indian_panorama_official_selections.id',
            )
            ->where('indian_panorama_cinema.official_selection_id', '=', '2')
            ->select(
                'indian_panorama_cinema.*',
                'indian_panorama_official_selections.title AS curated_section_title',
            )
            ->limit(8)
            ->get();
        // dd($officialNonFeature);
        return view('indian-panorama.official-selection-non-feature', [
            'officialNonFeature' =>  $officialNonFeature,
        ]);
    }

    public function accessibleFilm()
    {
        $accessibleFilm = DB::table('panorma_cinema')
            ->join(
                'indian_cinema_2022',
                'panorma_cinema.indian_cinema_2022_id',
                '=',
                'indian_cinema_2022.id',
            )
            ->where('panorma_cinema.indian_cinema_2022_id', '=', '5')
            ->select(
                'panorma_cinema.*',
                'indian_cinema_2022.title AS curated_section_title',
            )
            ->limit(8)
            ->get();
        // dd($accessibleFilm);
        return view('indian-panorama.accessible-film', [
            'accessibleFilm' =>  $accessibleFilm,
        ]);
    }
}
