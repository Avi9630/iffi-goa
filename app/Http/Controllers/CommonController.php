<?php

namespace App\Http\Controllers;

use App\Models\InternationalCinemaBasicDetail;
use App\Models\InternationalCinemaImage;
use App\Models\InternationalCinema;
use App\Models\InternationalMedia;
use App\Models\UnescoHeritageGoa;
use App\Models\GoaTouristPlace;
use App\Models\PhotoCategory;
use Illuminate\Http\Request;
use App\Models\MasterClass;
use App\Models\NewsUpdate;
use App\Models\Photo;
use DB;

class CommonController extends Controller
{
    public function goaTouristPlace()
    {
        $unescoHeritageIds = UnescoHeritageGoa::whereNull('deleted_at')->pluck('id')->toArray();
        $goaTouristPlaces = GoaTouristPlace::with('unescoHeritage')
            ->whereIn('unesco_heritage_goa_id', $unescoHeritageIds)
            ->whereNull('deleted_at')
            ->get()
            ->groupBy('unesco_heritage_goa_id');
        $groupedTouristPlaces = [];
        foreach ($goaTouristPlaces as $heritageId => $places) {
            $groupedTouristPlaces[$heritageId] = $places ?? collect();
        }
        $gtp    =   $groupedTouristPlaces[1] ?? collect();
        $gtpu11 =   $groupedTouristPlaces[2] ?? collect();
        $gtpp22 =   $groupedTouristPlaces[3] ?? collect();
        $gtpp33 =   $groupedTouristPlaces[4] ?? collect();
        return view('about-us.about-goa.goa-tourist-place', [
            'gtp'       =>  $gtp,
            'gtpu11'    =>  $gtpu11,
            'gtpp22'    =>  $gtpp22,
            'gtpp33'    =>  $gtpp33,
        ]);
    }

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

    public function cmotHighlights()
    {
        $datas = Photo::select('id', 'img_url', 'image')
            ->where(['category_id' => 9, 'status' => 1, 'year' => 2024, 'highlights' => 1])->get();

        return $datas;
    }

    public function masterClasssHighlights()
    {
        $datas = Photo::select('id', 'img_url', 'image')
            ->where(['category_id' => 3, 'status' => 1, 'year' => 2024, 'highlights' => 1])->get();

        return $datas;
    }

