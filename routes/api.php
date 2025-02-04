<?php

use App\Http\Controllers\api\ApiController;
use App\Http\Controllers\api\GalleryController;
use App\Http\Controllers\api\IndianPanoramaController;
use App\Http\Controllers\api\InternationalCinemaController;
use App\Http\Controllers\api\InternationalMediaController;
use App\Http\Controllers\ApiNewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/testing', function (Request $request) {
    return response()->json([
        'status' => true,
        'status_code' => 200,
        'message' => 'Testing success',
        'data' => [],
    ]);
});
// CSV read API
Route::get('csv-read', [ApiNewController::class, 'readCSVV'])->name('csv-read');

// Ticker
Route::get('ticker-list', [ApiController::class, 'tickerList'])->name('ticker-list');
Route::post('create-ticker', [ApiController::class, 'createTicker'])->name('create-ticker');
Route::post('update-ticker', [ApiController::class, 'updateTicker'])->name('update-ticker');
Route::post('delete-ticker', [ApiController::class, 'deleteTicker'])->name('delete-ticker');

//News and Update
Route::get('news-update-list', [ApiController::class, 'newsUpdateList'])->name('news-update-list');
Route::post('create-news-update', [ApiController::class, 'createNewsUpdate'])->name('create-news-update');
Route::post('update-news-update', [ApiController::class, 'updateNewsUpdate'])->name('update-news-update');
Route::post('delete-news-update', [ApiController::class, 'deleteNewsUpdate'])->name('delete-news-update');

//faqs
Route::get('faqs-list', [ApiController::class, 'faqsList'])->name('faqs-list');
Route::post('create-faqs', [ApiController::class, 'createFaqs'])->name('create-faqs');
Route::post('update-faqs', [ApiController::class, 'updateFaqs'])->name('update-faqs');
Route::post('delete-faqs', [ApiController::class, 'deleteFaqs'])->name('delete-faqs');

// Abhishek's API .. dont delete
// News & Update
Route::post('news-update/{id}', [ApiNewController::class, 'updateNewsUpdate'])->name('update-news');
Route::get('news-details/{id}', [ApiNewController::class, 'newsUpdateDetails'])->name('details-news');
Route::post('news-create', [ApiNewController::class, 'createNewsUpdate'])->name('create-news');

// Ticker
Route::get('list-ticker', [ApiNewController::class, 'tickerList'])->name('list-ticker');
Route::post('ticker-update/{id}', [ApiNewController::class, 'updateTicker'])->name('update-ticker');
Route::get('ticker-details/{id}', [ApiNewController::class, 'tickerDetails'])->name('ticker-details');
Route::post('ticker-create', [ApiNewController::class, 'tickerCreate'])->name('ticker-create');
Route::delete('ticker-delete/{id}', [ApiNewController::class, 'tickerDelete'])->name('ticker-delete');

// LatestUpdate
Route::get('latest-Update', [ApiNewController::class, 'latestUpdate'])->name('list-LatestUpdate');
Route::post('latest-Update/{id}', [ApiNewController::class, 'updatelatestUpdate'])->name('latest-Update');
Route::get('latestUpdate-details/{id}', [ApiNewController::class, 'latestUpdateDetails'])->name('latestUpdate-details');
Route::post('latestUpdate-create', [ApiNewController::class, 'latestUpdateCreate'])->name('latestUpdate-create');
Route::delete('latestUpdate-delete/{id}', [ApiNewController::class, 'latestUpdateDelete'])->name('latestUpdate-delete');

// The Peacock
Route::get('thePeacock-List', [ApiNewController::class, 'thePeacockList'])->name('thePeacock-List');
Route::get('get-thePeacock/{id}', [ApiNewController::class, 'getthePeacockById'])->name('get-thePeacockById');
Route::post('update-thePeacock/{id}', [ApiNewController::class, 'updateThePeacock'])->name('update-thePeacock');
Route::post('create-thePeacock', [ApiNewController::class, 'createThePeacock'])->name('create-thePeacock');
Route::delete('delete-thePeacock/{id}', [ApiNewController::class, 'deleteThePeacock'])->name('delete-thePeacock');

// MasterClass
Route::get('master_classes', [ApiNewController::class, 'getMasterClass'])->name('master_classes ');
Route::post('master_classes_Update/{id}', [ApiNewController::class, 'updateMasterClass'])->name('master_classes_Update');
Route::get('master_classes_details/{id}', [ApiNewController::class, 'getMasterClassById'])->name('master_classes_details');
Route::post('master_classes_create', [ApiNewController::class, 'createMasterClass'])->name('master_classes_create');

