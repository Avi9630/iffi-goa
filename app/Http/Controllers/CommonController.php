<?php

namespace App\Http\Controllers;

use App\Models\NewsUpdate;
use DB;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function iffiFestival()
    {
        $datas = DB::table('iffi_festival_programmes')->where(['status' => 1])->get();

        return $datas;
    }

    public function highlights()
    {
        $datas = DB::table('highlights')->where(['status' => 1])->get();

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
            ->where(['international_cinema.curated_section_id' => 1,
                'year' => 2024])
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            ->limit(20)
            ->get();

        return $internationalCinemas;
    }

    // public function internationalCompetitionDetail($id)
    // {
    //     // dd($id);
    //     $internationalCinemas = DB::table('international_cinema')
    //         ->join(
    //             'international_curated_sections',
    //             'international_cinema.curated_section_id',
    //             '=',
    //             'international_curated_sections.id',
    //         )
    //         ->where('international_cinema.status', '=', '1')
    //         ->select(
    //             'international_cinema.*',
    //             'international_curated_sections.title AS curated_section_title',
    //         )
    //         ->limit(20)
    //         ->get();
    //     return view('pages.international-competition-detail');
    // }

    public function internationalCompetitionDetail($slug)
    {
        $fetch_cinema_details = DB::table('international_cinema')
            ->where('status', '=', '1')
            ->where('slug', '=', $slug)
            ->first();

        $fetch_cinema_basic_details = DB::table('international_cinema_basic_details')
            ->where('status', '=', '1')
            ->where('cinema_id', '=', $fetch_cinema_details->id)
            ->first();
        // dd($fetch_cinema_basic_details);
        $currentURL = $_SERVER['REQUEST_URI'];

        $list_international_cinema_images = DB::table('international_cinema_images')
            ->where('status', '=', '1')
            ->where('cinema_id', '=', $fetch_cinema_details->id)
            ->get();

        $list_international_cinema_videos = DB::table('international_cinema_videos')
            ->where('status', '=', '1')
            ->where('cinema_id', '=', $fetch_cinema_details->id)
            ->get();

        return view(
            'pages.international-competition-detail',
            [
                'fetch_cinema_details' => $fetch_cinema_details,
                'fetch_cinema_basic_details' => $fetch_cinema_basic_details,
                'currentURL' => $currentURL,
                'list_international_cinema_images' => $list_international_cinema_images,
                'list_international_cinema_videos' => $list_international_cinema_videos,
            ]
        );
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

    public function technicalCommittee()
    {
        $partners = [
            'barco-logo-png.png',
            'Puz-Electronics.png',
            'Qube-Cinema.png',
            'Smpte.png',
            'qubewire.jpeg',
        ];

        return view('technical-committee', ['partners' => $partners]);
    }

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
            'gtp' => $gtp,
            'gtpu' => $gtpu,
            'gtpu11' => $gtpu11,
            'gtpp22' => $gtpp22,
            'gtpp33' => $gtpp33,
        ]);
    }

    public function faq()
    {
        $faqs = DB::table('iffi_faq')->where(['status' => 1])->get();

        return view('about-us.faq', ['faqs' => $faqs]);
    }

    public function gallery()
    {
        $gallery = DB::table('mst_photos')->where('status', 1)->whereNull('deleted_at')->orderBy('id', 'DESC')->paginate(8)->onEachSide(1);

        // dd($gallery);
        return view('gallery.gallery', [
            'gallery' => $gallery,
        ]);
    }

    public function getGalleryByDate(Request $request)
    {
        $date = $request->input('date');
        $gallery = DB::table('mst_gallery_2024')
            ->where('date', $date)
            ->get();

        return response()->json($gallery);
    }

    public function gallery2024()
    {
        // Retrieve all active gallery photos
        $gallery = DB::table('mst_gallery_2024')
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();

        // Get distinct dates and categories
        $dates = DB::table('mst_gallery_2024')
            ->select(DB::raw("DATE_FORMAT(date, '%b %d') as date_alias"), 'date')
            ->where('status', 1)
            ->distinct()
            ->orderBy('date', 'asc')
            ->get();

        $categories = DB::table('mst_gallery_2024')
            ->where('status', 1)
            ->distinct()
            ->pluck('category');

        $titles = DB::table('mst_gallery_2024')
            ->where('status', 1)
            ->distinct()
            ->pluck('title');

        return view('gallery.new-gallery', [
            'gallery' => $gallery,
            'dates' => $dates,
            'categories' => $categories,
            'titles' => $titles,
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

    public function thepeacock(Request $request)
    {
        $year = $request->input('year');

        $peacock = DB::table('the_peacock')
            ->where('status', '1')
            ->orderBy('id', 'desc');

        if ($year) {
            $peacock->where('year', $year);
        }

        $thepeacock = $peacock->paginate(10);
        //  echo '<pre>';
        // print_r($thepeacock);
        // exit();

        return view('media.the-peacock', [
            'thepeacock' => $thepeacock, // Pass the paginated results correctly
            'year' => $year, // Also pass the year as intended for the header display
        ]);
    }

    public function newsUpdate()
    {
        $newsUpdates = NewsUpdate::where('status', 1)->orderBy('sort_num', 'DESC')->get();

        return view('media.news-and-update', ['newsUpdates' => $newsUpdates]);
    }

    public function newsUpdate1()
    {
        $datas = NewsUpdate::where('status', 1)
            ->orderBy('updated_at', 'DESC')
            ->limit(3)
            ->get();

        return $datas;
    }
}
