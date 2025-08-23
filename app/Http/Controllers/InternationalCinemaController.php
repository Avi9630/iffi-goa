<?php

namespace App\Http\Controllers;

use DB;

class InternationalCinemaController extends Controller
{
    public function internationalCompetition2024()
    {
        $internationalCinemas = DB::table('international_cinema')
            ->join(
                'international_curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'international_curated_sections.id',
            )
            // ->where('international_cinema.status', '=', '1')
            // ->where('international_curated_sections.id', '=', '1')
            // ->where('international_cinema.curated_section_id', '=', '1')
            ->where([
                'international_cinema.curated_section_id' => 1,
                'year' => 2024
            ])
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            // ->orderBy('international_cinema.id', 'DESC')
            // ->limit(8)
            ->get();

        // dd($internationalCinemas);
        return view('international-cinema.2024.international-competition', [
            'internationalCinemas' => $internationalCinemas,
        ]);
    }

    public function internationalCompetition()
    {
        $internationalCinemas = DB::table('international_cinema')
            ->join(
                'curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'curated_sections.id',
            )
            ->where('international_cinema.curated_section_id', '=', '1')
            ->select(
                'international_cinema.*',
                'curated_sections.title AS curated_section_title',
            )
            ->limit(8)
            ->get();
        return view('international-cinema.international-competition', [
            'internationalCinemas' => $internationalCinemas,
        ]);
    }

    public function awardForBestDebute()
    {
        $awardBestDebute = DB::table('international_cinema')
            ->join(
                'international_curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'international_curated_sections.id',
            )
            ->where('international_cinema.curated_section_id', '=', '13')
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            ->limit(8)
            ->get();

        // dd($awardBestDebute);
        return view('international-cinema.award-for-best-debute', [
            'awardBestDebute' => $awardBestDebute,
        ]);
    }

    public function icftUnescoMedal()
    {
        $icft_unesco_medal = DB::table('international_cinema')
            ->join(
                'international_curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'international_curated_sections.id',
            )
            ->where('international_cinema.curated_section_id', '=', '4')
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            ->limit(8)
            ->get();

        // dd($icft_unesco_medal);
        return view('international-cinema.icft-unesco-medal', [
            'icfts' => $icft_unesco_medal,
        ]);
    }

    public function festivalKaleloscope()
    {
        $festival_kaleloscope = DB::table('international_cinema')
            ->join(
                'international_curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'international_curated_sections.id',
            )
            ->where('international_cinema.curated_section_id', '=', '3')
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            ->limit(8)
            ->get();

        // dd($festival_kaleloscope);
        return view('international-cinema.festival-kaleloscope', [
            'kaleloscopes' => $festival_kaleloscope,
        ]);
    }

    public function docuMontage()
    {
        $docu_montage = DB::table('international_cinema')
            ->join(
                'international_curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'international_curated_sections.id',
            )
            ->where('international_cinema.curated_section_id', '=', '14')
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            ->limit(8)
            ->get();

        // dd($docu_montage);
        return view('international-cinema.docu-montage', [
            'montages' => $docu_montage,
        ]);
    }

    public function integrade()
    {
        $integrade = DB::table('international_cinema')
            ->join(
                'international_curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'international_curated_sections.id',
            )
            ->where('international_cinema.curated_section_id', '=', '9')
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            ->limit(8)
            ->get();

        // dd($integrade);
        return view('international-cinema.integrade', [
            'integrades' => $integrade,
        ]);
    }

    public function animation()
    {
        $animation = DB::table('international_cinema')
            ->join(
                'international_curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'international_curated_sections.id',
            )
            ->where('international_cinema.curated_section_id', '=', '8')
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            ->limit(8)
            ->get();

        // dd($animation);
        return view('international-cinema.animation', [
            'animations' => $animation,
        ]);
    }

    public function macabreDreams()
    {
        $macabreDreams = DB::table('international_cinema')
            ->join(
                'international_curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'international_curated_sections.id',
            )
            ->where('international_cinema.curated_section_id', '=', '10')
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            ->limit(8)
            ->get();

        // dd($macabreDreams);
        return view('international-cinema.macabre-dreams', [
            'macabreDreams' => $macabreDreams,
        ]);
    }

    public function cinemaWorld()
    {
        $cinemaWorld = DB::table('international_cinema')
            ->join(
                'international_curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'international_curated_sections.id',
            )
            ->where('international_cinema.curated_section_id', '=', '15')
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            ->limit(8)
            ->get();

        // dd($cinemaWorld);
        return view('international-cinema.cinema-world', [
            'cinemaWorld' => $cinemaWorld,
        ]);
    }

    public function restoredClassic()
    {
        $restoredClassic = DB::table('international_cinema')
            ->join(
                'international_curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'international_curated_sections.id',
            )
            ->where('international_cinema.curated_section_id', '=', '16')
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            ->limit(8)
            ->get();

        // dd($restoredClassic);
        return view('international-cinema.restored-classic', [
            'restoredClassic' => $restoredClassic,
        ]);
    }

    public function uniceff()
    {
        $uniceff = DB::table('international_cinema')
            ->join(
                'international_curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'international_curated_sections.id',
            )
            ->where('international_cinema.curated_section_id', '=', '11')
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            ->limit(8)
            ->get();

        // dd($uniceff);
        return view('international-cinema.uniceff', [
            'uniceffs' => $uniceff,
        ]);
    }
}