    public function getLatestUpdate()
    {
        $latestUpdates = DB::table('latest_update')->where(['status' => 1])->get();

        return $latestUpdates;
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

    public function curetedsection2024(Request $request, $slug)
    {
        // dd($slug);
        $array = [
            'international-competition'             =>  1,
            'from-the-festivals'                    =>  3,
            // 'festival-kaleidoscope'              =>  3,
            'icft-unesco-medal'                     =>  4,
            'experimental-films'                    =>  9,
            'macabre-dreams'                        =>  10,
            'unicef'                                =>  11,
            'best-debut-feature-film-of-a-director' =>  13,
            'docu-montage'                          =>  14,
            'cinema-world'                          =>  15,
            'restored-classic'                      =>  16,
            'rising-stars'                          =>  17,
            'mission-life'                          =>  18,
            'BFI@IFFI'                              =>  19,
            'country-focus-australia'               =>  20,
            'accolades'                             =>  21,
            'from-the-consulate'                    =>  22,
            'opening-film'                          =>  23,
            'closing-film'                          =>  24,
            'debut-director-films'                  =>  25,
            'best-web-series'                       =>  26,
            'international-jury-films'              =>  27,
            'special-presentations'                 =>  28,
            'goan-section'                          =>  29,
            'accessible-india-accessible-films'     =>  30,
            'panorama-feature-jury-recommends'      =>  31,
            'special-showcase'                      =>  32,
            'nfdc-showcase-premieres'               =>  33,
            'nfai-classics'                         =>  34,
            'prasar-bharti-ott'                     =>  35,
            'prasar-bharti-films'                   =>  36,
        ];

        $curatedSectionId   =   $array[$slug];
        $year               =   $request->input('year');

        $curatedSections = [
            1   =>  'International Competition',
            3   =>  'From The Festivals',
            4   =>  'ICFT UNESCO Gandhi Medal',
            9   =>  'Experimental Films',
            10  =>  'Macabre Dreams',
            11  =>  'UNICEF',
            13  =>  'Best Debut Feature Film of A Director',
            14  =>  'Docu-Montage',
            15  =>  'Cinema of the World',
            16  =>  'Restored Classics',
            17  =>  'Rising Stars',
            18  =>  'Mission Life',
            19  =>  'BFI@IFFI',
            20  =>  'Country Focus: Australia',
            21  =>  'Accolades',
            22  =>  'From The Consulates',
            23  =>  'Opening Film',
            24  =>  'Closing Film',
            25  =>  'Official Selection - Debut Director Films',
            26  =>  'Official Selection - Best Web Series',
            27  =>  'International Jury Films',
            28  =>  'Special Presentations',
            29  =>  'Goan Section',
            30  =>  'Accessible India, Accessible Films',
            31  =>  'Panorama Feature Jury Recommends',
            32  =>  'Special Showcase',
            33  =>  'NFDC Showcase & Premieres',
            34  =>  'NFAI Classics',
            35  =>  'Prasar Bharti OTT',
            36  =>  'Prasar Bharti Films',
        ];

        $internationalCinemas = DB::table('international_cinema')
            ->join(
                'curated_sections',
                'international_cinema.curated_section_id',
                '=',
                'curated_sections.id'
            )
            ->where([
                'international_cinema.curated_section_id' => $curatedSectionId,
                'international_cinema.award_year' => 2024,
                'international_cinema.status' => 1,
            ])
            ->select(
                'international_cinema.*',
                'curated_sections.title AS curated_section_title'
            )
            ->limit(80)
            ->get();

        return view('international-cinema.2024.curated-section-2024', compact('internationalCinemas', 'curatedSections', 'curatedSectionId'));
    }

    public function internationalCompetitionDetail($slug)
    {
        $fetch_cinema_details               =   InternationalCinema::where(['status' => 1, 'slug' => $slug])->first();
        $fetch_cinema_basic_details         =   InternationalCinemaBasicDetail::where(['status' => 1, 'cinema_id' => $fetch_cinema_details->id])->first();
        $currentURL                         =   $_SERVER['REQUEST_URI'];
        $list_international_cinema_images   =   InternationalCinemaImage::where(['status' => '1', 'cinema_id' => $fetch_cinema_details->id])->get();

        $list_international_cinema_videos = DB::table('international_cinema_videos')
            ->where('status', '=', '1')
            ->where('cinema_id', '=', $fetch_cinema_details->id)
            ->get();

        return view(
            'pages.international-competition-detail',
            [
                'fetch_cinema_details'              =>  $fetch_cinema_details,
                'fetch_cinema_basic_details'        =>  $fetch_cinema_basic_details,
                'currentURL'                        =>  $currentURL,
                'list_international_cinema_images'  =>  $list_international_cinema_images,
                'list_international_cinema_videos'  =>  $list_international_cinema_videos,
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
        $directorDebutFilm = InternationalCinema::where([
            'curated_section_id' => 13,
            'award_year' => 2024,
        ])->get();
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

    public function faq()
    {
        $faqs = DB::table('iffi_faq')->where(['status' => 1])->get();

        return view('about-us.faq', ['faqs' => $faqs]);
    }

    public function gallery(Request $request)
    {
        $payload = $request->all();
        $year = isset($payload['year']) ? $payload['year'] : null;
        $gallery = DB::table('mst_photos')
            ->where('status', 1)
            ->where('year', $year)
            ->where('category_id', null)
            ->whereNull('deleted_at')
            ->orderBy('id', 'DESC')
            ->paginate(8)
            ->onEachSide(1);

        return view('gallery.gallery', [
            'gallery' => $gallery,
        ]);
    }

    public function gallery2024(Request $request)
    {
        $payload = $request->all();
        $year = isset($payload['year']) ? $payload['year'] : null;
        $categories = PhotoCategory::select('id', 'category')->get();
        $dates = [
            '2024-11-20',
            '2024-11-21',
            '2024-11-22',
            '2024-11-23',
            '2024-11-24',
            '2024-11-25',
            '2024-11-26',
            '2024-11-27',
            '2024-11-28',
        ];
        $payload = $request->all();
        $year = isset($payload['year']) ? $payload['year'] : null;
        $categories = PhotoCategory::select('id', 'category')->get();
        $gallery = Photo::where('status', 1)
            ->where('year', $year)
            ->where('img_url', '!=', '')
            ->whereNotNull('category_id')
            ->orderBy('id', 'DESC')
            ->paginate(12);

        return view('gallery.new-gallery', [
            'gallery' => $gallery,
            'categories' => $categories,
            'dates' => $dates,
        ]);
    }

    public function galleryByCategory(Request $request)
    {
        $payload = $request->all();
        $category = ! empty($payload['category_id']) ? $payload['category_id'] : '';
        $date = ! empty($payload['date']) ? $payload['date'] : '';
        $query = Photo::where(['status' => '1', 'year' => '2024'])->where('img_url', '!=', '');
        if (! empty($date)) {
            $query->whereDate('uploaded_date', $date);
        }
        $validCategories = PhotoCategory::pluck('id')->toArray();
        if (in_array($category, $validCategories)) {
            $query->where('category_id', $category);
        }
        $query->orderBy('id', 'DESC');
        $gallery = $query->get();
        $gallery = $query->paginate(12);
        $categories = PhotoCategory::select('id', 'category')->get();
        $dates = [
            '2024-11-20',
            '2024-11-21',
            '2024-11-22',
            '2024-11-23',
            '2024-11-24',
            '2024-11-25',
            '2024-11-26',
            '2024-11-27',
            '2024-11-28',
        ];
        $categories = PhotoCategory::select('id', 'category')->get();

        return view('gallery.new-gallery', [
            'gallery' => $gallery,
            'categories' => $categories,
            'payload' => $payload,
            'dates' => $dates,
        ]);
    }

    public function galleryVideos2024(Request $request)
    {
        $payload = $request->all();
        $year = isset($payload['year']) ? $payload['year'] : null;
        $categories = PhotoCategory::select('id', 'category')->get();
        $gallery = Photo::select('id', 'img_caption', 'year', 'video_url')->where(['status' => 1, 'year' => $year, 'category_id' => 12])
            ->where('video_url', '!=', '')
            ->paginate(12);

        return view('gallery.new-gallery-videos', [
            'gallery' => $gallery,
            'categories' => $categories,
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

    public function internationalMedia()
    {
        // $payload = $request->all();
        $internationalMedia = InternationalMedia::where('status', 1)
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('media.international-media', ['internationalMedia' => $internationalMedia]);
    }
}
