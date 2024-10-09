<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/testing', function (Request $request) {
    return response()->json([
        'status' => true,
        'status_code' => 200,
        'message'   =>  'Testing success',
        'data'  =>  [],
    ]);
});

// Ticker
Route::get('ticker-list',       [ApiController::class, 'tickerList'])->name('ticker-list');
Route::post('create-ticker',    [ApiController::class, 'createTicker'])->name('create-ticker');
Route::post('update-ticker',    [ApiController::class, 'updateTicker'])->name('update-ticker');
Route::post('delete-ticker',    [ApiController::class, 'deleteTicker'])->name('delete-ticker');

//News and Update
Route::get('news-update-list',       [ApiController::class, 'newsUpdateList'])->name('news-update-list');
Route::post('create-news-update',    [ApiController::class, 'createNewsUpdate'])->name('create-news-update');
Route::post('update-news-update',    [ApiController::class, 'updateNewsUpdate'])->name('update-news-update');
Route::post('delete-news-update',    [ApiController::class, 'deleteNewsUpdate'])->name('delete-news-update');
