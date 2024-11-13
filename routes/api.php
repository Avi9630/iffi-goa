<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApiNewController;
use App\Models\Ticker;
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

// PressRelese
Route::get('press-relese-list', [ApiNewController::class, 'pressReleseList'])->name('press-relese-list');

// Gallery
Route::get('get-gallery', [ApiNewController::class, 'getGallery'])->name('get-gallery');
Route::post('update-gallery/{id}', [ApiNewController::class, 'updateGallery'])->name('update-gallery');
Route::post('create-gallery', [ApiNewController::class, 'createGallery'])->name('create-gallery');
Route::get('get-gallery/{id}', [ApiNewController::class, 'getGalleryById'])->name('get-galleryById');

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
// Route::delete('master_classes_delete/{id}', [ApiNewController::class, 'master_classes Delete'])->name('master_classes -delete');

// Cureted Section 2024
Route::get('get-CuretedSection2024', [ApiNewController::class, 'CuretedSection2024'])->name('get-CuretedSection2024');
Route::post('update-curetedsection2024/{id}', [ApiNewController::class, 'updateCuretedsection2024'])->name('update-curetedsection2024');
Route::post('create-Curetedsection2024', [ApiNewController::class, 'createCuretedsection2024'])->name('create-Curetedsection2024');
Route::get('get-curetedsection2024-ById/{id}', [ApiNewController::class, 'curetedsection2024ById'])->name('get-curetedsection2024-ById');
