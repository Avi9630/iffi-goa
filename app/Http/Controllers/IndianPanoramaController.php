<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndianPanoramaController extends Controller
{
    public function officialFeature(Request $request)
    {
        $payload            =   $request->all();
        $year               =   isset($payload['year']) ? $payload['year'] : '';
        $officialFeature    =   DB::table('indian_panorama_cinema');
        $officialFeature->join(
            'indian_panorama_official_selections',
            'indian_panorama_cinema.official_selection_id',
            '=',
            'indian_panorama_official_selections.id',
        );
        $officialFeature->where('indian_panorama_cinema.official_selection_id', '=', '1');
        if (!empty($year)) {
            $officialFeature->where('indian_panorama_cinema.year', '=', $year);
        }
        $officialFeature->select(
            'indian_panorama_cinema.*',
            'indian_panorama_official_selections.title AS curated_section_title',
        );
        $officialFeature->limit(8);
        $feature = $officialFeature->get();
        return view('indian-panorama.official-selection-feature', [
            'officialFeature' =>  $feature,
            'year'               => $year
        ]);
    }

    public function officialNonFeature(Request $request)
    {
        $payload            =   $request->all();
        $year               =   isset($payload['year']) ? $payload['year'] : '';

        $officialNonFeature = DB::table('indian_panorama_cinema');
        $officialNonFeature->join(
            'indian_panorama_official_selections',
            'indian_panorama_cinema.official_selection_id',
            '=',
            'indian_panorama_official_selections.id',
        );
        $officialNonFeature->where('indian_panorama_cinema.official_selection_id', '=', '2');
        if (!empty($year)) {
            $officialNonFeature->where('indian_panorama_cinema.year', '=', $year);
        }
        $officialNonFeature->select(
            'indian_panorama_cinema.*',
            'indian_panorama_official_selections.title AS curated_section_title',
        );
        $officialNonFeature->limit(8);
        $nonFeature = $officialNonFeature->get();
        // dd($officialNonFeature);
        return view('indian-panorama.official-selection-non-feature', [
            'officialNonFeature' =>  $nonFeature,
            'year' =>  $year,
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
