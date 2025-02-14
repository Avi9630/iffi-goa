<?php

use App\Http\Controllers\IndianPanoramaController;
use App\Http\Controllers\CuratedSectionController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\TickerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::controller(CommonController::class)->group(function () {

    Route::get('goa-tourist-places', 'goaTouristPlace')->name('goa-tourist-places');

    Route::get('55th-iffi-festival', 'iffiFestival')->name('55th-iffi-festival');

    Route::get('highlights', 'highlights')->name('highlights');

    Route::get('international-cinema/competition/{slug}', 'internationalCompetitionDetail')->name('international-competition-detail');

    Route::get('international-cinema/best-director/{slug}', 'bestDirectorDetail')->name('best-director-detail');

    Route::get('director-debut-film', 'directorDebutFilm')->name('director-debut-film');

    Route::get('indian-panorama', 'indianPanorama')->name('indian-panorama');

    Route::get('sponsors', 'sponsors')->name('sponsors');

    Route::get('technical-committee', 'technicalCommittee')->name('technical-committee');

    Route::get('media/gallery', 'gallery')->name('gallery');

    Route::get('media/gallery-2024', 'gallery2024')->name('gallery-2024');

    Route::get('media/gallery-2024/videos', 'galleryVideos2024')->name('gallery-2024/videos');

    Route::get('search-gallery-by-cat', 'galleryByCategory')->name('search-gallery-by-cat');

    Route::get('media/press-release', 'pressRelease')->name('press-release');

    Route::get('media/the-peacock', 'thepeacock')->name('the-peacock');

    Route::get('media/news-and-update', 'newsUpdate')->name('news-and-update');

    Route::get('media/international-media', 'internationalMedia')->name('media-international-media');

    Route::get('/gallery/date', 'getGalleryByDate')->name('gallery.byDate');
});

Route::controller(CuratedSectionController::class)->group(function () {
    Route::get('international-cinema/2024/{slug}', 'curetedsection2024')->name('cureted-section-2024');
    Route::get('international-cinema/2023/{slug}', 'curetedsection2023')->name('cureted-section-2023');
    Route::get('debut-director-films/2024/{slug}', 'curetedsection2024')->name('debut-director-films');
    Route::get('indian-panorama/2024/{slug}', 'curetedsection2024')->name('indian-panorama-2024');
    Route::get('best-web-series/2024/{slug}', 'curetedsection2024')->name('best-web-series');
});

//Indian Panorama
Route::controller(IndianPanoramaController::class)->group(function () {
    Route::get('indian-panorama/official-selection-feature', 'officialFeature')->name('official-selection-feature');
    Route::get('indian-panorama/official-selection-non-feature', 'officialNonFeature')->name('official-selection-non-feature');
    Route::get('indian-panorama/{slug}/{year}', 'accessibleFilm')->name('accessible-film');
});

Route::get('get-all-ticker', [TickerController::class,   'getAllTicker'])->name('get-all-ticker');

//About Iffi
Route::get('about-iffi', function () {
    return view('about-us.about-iffi');
})->name('about-iffi');

// Festival Vanue
Route::get('festival-venue', function () {
    return view('about-us.festival-venue');
})->name('festival-venue');

//About-goa/Connectivity
Route::get('goa-connectivity', function () {
    return view('about-us.about-goa.connectivity');
})->name('connectivity');

Route::get('iffi-accessibility', function () {
    return view('about-us.Accessible-IFFI');
})->name('iffi-accessibility');

Route::get('filmbazaar-mariott-programme', function () {
    return view('Film-Bazaar.filmbazaar-marriott');
})->name('filmbazaar-mariott-programme');

Route::get('faq', function () {
    return view('about-us.faq');
})->name('faq');

Route::controller(ContactUsController::class)->group(function () {
    Route::get('contact-us', 'contactUsView')->name('contact-us');
    Route::post('contact-us', 'contactUsStore')->name('contact-us');
});

//FILM SELECTION / INTERNATIONAL CINEMA
Route::get('international-cinema/rules-regulation', function () {
    return view('international-cinema.rules-regulation');
})->name('icinema-rules-regulation');

//Indian Panorama
Route::get('indian-panorama/indian-panorama-rules-regulations', function () {
    return view('indian-panorama.rules-regulations');
})->name('indian-panorama-rules-regulations');

Route::get('indian-panorama/about-IP', function () {
    return view('indian-panorama.about-indian-panorama');
})->name('about-indian-panorama');

Route::get('indian-panorama/special-screening', function () {
    return view('indian-panorama.special-screening');
})->name('special-screening');

//Web series
Route::get('web-series/about-web-series', function () {
    return view('web-series.about-web-series');
})->name('about-web-series');

//Gala Premieres
Route::get('gala-premier/1st-edition', function () {
    return view('gala-premier.1st-edition');
})->name('1st-edition');

Route::get('gala-premier/2nd-edition', function () {
    return view('gala-premier.2nd-edition');
})->name('2nd-edition');

Route::get('gala-premier/3rd-edition', function () {
    return view('gala-premier.3rd-edition');
})->name('3rd-edition');

//CMOT
Route::get('cmot/about-cmot', function () {
    return view('cmot.about-cmot');
})->name('about-cmot');

Route::get('/counter', function () {
    return view('counterView');
})->name('counter');

Route::get('debut-director/about-debut-director', function () {
    return view('indian-debut-director-awards.about-debut-director');
})->name('about-debut-director');

Route::get('debut-director/rules-regulations', function () {
    return view('indian-debut-director-awards.rules-regulations');
})->name('dd-rules-regulations');

Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

//Master Classes
Route::get('master-classes', function () {
    return view('master');
})->name('master-classes');

Route::get('knowledge-series', function () {
    return view('knowledge-series');
})->name('knowledge-series');

// Jury Route
Route::get('international-jury', function () {
    return view('international-cinema.international-jury');
})->name('international-jury');

Route::get('indian-panorama-jury-feature', function () {
    return view('indian-panorama.indian-panorama-jury-feature');
})->name('indian-panorama-jury-feature');

Route::get('indian-panorama-jury-non-feature', function () {
    return view('indian-panorama.indian-panorama-jury-non-feature');
})->name('indian-panorama-jury-non-feature');

Route::get('debut-director-jury', function () {
    return view('indian-debut-director-awards.debut-director-jury');
})->name('debut-director-jury');

Route::get('web-series-jury', function () {
    return view('web-series.web-series-jury');
})->name('web-series-jury');

Route::get('Best-web-series-previw-commitee-2024', function () {
    return view('web-series.Best-web-series-previw-commitee-2024');
})->name('Best-web-series-previw-commitee-2024');

Route::get('debut-directors-previw-commitee-2024', function () {
    return view('web-series.debut-directors-previw-commitee-2024');
})->name('debut-directors-previw-commitee-2024');

Route::get('cmot-jury', function () {
    return view('cmot.cmot-jury');
})->name('cmot-jury');

Route::get('cmot-grand-jury', function () {
    return view('cmot.cmot-grand-jury');
})->name('cmot-grand-jury');

Route::get('opening-film', function () {
    return view('screening.opening-film');
})->name('opening-film');

Route::get('midfest-film', function () {
    return view('screening.midfest-film');
})->name('midfest-film');

Route::get('closing-film', function () {
    return view('screening.closing-film');
})->name('closing-film');

Route::get('partners-sponsors', function () {
    return view('partnersSponsors.partner-sponsers');
})->name('partners-sponsors');
