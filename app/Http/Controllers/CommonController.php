<?php

namespace App\Http\Controllers;

use App\Models\MasterClass;
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

    public function getLatestUpdate()
    {
        $latestUpdates = DB::table('latest_update')->where(['status' => 1])->get();

        return $latestUpdates;
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
            ->where([
                'international_cinema.curated_section_id' => 1,
                'year' => 2024,
                'international_cinema.status' => 1,
            ])
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title',
            )
            ->limit(20)
            ->get();

        return $internationalCinemas;
    }

    public function curetedsection2024(Request $request, $slug)
    {
        //  exit($slug);
        $array = [
            'international-competition' => 1,
            'best-debut-feature-film-of-a-director' => 13,
            'icft-unesco-medal' => 4,
            'festival-kaleidoscope' => 3,
            'docu-montage' => 14,
            'macabre-dreams' => 10,
            'cinema-world' => 15,
            'restored-classic' => 16,
            'unicef' => 11,
            'from-the-festivals' => 3,
            'experimental-films' => 9,
            'rising-stars' => 17,
            'mission-life' => 18,
            'BFI@IFFI' => 19,
            'country-focus-australia' => 20,
            'accolades' => 21,
            'from-the-consulate' => 22,
            'opening-film' => 23,
            'closing-film' => 24,
            'debut-director-films' => 25,
            'best-web-series' => 26,
            'international-jury-films' => 27,
            'special-presentations' => 28,
        ];
        //  echo '<pre>';
        // print_r($array);
        // print_r($slug);

        $curatedSectionId = $array[$slug];

        $year = $request->input('year');
        $curatedSections = [
            1 => 'International Competition',
            3 => 'From The Festivals',
            4 => 'ICFT UNESCO Gandhi Medal',
            9 => 'Experimental Films',
            10 => 'Macabre Dreams',
            11 => 'UNICEF',
            13 => 'Best Debut Feature Film of A Director',
            14 => 'Docu-Montage',
            15 => 'Cinema of the World',
            16 => 'Restored Classics',
            17 => 'Rising Stars',
            18 => 'Mission Life',
            19 => 'BFI@IFFI',
            20 => 'Country Focus: Australia',
            21 => 'Accolades',
            22 => 'From The Consulates',
            23 => 'Opening Film',
            24 => 'Closing Film',
            25 => 'Official Selection - Debut Director Films',
            26 => 'Official Selection - Best Web Series',
            27 => 'International Jury Films',
            28 => 'Special Presentations',
        ];

        $internationalCinemas = DB::table('international_cinema')
            ->join(
                'international_curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'international_curated_sections.id'
            )
            ->where([
                'international_cinema.curated_section_id' => $curatedSectionId,
                'international_cinema.year' => 2024,
                'international_cinema.status' => 1,
            ])
            ->select(
                'international_cinema.*',
                'international_curated_sections.title AS curated_section_title'
            )
            ->limit(80)
            ->get();
        //   exit('sada');

        return view('international-cinema.2024.curated-section-2024', compact('internationalCinemas', 'curatedSections', 'curatedSectionId'));
    }

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

    public function bestDirectorDetail($slug)
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
            'pages.best-director-detail',
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

        // dd($directorDebutFilm);
        return $directorDebutFilm;
    }

    public function indianPanorama($year)
    {
        $indianPanormas = DB::table('indian_panorama_cinema')
            ->where('status', '=', '1')
            ->where('year', '=', $year)
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
        $peacock = DB::table('the_peacock');
        $peacock->where('status', '1');
        $peacock->orderBy('id', 'desc');
        if ($year) {
            $peacock->where('year', $year);
        }
        $thepeacock = $peacock->get();
        // echo '<pre>';
        // print_r($thepeacock);
        // exit();

        return view('media.the-peacock', [
            'thepeacock' => $thepeacock, // Pass the paginated results correctly
            'year' => $year, // Also pass the year as intended for the header display
        ]);
    }

    public function newsUpdate()
    {
        $newsUpdates = NewsUpdate::where('status', 1)->orderBy('id', 'DESC')->get();

        return view('media.news-and-update', ['newsUpdates' => $newsUpdates]);
    }

    public function newsUpdate1()
    {
        $datas = NewsUpdate::where('status', 1)
            // ->orderBy('updated_at', 'DESC')
            ->orderBy('id', 'DESC')
            ->limit(6)
            ->get();

        return $datas;
    }

    public function masterClass()
    {
        $masterClasses = MasterClass::all(); // or any other query to get your data

        return view('master-class.master', compact('masterClasses'));
    }

    public function partnersSponsors()
    {
        $sponcersPartners = DB::table('the_partner_sponsor')
            ->select('title', DB::raw("GROUP_CONCAT(img_src SEPARATOR ', ') AS images"))
            ->groupBy('title')
            ->get();

        return view('partnersSponsors.partner-sponsers', [
            'sponcersPartners' => $sponcersPartners,
        ]);
    }
}
