<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
