<?php

namespace App\Http\Controllers;

use App\Models\CuratedSection;
use App\Models\InternationalCinema;
use Illuminate\Http\Request;

class CuratedSectionController extends Controller
{
    public function curetedsection2024(Request $request, $slug)
    {
        $curatedSections        =   CuratedSection::all()->keyBy('id');
        $curatedSectionId       =   CuratedSection::where('slug', $slug)->pluck('id')->first();
        $internationalCinemas   =   InternationalCinema::with('curatedSection')
            ->where('curated_section_id', $curatedSectionId)
            ->where('award_year', 2024)
            ->where('status', 1)
            ->limit(8)
            ->get()
            ->map(function ($cinema) {
                $cinema->curated_section_title = $cinema->curatedSection->title ?? null;
                return $cinema;
            });
        return view('international-cinema.2024.curated-section-2024', compact('internationalCinemas', 'curatedSections', 'curatedSectionId'));
    }

    public function curetedsection2023(Request $request, $slug)
    {
        $curatedSections        =   CuratedSection::all()->keyBy('id');
        $curatedSectionId       =   CuratedSection::where('slug', $slug)->pluck('id')->first();
        $internationalCinemas   =   InternationalCinema::with('curatedSection')
            ->where('curated_section_id', $curatedSectionId)
            ->limit(8)
            ->get()
            ->map(function ($cinema) {
                $cinema->curated_section_title = $cinema->curatedSection->title ?? null;
                return $cinema;
            });

        return view('international-cinema.2023.curated-section-2023', compact('internationalCinemas', 'curatedSections', 'curatedSectionId'));
    }
}
