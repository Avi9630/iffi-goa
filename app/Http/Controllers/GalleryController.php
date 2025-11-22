<?php

namespace App\Http\Controllers;

use App\Services\COMMONService;
use App\Models\PhotoCategory;
use Illuminate\Http\Request;
use App\Models\Photo;

class GalleryController extends Controller
{
    public function getGalleryByYear(Request $request, $year, COMMONService $commonService)
    {
        $categories = PhotoCategory::select('id', 'category')->get();

        $query = Photo::where('status', 1)->where('year', $year);

        if ($year == 2025) {
            $dates = $commonService->dates2025();
            $query->whereNotNull('category_id');
            $query->whereNotNull('img_url');
        }
        if ($year == 2024) {
            $dates = $commonService->dates2024();
            $query->whereNotNull('category_id');
            $query->whereNotNull('img_url');
        }
        if ($year == 2023) {
            $dates = $commonService->dates2023();
            $query->whereNull('category_id');
            $query->whereNull('deleted_at');
        }

        $gallery = $query->orderBy('id', 'DESC')->paginate(12);

        return view('gallery.new-gallery', [
            'year'          =>  $year,
            'gallery'       =>  $gallery,
            'categories'    =>  $categories,
            'dates'         =>  $dates,
        ]);
    }

    public function galleryByCategory(Request $request, $year, COMMONService $commonService)
    {
        $payload = $request->all();
        $category = $payload['category_id'] ?? null;
        $searchDate = $payload['date'] ?? null;

        // Start building the query
        $query = Photo::where('status', '1')->where('year', $year);

        // Initialize dates
        $dates = [];

        // Year-specific logic
        if ($year == 2025) {
            $dates = $commonService->dates2025();
            $query->whereNotNull('img_url');
        } elseif ($year == 2024) {
            $dates = $commonService->dates2024();
            $query->whereNotNull('img_url');
        }

        // Filter by uploaded date
        if ($searchDate) {
            $query->whereDate('uploaded_date', $searchDate);
        }

        // Filter by valid category
        if ($category && PhotoCategory::where('id', $category)->exists()) {
            $query->where('category_id', $category);
        }

        // Finalize query with ordering and pagination
        $gallery = $query->orderByDesc('id')->paginate(12);

        // Get all categories
        $categories = PhotoCategory::select('id', 'category')->get();

        // Return view with all data
        return view('gallery.new-gallery', [
            'year' => $year,
            'gallery' => $gallery,
            'categories' => $categories,
            'payload' => $payload,
            'dates' => $dates,
        ]);
    }

    public function getGalleryVideosByYear($year)
    {
        $categories = PhotoCategory::select('id', 'category')->get();

        $query = Photo::where(['status' => 1, 'category_id' => 12]);

        if($year == 2025) {
            $query->where('year', $year);
        }
        if($year == 2024) {
            $query->where('year', $year);
        }

        $gallery = $query->whereNotNull('video_url')
            ->orderBy('id', 'DESC')
            ->paginate(12);
        return view('gallery.new-gallery-videos', [
                'year' => $year,
            'gallery' => $gallery,
            'categories' => $categories,
        ]);
    }

     // public function galleryByCategory(Request $request, $year, COMMONService $commonService)
    // {
    //     $payload = $request->all();
    //     $category = !empty($payload['category_id']) ? $payload['category_id'] : '';
    //     $searchDate = !empty($payload['date']) ? $payload['date'] : '';

    //     $query = Photo::where(['status' => '1', 'year' => $year]);

    //     if ($year == 2025) {
    //         $dates = $commonService->dates2025();
    //         $query->whereNotNull('img_url');
    //     }
    //     if ($year == 2024) {
    //         $dates = $commonService->dates2024();
    //         $query->whereNotNull('img_url');
    //     }

    //     if (!empty($searchDate)) {
    //         $query->whereDate('uploaded_date', $searchDate);
    //     }

    //     $validCategories = PhotoCategory::pluck('id')->toArray();
    //     if (in_array($category, $validCategories)) {
    //         $query->where('category_id', $category);
    //     }

    //     $query->orderBy('id', 'DESC');
    //     $gallery = $query->orderBy('id', 'DESC')->paginate(12);
    //     $categories = PhotoCategory::select('id', 'category')->get();
    //     return view('gallery.new-gallery', [
    //         'year' => $year,
    //         'gallery' => $gallery,
    //         'categories' => $categories,
    //         'payload' => $payload,
    //         'dates' => $dates,
    //     ]);
    // }
}



