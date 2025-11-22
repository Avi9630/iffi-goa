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
            ->where('status', 1)
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
            ->where('status', 1)
            ->when(!empty($year), function ($query) use ($year) {
                return $query->where('year', $year);
            })
            ->get();
        return view('indian-panorama.official-selection-non-feature', [
            'officialNonFeature' =>  $officialFeature,
            'year' =>  $year,
        ]);
    }

    public function officialBestDebutDirector(Request $request)
    {
        $payload            =   $request->all();
        $year               =   isset($payload['year']) ? $payload['year'] : '';
        $bestDebutDirectors = IndianPanorama::with('officialSelection')
            ->where('official_selection_id', 3)
            ->where('status', 1)
            ->when(!empty($year), function ($query) use ($year) {
                return $query->where('year', $year);
            })
            ->get();
        return view('indian-panorama.best-debut-director', [
            'bestDebutDirectors' =>  $bestDebutDirectors,
            'year' =>  $year,
        ]);
    }

    public function specialPresentation(Request $request)
    {
        $payload            =   $request->all();
        $year               =   isset($payload['year']) ? $payload['year'] : '';

        $data = IndianPanorama::with('officialSelection')
            ->where('official_selection_id', 4)
            ->where('status', 1)
            ->when(!empty($year), function ($query) use ($year) {
                return $query->where('year', $year);
            })
            ->get();
        $specialPresentations = $data->groupBy('sub_category');
        return view('indian-panorama.special-presentation', [
            'specialPresentations'  =>  $specialPresentations,
            'year'                  =>  $year,
        ]);
    }

    public function aiCompetition(Request $request)
    {
        $payload            =   $request->all();
        $year               =   isset($payload['year']) ? $payload['year'] : '';

        $data = IndianPanorama::with('officialSelection')
            ->where('official_selection_id', 7)
            ->where('status', 1)
            ->when(!empty($year), function ($query) use ($year) {
                return $query->where('year', $year);
            })
            ->get();
        $competitions = $data->groupBy('sub_category');

        return view('ai-films.competition-films', [
            'competitions'  =>  $competitions,
            'year'                  =>  $year,
        ]);
    }

    public function aiNonCompetition(Request $request)
    {
        $payload            =   $request->all();
        $year               =   isset($payload['year']) ? $payload['year'] : '';

        $data = IndianPanorama::with('officialSelection')
            ->where('official_selection_id', 8)
            ->where('status', 1)
            ->when(!empty($year), function ($query) use ($year) {
                return $query->where('year', $year);
            })
            ->get();
        $competitions = $data->groupBy('sub_category');
        return view('ai-films.non-competition-films', [
            'competitions'  =>  $competitions,
            'year'                  =>  $year,
        ]);
    }

    public function newHorizon(Request $request)
    {
        $payload            =   $request->all();
        $year               =   isset($payload['year']) ? $payload['year'] : '';
        $newHorizons = IndianPanorama::with('officialSelection')
            ->where('official_selection_id', 5)
            ->where('status', 1)
            ->when(!empty($year), function ($query) use ($year) {
                return $query->where('year', $year);
            })
            ->get();
        return view('indian-panorama.new-horizon', [
            'newHorizons' =>  $newHorizons,
            'year' =>  $year,
        ]);
    }

    public function retrospectiveRajnikanth(Request $request)
    {
        $payload            =   $request->all();
        $year               =   isset($payload['year']) ? $payload['year'] : '';

        $newHorizons = IndianPanorama::with('officialSelection')
            ->where('official_selection_id', 6)
            ->where('status', 1)
            ->when(!empty($year), function ($query) use ($year) {
                return $query->where('year', $year);
            })
            ->get();

        return view('indian-panorama.retrospective-rajnikanth', [
            'newHorizons'   =>  $newHorizons,
            'year'          =>  $year,
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
