<?php

use App\Http\Controllers\CommonController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\IndianPanoramaController;
use App\Http\Controllers\InternationalCinemaController;
use App\Http\Controllers\TickerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::controller(CommonController::class)->group(function () {

    Route::get('goa-tourist-places', 'goaTouristPlace')->name('goa-tourist-places');

    Route::get('55th-iffi-festival', 'iffiFestival')->name('55th-iffi-festival');

    Route::get('highlights', 'highlights')->name('highlights');

    Route::get('international-cinema', 'internationalCinema')->name('international-cinema');

    Route::get('international-cinema/competition/{slug}', 'internationalCompetitionDetail')->name('international-competition-detail');

    Route::get('director-debut-film', 'directorDebutFilm')->name('director-debut-film');

    Route::get('indian-panorama', 'indianPanorama')->name('indian-panorama');

    Route::get('sponsors', 'sponsors')->name('sponsors');

    Route::get('technical-committee', 'technicalCommittee')->name('technical-committee');

    // Route::get('faq',                                       'faq')->name('faq');

    Route::get('media/gallery', 'gallery')->name('gallery');

    Route::get('media/press-release', 'pressRelease')->name('press-release');

    Route::get('media/news-and-update', 'newsUpdate')->name('news-and-update');

    // Route::get('news-and-update',                 'newsUpdate1')->name('news-and-update');
});

Route::controller(InternationalCinemaController::class)->group(function () {

    Route::get('international-cinema/international-competition', 'internationalCompetition')->name('international-competition');

    Route::get('international-cinema/award-for-best-debute', 'awardForBestDebute')->name('award-for-best-debute');

    Route::get('international-cinema/icft-unesco-medal', 'icftUnescoMedal')->name('icft-unesco-medal');

    Route::get('international-cinema/festival-kaleidoscope', 'festivalKaleloscope')->name('festival-kaleloscope');

    Route::get('international-cinema/docu-montage', 'docuMontage')->name('docu-montage');

    Route::get('international-cinema/integrade', 'integrade')->name('integrade');

    Route::get('international-cinema/animation', 'animation')->name('animation');

    Route::get('international-cinema/macabre-dreams', 'macabreDreams')->name('macabre-dreams');

    Route::get('international-cinema/cinema-world', 'cinemaWorld')->name('cinema-world');

    Route::get('international-cinema/restored-classic', 'restoredClassic')->name('restored-classic');

    Route::get('international-cinema/uniceff', 'uniceff')->name('uniceff');
});

//Indian Panorama
Route::controller(IndianPanoramaController::class)->group(function () {
    Route::get('indian-panorama/official-selection-feature', 'officialFeature')->name('official-selection-feature');
    Route::get('indian-panorama/official-selection-non-feature', 'officialNonFeature')->name('official-selection-non-feature');
    Route::get('indian-panorama/accessible-film', 'accessibleFilm')->name('accessible-film');
});

Route::get('get-all-ticker', [TickerController::class,   'getAllTicker'])->name('get-all-ticker');

//ABOUT-IFFI
Route::get('about-iffi', function () {
    return view('about-us.about-iffi');
})->name('about-iffi');

Route::get('festival-venue', function () {
    return view('about-us.festival-venue');
})->name('festival-venue');

Route::get('goa-connectivity', function () {
    return view('about-us.about-goa.connectivity');
})->name('connectivity');

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

Route::get('cmot-jury', function () {
    return view('cmot.cmot-jury');
})->name('cmot-jury');

Route::get('opening-film', function () {
    return view('screening.opening-film');
})->name('opening-film');

Route::get('midfest-film', function () {
    return view('screening.midfest-film');
})->name('midfest-film');

Route::get('closing-film', function () {
    return view('screening.closing-film');
})->name('closing-film');
