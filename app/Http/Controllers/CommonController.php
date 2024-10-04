<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CommonController extends Controller
{
    public function iffiFestival()
    {
        $datas  =   DB::table('iffi_festival_programmes')->where(['status' => 1])->get();
        return $datas;
    }

    public function highlights()
    {
        $datas  =   DB::table('highlights')->where(['status' => 1])->get();
        return $datas;
    }

    public function internationalCinema()
    {
        $internationalCinemas = DB::table('international_cinema')
            ->join(
                'international_curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'international_curated_sections.id',
            )
            ->where('international_cinema.status', '=', '1')
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            ->limit(20)
            ->get();
        return $internationalCinemas;
    }

    public function directorDebutFilm()
    {
        $directorDebutFilm = DB::table('international_cinema')
            ->where('curated_section_id', '=', 13)
            ->where('year', '=', 2023)
            ->get();
        return $directorDebutFilm;
    }

    public function indianPanorama()
    {
        $indianPanormas = DB::table('indian_panorama_cinema')
            ->where('status', '=', '1')
            ->where('year', '=', '2023')
            ->get();
        return $indianPanormas;
    }

    public function sponsors()
    {
        $sponsors = [
            'barco-logo-png.png',
            'big-fm.png',
            'Google-Arts-Culture-Logo.png',
            'inox.png',
            'jist.png',
            'Marriott-Hotel.png',
            'Puz-Electronics.png',
            'Qube-Cinema.png',
            'Shorts-TV.png',
            'ufo.png',
            'unicef.png',
            'zee-media.png',
        ];
        return $sponsors;
    }

    public function technicalCommittee (){
        $partners = [
            'barco-logo-png.png',
            'Puz-Electronics.png',
            'Qube-Cinema.png',
            'Smpte.png',
            'qubewire.jpeg',
        ];
        return view('technical-committee',['partners' => $partners]);
    }

    // public function partners()
    // {
    //     $partners = [
    //         'barco-logo-png.png',
    //         'big-fm.png',
    //         'jist.png',
    //         'Marriott-Hotel.png',
    //         'Puz-Electronics.png',
    //         'Qube-Cinema.png',
    //         'Shorts-TV.png',
    //     ];
    //     return $partners;
    // }

    public function goaTouristPlace()
    {
        $gtp = DB::table('mst_about_goa_tourist_places_gallery')
            ->where('tourist_places_unesco_id', 1)
            ->whereNull('deleted_at')
            ->get();
        $gtpu11 = DB::table('mst_about_goa_tourist_places_gallery')
            ->where('tourist_places_unesco_id', 2)
            ->whereNull('deleted_at')
            ->get();
        $gtpu = DB::table('mst_about_goa_tourist_places_unesco')->where('id', 1)->whereNull('deleted_at')->get();
        $gtpp22 = DB::table('mst_about_goa_tourist_places_gallery')
            ->where('tourist_places_unesco_id', 3)
            ->whereNull('deleted_at')
            ->get();
        $gtpp33 = DB::table('mst_about_goa_tourist_places_gallery')
            ->where('tourist_places_unesco_id', 4)
            ->whereNull('deleted_at')
            ->get();

        return view('about-us.about-goa.goa-tourist-place', [
            'gtp'       =>  $gtp,
            'gtpu'      =>  $gtpu,
            'gtpu11'    =>  $gtpu11,
            'gtpp22'    =>  $gtpp22,
            'gtpp33'    =>  $gtpp33,
        ]);
    }

    public function faq()
    {
        $faqs  =   DB::table('iffi_faq')->where(['status' => 1])->get();
        return view('about-us.faq', ['faqs' => $faqs]);
    }

    public function gallery()
    {
        $gallery = DB::table('mst_photos')->where('status', 1)->whereNull('deleted_at')->orderBy('id', 'DESC')->paginate(8);
        // dd($gallery);
        return view('gallery.gallery', [
            'gallery'           =>  $gallery,
        ]);
    }

    public function pressRelease()
    {
        $press = DB::table('mst_press_release')
            ->where('status', '1')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('media.press-release', ['press' => $press]);
    }
}