// Cureted Section 2024
Route::get('get-CuretedSection2024', [ApiNewController::class, 'curetedSection2024'])->name('get-CuretedSection2024');
Route::post('update-curetedsection2024/{id}', [ApiNewController::class, 'updateCuretedsection2024'])->name('update-curetedsection2024');
Route::post('create-Curetedsection2024', [ApiNewController::class, 'createCuretedsection2024'])->name('create-Curetedsection2024');
Route::get('get-curetedsection2024-ById/{id}', [ApiNewController::class, 'curetedsection2024ById'])->name('get-curetedsection2024-ById');
Route::get('get-CuretedSection2024', [ApiNewController::class, 'CuretedSection2024'])->name('get-CuretedSection2024');

// SPONSORS-PARTNERS

Route::get('sponsors-partners-list', [ApiNewController::class, 'thePartnerSponsor'])->name('thePeacock-List');
Route::post('create-sponsors-partners', [ApiNewController::class, 'createPartnerSponsor'])->name('create-sponsors-partners');
Route::post('update-sponsors-partners/{id}', [ApiNewController::class, 'updatePartnerSponsor'])->name('update-sponsors-partners');
Route::get('get-sponsors-partners-by-id/{id}', [ApiNewController::class, 'getPartnerSponsorById'])->name('get-sponsors-partners-by-id');
Route::get('delete-sponsors-partners/{id}', [ApiNewController::class, 'deletePartnerSponsor'])->name('delete-sponsors-partners');

//INDIAN-PANORAMA

Route::get('indian-panorama-list/{year}', [IndianPanoramaController::class, 'indianPanoramaList'])->name('indian-panorama-list');
Route::post('create-indian-panorama', [IndianPanoramaController::class, 'createIndianPanorama'])->name('create-indian-panorama');
Route::post('update-indian-panorama', [IndianPanoramaController::class, 'updateIndianPanorama'])->name('update-indian-panorama');
Route::post('delete-indian-panorama', [IndianPanoramaController::class, 'deleteIndianPanorama'])->name('delete-indian-panorama');
Route::post('active-deactive', [IndianPanoramaController::class, 'activeDeactive'])->name('active-deactive');

// PRESS-RELEASE
Route::post('add-press-release', [ApiController::class, 'addPressRelease'])->name('add-press-release');
Route::post('update-press-release', [ApiController::class, 'updatePressRelease'])->name('update-press-release');

//INTERNATIONAL-CINEMA-BASIC-Details
Route::get('get-curated-section', [InternationalCinemaController::class, 'getCuratedSection'])->name('get-curated-section');
Route::get('international-cinema-list', [InternationalCinemaController::class, 'internationCinemaList'])->name('international-cinema-list');
Route::post('international-cinema-create', [InternationalCinemaController::class, 'internationCinemaCreate'])->name('international-cinema-create');
Route::post('international-cinema-update/{id}', [InternationalCinemaController::class, 'internationCinemaUpdate'])->name('international-cinema-update');
Route::get('international-cinema-by-id/{id}', [InternationalCinemaController::class, 'getById'])->name('international-cinema-by-id');
Route::post('international-cinema-basic-detail/{international_cinema_id}', [InternationalCinemaController::class, 'createBasicDetail'])->name('international-cinema-basic-detail');

// CSV

Route::post('csv', [ApiController::class, 'csv'])->name('csv');

//GALLERY
Route::get('all_photo', [GalleryController::class, 'allPhoto'])->name('all_photo');
Route::get('photo_by_id/{id}', [GalleryController::class, 'getById'])->name('photo_by_id');
Route::post('gallery_upload', [GalleryController::class, 'create'])->name('gallery_upload');
Route::post('photo_active_inactive/{id}', [GalleryController::class, 'update'])->name('photo_active_inactive');
Route::post('photo_delete/{id}', [GalleryController::class, 'delete'])->name('photo_delete');
Route::get('photo_category', [GalleryController::class, 'photoCategory'])->name('photo_category');

// PressRelese
Route::get('press-relese-list', [ApiNewController::class, 'pressReleseList'])->name('press-relese-list');

//International Media
Route::get('all-international-media', [InternationalMediaController::class, 'getAll'])->name('all-international-media');
Route::post('create-international-media', [InternationalMediaController::class, 'create'])->name('create-international-media');
Route::post('update-international-media', [InternationalMediaController::class, 'update'])->name('update-international-media');
Route::post('delete-international-media', [InternationalMediaController::class, 'delete'])->name('delete-international-media');
Route::get('fetch-international-media-by-id/{id}', [InternationalMediaController::class, 'fetchById'])->name('fetch-international-media-by-id');
