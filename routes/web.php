<?php

use App\Http\Controllers\CommonController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\InternationalCinemaController;
use App\Http\Controllers\IndianPanoramaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');

//ABOUT-US
Route::get('about-us/about-iffi', function () {
    return view('about-us.about-iffi');
})->name('about-iffi');

Route::get('about-us/festival-venue', function () {
    return view('about-us.festival-venue');
})->name('festival-venue');

Route::get('about-us/about-goa/connectivity', function () {
    return view('about-us.about-goa.connectivity');
})->name('connectivity');

Route::controller(CommonController::class)->group(function () {

    Route::get('about-us/about-goa/goa-tourist-places', 'goaTouristPlace')->name('goa-tourist-places');

    Route::get('55th-iffi-festival',                    'iffiFestival')->name('55th-iffi-festival');

    Route::get('highlights',                            'highlights')->name('highlights');

    Route::get('international-cinema',                  'internationalCinema')->name('international-cinema');

    Route::get('director-debut-film',                   'directorDebutFilm')->name('director-debut-film');

    Route::get('indian-panorama',                       'indianPanorama')->name('indian-panorama');

    Route::get('sponsors',                              'sponsors')->name('sponsors');

    Route::get('technical-committee',                   'technicalCommittee')->name('technical-committee');

    Route::get('about-us/faq',                          'faq')->name('faq');

    Route::get('media/gallery',                         'gallery')->name('gallery');

    Route::get('media/press-release',                   'pressRelease')->name('press-release');
});

Route::controller(ContactUsController::class)->group(function () {
    Route::get('about-us/contact-us',    'contactUsView')->name('contact-us');
    Route::post('about-us/contact-us',   'contactUsStore')->name('contact-us');
});

Route::get('get-all-ticker',        [TickerController::class,   'getAllTicker'])->name('get-all-ticker');

//FILM SELECTION / INTERNATIONAL CINEMA

Route::get('international-cinema/rules-regulation', function () {
    return view('international-cinema.rules-regulation');
})->name('icinema-rules-regulation');

Route::controller(InternationalCinemaController::class)->group(function () {

    Route::get('international-cinema/curated-section/international-competition', 'internationalCompetition')->name('international-competition');

    Route::get('international-cinema/curated-section/award-for-best-debute', 'awardForBestDebute')->name('award-for-best-debute');

    Route::get('international-cinema/curated-section/icft-unesco-medal', 'icftUnescoMedal')->name('icft-unesco-medal');

    Route::get('international-cinema/curated-section/festival-kaleloscope', 'festivalKaleloscope')->name('festival-kaleloscope');

    Route::get('international-cinema/curated-section/docu-montage', 'docuMontage')->name('docu-montage');

    Route::get('international-cinema/curated-section/integrade', 'integrade')->name('integrade');

    Route::get('international-cinema/curated-section/animation', 'animation')->name('animation');

    Route::get('international-cinema/curated-section/macabre-dreams', 'macabreDreams')->name('macabre-dreams');

    Route::get('international-cinema/curated-section/cinema-world', 'cinemaWorld')->name('cinema-world');

    Route::get('international-cinema/curated-section/restored-classic', 'restoredClassic')->name('restored-classic');

    Route::get('international-cinema/curated-section/uniceff', 'uniceff')->name('uniceff');
});

//Indian Panorama
Route::controller(IndianPanoramaController::class)->group(function () {
    Route::get('indian-panorama/official-selection-feature',        'officialFeature')->name('official-selection-feature');
    Route::get('indian-panorama/official-selection-non-feature',    'officialNonFeature')->name('official-selection-non-feature');
    Route::get('indian-panorama/accessible-film',                   'accessibleFilm')->name('accessible-film');
});

//Indian Panorama
Route::get('indian-panorama/indian-panorama-rules-regulations', function () {
    return view('indian-panorama.rules-regulations');
})->name('indian-panorama-rules-regulations');

Route::get('indian-panorama/about-indian-panorama', function () {
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

//CMOT
// Route::get('technical-committee', function () {
//     return view('technical-committee');
// })->name('technical-committee');

//MEDIA
Route::get('media/news-and-update', function () {
    return view('media.news-and-update');
})->name('news-and-update');

Route::get('/counter', function () {
    return view('counterView');
})->name('counter');

Route::get('debut-director/about-debut-director', function () {
    return view('indian-debut-director-awards.about-debut-director');
})->name('about-debut-director');

Route::get('debut-director/rules-regulations', function () {
    return view('indian-debut-director-awards.rules-regulations');
})->name('dd-rules-regulations');
