<?php

use App\Http\Controllers\CommonController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::controller(ContactUsController::class)->group(function () {
    Route::get('about-us/contact-us',    'contactUsView')->name('contact-us');
    Route::post('about-us/contact-us',   'contactUsStore')->name('contact-us');
});

Route::controller(CommonController::class)->group(function () {

    Route::get('about-us/about-goa/goa-tourist-places',   'goaTouristPlace')->name('goa-tourist-places');

    // Route::get('/',                     'index')->name('/');
    // Route::get('/about-iffi',           'about_iffi')->name('about_iffi');
    // Route::get('/glimpses',             'glimpses')->name('glimpses_2023');
    // Route::get('/connectivity',         'connectivity')->name('about.connectivity');
    // Route::get('/privacy-policy',       'privacyPolicy')->name('privacy_policy');
    // Route::get('/press-release',        'pressRelease')->name('press_release');
    // Route::get('festival_venue',        'festivalVenue')->name('festival_venue');
    // Route::get('faq',                   'faq')->name('faq');
    // Route::get('gallery',               'gallery')->name('gallery');
    // Route::get('ticket_booking',        'ticketBooking')->name('ticket_booking');
    // Route::get('cinema-details/{slug}', 'cinema_details')->name('cinema_details');
    // Route::get('rules-regulations',     'rulesRegulations')->name('rules-regulations');
    // Route::get('peacock-magazine',      'peacock_magazine')->name('peacock_magazine');
    // Route::get('about_indian_panorama', 'indianPanorama')->name('indianPanorama');
    // Route::get('about_web_series',      'webSeries')->name('webSeries');
    // Route::get('about_cmot',            'cmotDetails')->name('about_cmot');

    //INTERNATIONAL CINEMA
    // Route::get('international_competition', 'internationalCompetition')->name('international_competition');
    // Route::get('award_for_best_debute',     'awardForBestDebute')->name('award_for_best_debute');
    // Route::get('icft_unesco_medal',         'icftUnescoMedal')->name('icft_unesco_medal');
    // Route::get('festival_kaleloscope',      'festival_kaleloscope')->name('festival_kaleloscope');
    // Route::get('docu_montage',              'docu_montage')->name('docu_montage');
    // Route::get('integrade',                 'integrade')->name('integrade');
    // Route::get('animation',                 'animation')->name('animation');
    // Route::get('macabreDreams',             'macabreDreams')->name('macabreDreams');
    // Route::get('cinema-world',              'cinemaWorld')->name('cinema-world');
    // Route::get('restored-classic',          'restoredClassic')->name('restored-classic');
    // Route::get('uniceff',                   'uniceff')->name('uniceff');

    // Route::get('official-selection-feature',        'officialFeature')->name('official-selection-feature');
    // Route::get('official-selection-non-feature',    'officialNonFeature')->name('official-selection-non-feature');

    // Route::get('accessible-film',                   'accessibleFilm')->name('accessible-film');
});


Route::get('about-us/about-iffi', function () {
    return view('about-us.about-iffi');
})->name('about-iffi');

Route::get('about-us/festival-venue', function () {
    return view('about-us.festival-venue');
})->name('festival-venue');

Route::get('about-us/festival-venue', function () {
    return view('about-us.festival-venue');
})->name('festival-venue');

Route::get('about-us/about-goa/connectivity', function () {
    return view('about-us.about-goa.connectivity');
})->name('connectivity');

Route::get('about-us/faq', function () {
    return view('about-us.faq');
})->name('faq');


Route::get('get-all-ticker',        [TickerController::class,   'getAllTicker'])->name('get-all-ticker');
Route::get('55th-iffi-festival',    [CommonController::class,   'iffiFestival'])->name('55th-iffi-festival');
Route::get('highlights',            [CommonController::class,   'highlights'])->name('highlights');
Route::get('international-cinema',  [CommonController::class,   'internationalCinema'])->name('international-cinema');
Route::get('director-debut-film',   [CommonController::class,   'directorDebutFilm'])->name('director-debut-film');
Route::get('indian-panorama',       [CommonController::class,   'indianPanorama'])->name('indian-panorama');
Route::get('sponsors',              [CommonController::class,   'sponsors'])->name('sponsors');

Route::get('news-and-update', function () {
    return view('news-and-update.news-and-update');
})->name('news-and-update');

Route::get('/counter', function () {
    return view('counterView');
})->name('counter');
