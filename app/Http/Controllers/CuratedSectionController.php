<?php

namespace App\Http\Controllers;

use App\Models\InternationalCinema;
use App\Http\Traits\UICLASSTrait;
use App\Models\CuratedSection;
use Illuminate\Http\Request;

class CuratedSectionController extends Controller
{
    use UICLASSTrait;

    // public function curetedsection2024(Request $request, $slug)
    // {
    //     dd($slug);
    //     $curatedSections = CuratedSection::all()->keyBy('id');
    //     $curatedSectionId = CuratedSection::where('slug', $slug)->pluck('id')->first();
    //     $internationalCinemas = InternationalCinema::with('curatedSection')
    //         ->where('curated_section_id', $curatedSectionId)
    //         ->where('award_year', 2024)
    //         ->where('status', 1)
    //         ->limit(8)
    //         ->get()
    //         ->map(function ($cinema) {
    //             $cinema->curated_section_title = $cinema->curatedSection->title ?? null;
    //             return $cinema;
    //         });
    //     return view('international-cinema.2024.curated-section-2024', compact('internationalCinemas', 'curatedSections', 'curatedSectionId'));
    // }

    // public function curetedsection2023(Request $request, $slug)
    // {
    //     $curatedSections = CuratedSection::all()->keyBy('id');
    //     $curatedSectionId = CuratedSection::where('slug', $slug)->pluck('id')->first();
    //     $internationalCinemas = InternationalCinema::with('curatedSection')
    //         ->where('curated_section_id', $curatedSectionId)
    //         ->limit(8)
    //         ->get()
    //         ->map(function ($cinema) {
    //             $cinema->curated_section_title = $cinema->curatedSection->title ?? null;
    //             return $cinema;
    //         });
    //     $cssClass = $this->headerClass($curatedSectionId);
    //     return view('international-cinema.2023.curated-section-2023', compact('internationalCinemas', 'curatedSections', 'curatedSectionId', 'cssClass'));
    // }

    function curetedsection(Request $request, $year, $slug)
    {
        $curatedSections = CuratedSection::all()->keyBy('id');
        $curatedSectionId = CuratedSection::where('slug', $slug)->pluck('id')->first();
        $internationalCinemas = InternationalCinema::with('curatedSection')
            ->where(['curated_section_id' => $curatedSectionId, 'status' => 1, 'award_year' => $year])
            ->limit(8)
            ->get()
            ->map(function ($cinema) {
                $cinema->curated_section_title = $cinema->curatedSection->title ?? null;
                return $cinema;
            });
        if ($year == 2025) {
            $cssClass = $this->headerClass($curatedSectionId);
            return view('international-cinema.2025.curated-section-2025', compact('internationalCinemas', 'curatedSections', 'curatedSectionId', 'year', 'cssClass'));
        } elseif ($year == 2024) {
            $cssClass = $this->headerClass($curatedSectionId);
            return view('international-cinema.2024.curated-section-2024', compact('internationalCinemas', 'curatedSections', 'curatedSectionId', 'year', 'cssClass'));
        } elseif ($year == 2023) {
            $cssClass = $this->headerClass($curatedSectionId);
            return view('international-cinema.2023.curated-section-2023', compact('internationalCinemas', 'curatedSections', 'curatedSectionId', 'year', 'cssClass'));
        }else{
            return abort(404);
        }
    }

    public function internationalCinema()
    {
        $internationalCinemas = InternationalCinema::with('curatedSection')
            ->where('curated_section_id', 1)
            ->where('year', 2024)
            ->where('status', 1)
            ->limit(20)
            ->get()
            ->map(function ($cinema) {
                $cinema->curated_section_title = $cinema->curatedSection->title ?? null;
                return $cinema;
            });
        return $internationalCinemas;
    }
}
