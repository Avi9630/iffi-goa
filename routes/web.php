<?php

use App\Http\Controllers\CommonController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\InternationalCinemaController;
use App\Http\Controllers\IndianPanoramaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('get-all-ticker',        [TickerController::class,   'getAllTicker'])->name('get-all-ticker');

Route::controller(ContactUsController::class)->group(function () {
    Route::get('about-us/contact-us',    'contactUsView')->name('contact-us');
    Route::post('about-us/contact-us',   'contactUsStore')->name('contact-us');
});

Route::controller(CommonController::class)->group(function () {

    Route::get('about-us/about-goa/goa-tourist-places', 'goaTouristPlace')->name('goa-tourist-places');

    Route::get('55th-iffi-festival',                    'iffiFestival')->name('55th-iffi-festival');

    Route::get('highlights',                            'highlights')->name('highlights');

    Route::get('international-cinema',                  'internationalCinema')->name('international-cinema');

    Route::get('director-debut-film',                   'directorDebutFilm')->name('director-debut-film');

    Route::get('indian-panorama',                       'indianPanorama')->name('indian-panorama');

    Route::get('sponsors',                              'sponsors')->name('sponsors');
});


//INTERNATIONAL CINEMA 
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

Route::get('indian-panorama/indian-panorama-rules-regulations', function () {
    return view('indian-panorama.rules-regulations');
})->name('indian-panorama-rules-regulations');

Route::get('indian-panorama/about-indian-panorama', function () {
    return view('indian-panorama.about-indian-panorama');
})->name('about-indian-panorama');

Route::get('indian-panorama/special-screening', function () {
    return view('indian-panorama.special-screening');
})->name('special-screening');


//ABOUT-US

Route::get('about-us/about-iffi', function () {
    return view('about-us.about-iffi');
})->name('about-iffi');

Route::get('about-us/festival-venue', function () {
    return view('about-us.festival-venue');
})->name('festival-venue');

// Route::get('about-us/festival-venue', function () {
//     return view('about-us.festival-venue');
// })->name('festival-venue');

Route::get('about-us/about-goa/connectivity', function () {
    return view('about-us.about-goa.connectivity');
})->name('connectivity');

Route::get('about-us/faq', function () {
    return view('about-us.faq');
})->name('faq');

Route::get('news-and-update', function () {
    return view('news-and-update.news-and-update');
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
