<?php

namespace App\Http\Controllers;

use App\Http\Traits\RESPONSETrait;
use App\Models\curetedsection2024;
use App\Models\Gallery;
use App\Models\LatestUpdate;
use App\Models\MasterClass;
use App\Models\NewsUpdate;
use App\Models\ThePartnerSponsor;
use App\Models\ThePeacock;
use App\Models\Ticker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use DB;

class ApiNewController extends Controller
{
    use RESPONSETrait;

    // News & Update
    public function createNewsUpdate(Request $request)
    {
        $payload = $request->all();

        // Validation rules
        $validatorArray = [
            'title' => 'required',
            'description' => 'required',
            'img_src_file' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Make img_src_file optional
            'link' => 'nullable|string',
            'link_title' => 'nullable|string',
        ];

        $validator = Validator::make($payload, $validatorArray);

        if ($validator->fails()) {
            return $this->response('validatorerrors', [
                'message' => $validator->errors()->first(),
            ]);
        }

        try {
            // Handle file upload if exists
            $fileName = null;
            $fileNameOriginal = null;
            if ($request->hasFile('img_src_file')) {
                $file = $request->file('img_src_file');
                $destinationPath = 'images/news-update';
                $fileNameOriginal = $file->getClientOriginalName(); // Adding timestamp to prevent name collision

                $extension = strtolower($request->file('img_src_file')->getClientOriginalExtension());
                $modifiedName = (rand(100000, 999999)) . '_' . time() . '.' . $extension;

                $file->move(public_path($destinationPath), $modifiedName);
                $fileName = $modifiedName;
            }

            // Clean the 'pop_up_content' field before saving it
            $popUpContent = isset($payload['pop_up_content']) ? $payload['pop_up_content'] : null;
            $popUpContent = $this->cleanPopUpContent($popUpContent);

            // Prepare data for new entry
            $data = [
                'image_name' => $fileNameOriginal,
                'title' => $payload['title'],
                'description' => $payload['description'],
                'img_src' => $fileName, // Add the file name if file was uploaded
                'link' => $payload['link'] ?? null, // Use null if not provided
                'link_title' => $payload['link_title'] ?? null, // Use null if not provided
                'pop_up_content' => $popUpContent, // Cleaned content
                'have_popup' => $payload['have_popup'] ?? null, // Optional
                'pop_up_header' => $payload['pop_up_header'] ?? null, // Optional
                'sort_num' => $payload['sort_num'] ?? null, // Optional
            ];

            // Create a new news update
            $newsUpdate = NewsUpdate::create($data);

            // Return the response
            return $this->response('success', [
                'message' => 'News update created successfully!',
                'data' => $newsUpdate,
            ]);
        } catch (\Exception $e) {
            // Return exception response in case of an error
            return $this->response('exception', [
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function newsUpdateDetails($id)
    {
        try {
            $newsUpdatedetails = NewsUpdate::find($id);

            $response = [
                'message' => 'Details fetched successfully.!',
                'data' => $newsUpdatedetails,
            ];

            return $this->response('success', $response);
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function updateNewsUpdate(Request $request, $id)
    {
        $payload = $request->all();
        $validatorArray = [
            'title' => 'required',
            'description' => 'required',
            'img_src_file' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Made file optional
            'link' => '',
            'link_title' => '',
            'status' => 'in:1,0',
        ];
        $messagesArray = [];
        $validator = Validator::make($payload, $validatorArray, $messagesArray);

        if ($validator->fails()) {
            $output = [
                'message' => $validator->errors()->first(),
            ];

            return $this->response('validatorerrors', $output);
        }

        try {
            $newsUpdate = NewsUpdate::find($id);

            if ($newsUpdate) {
                $fileName = $newsUpdate->img_src; // Retain the previous file name if no new file is uploaded
                $fileNameOriginal = $newsUpdate->image_name; // Retain the previous file name if no new file is uploaded

                // Check if there's a new file to upload
                if ($request->hasFile('img_src_file')) {
                    $file = $request->file('img_src_file');
                    $destinationPath = 'images/news-update';
                    $fileName = $file->getClientOriginalName();
                    $fileNameOriginal = $file->getClientOriginalName();
                    $extension = strtolower($request->file('img_src_file')->getClientOriginalExtension());
                    $modifiedName = (rand(100000, 999999)) . '_' . time() . '.' . $extension;

                    $file->move(public_path($destinationPath), $modifiedName);
                    $fileName = $modifiedName;
                }

                // Clean the 'pop_up_content' field before saving it
                $popUpContent = isset($payload['pop_up_content']) ? $payload['pop_up_content'] : $newsUpdate->pop_up_content;
                $popUpContent = $this->cleanPopUpContent($popUpContent);

                // Prepare data to update
                $data = [
                    'image_name' => $fileNameOriginal,
                    'title' => isset($payload['title']) ? $payload['title'] : $newsUpdate->title,
                    'description' => isset($payload['description']) ? $payload['description'] : $newsUpdate->description,
                    'img_src' => $fileName, // Use the old or new file name
                    'link' => isset($payload['link']) ? $payload['link'] : $newsUpdate->link,
                    'link_title' => isset($payload['link_title']) ? $payload['link_title'] : $newsUpdate->link_title,
                    'status' => isset($payload['status']) ? $payload['status'] : $newsUpdate->status,
                    'pop_up_content' => $popUpContent,
                    'have_popup' => isset($payload['have_popup']) ? $payload['have_popup'] : 0,
                    'pop_up_header' => isset($payload['pop_up_header']) ? $payload['pop_up_header'] : $newsUpdate->pop_up_header,
                    'sort_num' => isset($payload['sort_num']) ? $payload['sort_num'] : $newsUpdate->sort_num,
                ];

                // Update the news update record
                $newsUpdate->update($data);

                $response = [
                    'message' => 'Updated successfully!',
                    'data' => $data,
                ];

                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Record not found!',
                ];

                return $this->response('exception', $response);
            }
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    private function cleanPopUpContent($content)
    {
        $content = html_entity_decode($content);
        $content = preg_replace('/<p>\s*<\/p>/', '', $content);

        return trim($content);
    }

    // Ticker
    public function tickerList()
    {
        try {
            // Step 1: Retrieve all tickers with specific fields
            $tickerList = Ticker::select('id', 'content', 'status')->get();

            // Step 2: Check if any tickers are found
            if ($tickerList->isEmpty()) {
                return $this->response('no_content', [
                    'message' => 'No tickers found.',
                    'data' => [],
                ], 204); // 204 status for no content
            }

            // Step 3: Return a success response with the retrieved ticker data
            return $this->response('success', [
                'message' => 'All tickers fetched successfully!',
                'data' => $tickerList,
            ], 200); // 200 status for success

        } catch (\Exception $e) {
            // Step 4: Handle any unexpected errors
            return $this->response('exception', [
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500); // 500 status for internal server error
        }
    }

    public function updateTicker(Request $request, $id)
    {
        // Retrieve all request data
        $payload = $request->all();

        // Define validation rules
        $validator = Validator::make($payload, [
            'content' => 'nullable|string',  // Ensure 'content' is a string if provided
            'status' => 'nullable|in:1,0',   // Ensure 'status' is either 1 or 0 if provided
        ]);

        // If validation fails, return an error response
        if ($validator->fails()) {
            return response()->json([
                'status' => 'validation_error',
                'message' => $validator->errors()->first(),
            ], 422);
        }

        try {
            // Find the ticker entry by ID or return a 404 error if not found
            $ticker = Ticker::findOrFail($id);

            // Update only the fields provided in the request
            $ticker->update([
                'content' => $payload['content'] ?? $ticker->content,
                'status' => $payload['status'] ?? $ticker->status,
            ]);

            // Return a success response with the updated ticker data
            return response()->json([
                'status' => 'success',
                'message' => 'Ticker updated successfully!',
                'data' => $ticker,
            ], 200);
        } catch (\Exception $e) {
            // Return an error response for any exceptions
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function tickerDetails($id)
    {
        try {
            // Attempt to find the ticker entry by its ID
            $tickerDetails = Ticker::find($id);

            // Check if tickerDetails exists
            if (! $tickerDetails) {
                return $this->response('not_found', [
                    'message' => 'Ticker not found!',
                ]);
            }

            // Prepare a success response with the retrieved details
            $response = [
                'message' => 'Ticker details fetched successfully!',
                'data' => $tickerDetails,
            ];

            return $this->response('success', $response);
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response
            $response = [
                'message' => 'An error occurred: ' . $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function tickerCreate(Request $request)
    {
        // Step 1: Retrieve all data from the request
        $payload = $request->all();

        // Step 2: Define validation rules and custom messages (if any)
        $validator = Validator::make($payload, [
            'content' => 'required|string|max:255',  // 'content' is required, should be a string with a max length
            'status' => 'required|in:1,0',           // 'status' is required, must be 1 or 0
        ]);

        // Step 3: Check for validation errors
        if ($validator->fails()) {
            return $this->response('validation_error', [
                'message' => $validator->errors()->first(),
            ], 422); // 422 status for validation error
        }

        try {
            // Step 4: Create the ticker record in the database
            $ticker = Ticker::create([
                'content' => $payload['content'],
                'status' => $payload['status'],
            ]);

            // Step 5: Return a success response with the created ticker data
            return $this->response('success', [
                'message' => 'Ticker created successfully!',
                'data' => $ticker,  // Return the newly created ticker data
            ], 201); // 201 status for created

        } catch (\Exception $e) {
            // Step 6: Handle any unexpected errors
            return $this->response('exception', [
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500); // 500 status for internal server error
        }
    }

    public function tickerDelete($id)
    {
        try {
            // Find the ticker by ID
            $ticker = Ticker::find($id);

            if (! $ticker) {
                return response()->json(['status' => 'error', 'message' => 'Ticker not found'], 404);
            }

            // Delete the ticker
            $ticker->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Ticker deleted successfully',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }

    // Gallery
    public function getGallery()
    {
        try {
            // Fetch all gallery records from the database
            $galleryData = Gallery::all();

            // Check if data exists
            if ($galleryData->isEmpty()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'No gallery updates found.',
                    'data' => [],
                ], 200);
            }

            // Return the gallery data as JSON response
            return response()->json([
                'status' => 'success',
                'message' => 'Gallery updates retrieved successfully.',
                'data' => $galleryData,
            ], 200);
        } catch (\Exception $e) {
            // Return error response in case of exception
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve gallery updates.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function updateGallery(Request $request, $id)
    {
        $payload = $request->all();
        try {

            // Validate the request data (fields are now optional)
            $validator = Validator::make($payload, [
                'title' => 'nullable|string|max:255',
                'category' => 'nullable|string|max:255',
                'image' => 'nullable|string|max:255', // Assuming image is a URL or file path
                'date' => 'nullable|date',
                'status' => 'nullable|in:1,0', // Assuming status can be 'active' or 'inactive'      // 'status' is required, must be 1 or 0
            ]);

            if ($validator->fails()) {
                $output = [
                    'message' => $validator->errors()->first(),
                    'data' => $payload,
                ];

                return $this->response('validatorerrors', $output);
            }

            // Set up initial data
            $date = $payload['date'];
            $formattedDate = \DateTime::createFromFormat('D, d M Y H:i:s T', $date)->format('Y-m-d');
            // Find the gallery by ID
            $gallery = Gallery::findOrFail($id);

            // Update the gallery with new data if provided
            if (isset($payload['title'])) {
                $gallery->title = $payload['title'];
            }
            if (isset($payload['category'])) {
                $gallery->category = $payload['category'];
            }
            if (isset($payload['image'])) {
                $gallery->image = $payload['image'];
            }
            if (isset($payload['date'])) {
                $gallery->date = $formattedDate;
            }
            if (isset($payload['status'])) {
                $gallery->status = $payload['status'];
            }

            // Save the changes to the database
            $gallery->save();

            // Return a success response
            return response()->json([
                'status' => 'success',
                'message' => 'Gallery updated successfully.',
                'data' => $gallery,
            ], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Return validation error response
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error.',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // Return general error response
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update gallery.',
                'error' => $e->getMessage(),
                'payload' => $payload,
            ], 500);
        }
    }

    public function getGalleryById($id)
    {
        try {
            // Fetch the gallery record by ID from the database
            $galleryData = Gallery::find($id);

            // Check if the record exists
            if (! $galleryData) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Gallery not found.',
                    'data' => null,
                ], 404);
            }

            // Return the gallery data as JSON response
            return response()->json([
                'status' => 'success',
                'message' => 'Gallery data retrieved successfully.',
                'data' => $galleryData,
            ], 200);
        } catch (\Exception $e) {
            // Return error response in case of exception
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve gallery data.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function createGallery(Request $request)
    {
        $payload = $request->all();

        // Validation rules
        $validatorArray = [
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'img_src_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
            'status' => 'required|boolean',
        ];

        $validator = Validator::make($payload, $validatorArray);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'validation_error',
                'message' => $validator->errors()->first(),
            ], 422);
        }

        try {
            // Set up initial data
            $date = $payload['date'];
            $formattedDate = \DateTime::createFromFormat('D, d M Y H:i:s T', $date)->format('Y-m-d');

            // echo $formattedDate;
            $data = [
                'title' => $payload['title'],
                'category' => $payload['category'],
                'date' => $formattedDate,
                'status' => $payload['status'],
                'image' => '',
            ];

            // Handle image upload
            if ($request->hasFile('img_src_file')) {
                $file = $request->file('img_src_file');
                $destinationPath = 'images/gallery_images';
                $fileName = $file->getClientOriginalName();
                $fullFilePath = public_path("{$destinationPath}/{$fileName}");
                $extension = strtolower($request->file('img_src_file')->getClientOriginalExtension());
                $modifiedName = (rand(100000, 999999)) . '_' . time() . '.' . $extension;
                // Move file to the destination and set image path in data
                $file->move(public_path($destinationPath), $modifiedName);
                $data['image'] = "{$modifiedName}";
                $data['image_name'] = "{$fileName}";
            }

            // Create gallery record
            $gallery = Gallery::create($data);

            // Return success response
            return response()->json([
                'status' => 'success',
                'message' => 'Gallery created successfully.',
                'data' => $gallery,
            ], 201);
        } catch (\Exception $e) {
            // Return error response in case of exception
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create gallery.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    // The Peacock
    public function thePeacockList()
    {
        try {
            // Fetch all thePeacock records from the database
            $thePeacockData = ThePeacock::all();

            // Check if data exists
            if ($thePeacockData->isEmpty()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'No thePeacock updates found.',
                    'data' => [],
                ], 200);
            }

            // Return the thePeacock data as JSON response
            return response()->json([
                'status' => 'success',
                'message' => 'thePeacock updates retrieved successfully.',
                'data' => $thePeacockData,
            ], 200);
        } catch (\Exception $e) {
            // Return error response in case of exception
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve thePeacock updates.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function updateThePeacock(Request $request, $id)
    {
        //  exit('Aditya');
        $payload = $request->all();
        try {
            // Validate the request data (fields are now optional)
            $validator = Validator::make($payload, [
                'title' => 'nullable|string|max:255',
                'img_src_file' => 'nullable|mimes:pdf|max:20000',
                'year' => 'nullable',
                'status' => 'nullable|in:0,1', // Assuming status can be 'active' or 'inactive'
            ]);

            if ($validator->fails()) {
                $output = [
                    'message' => $validator->errors()->first(),
                    'data' => $payload,
                ];

                return $this->response('validatorerrors', $output);
            }
            $thePeacock = ThePeacock::findOrFail($id);
            $fileNameOriginal = $thePeacock->image_name;
            $modifiedName = $thePeacock->img_src;
            // Check if a new file is uploaded
            if ($request->hasFile('img_src_file')) {
                $file = $request->file('img_src_file');
                $destinationPath = 'images/thePeacock';
                $fileNameOriginal = $file->getClientOriginalName();
                $extension = strtolower($file->getClientOriginalExtension());
                $modifiedName = rand(100000, 999999) . '_' . time() . '.' . $extension;
                $file->move(public_path($destinationPath), $modifiedName);
                $fileName = $modifiedName;
            }

            // Find the thePeacock by ID

            // Update the thePeacock with new data if provided
            $thePeacock->title = $payload['title'];
            $thePeacock->year = $payload['year'];
            $thePeacock->status = $payload['status'];
            $thePeacock->image_name = $fileNameOriginal;
            $thePeacock->img_src = $modifiedName;

            // Save the changes to the database
            $thePeacock->save();

            // Return a success response
            return response()->json([
                'status' => 'success',
                'message' => 'thePeacock updated successfully.',
                'year' => $thePeacock,
            ], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Return validation error response
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error.',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // Return general error response
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update thePeacock.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function getthePeacockById($id)
    {
        try {
            // Fetch the thePeacock record by ID from the database
            $thePeacockData = ThePeacock::find($id);

            // Check if the record exists
            if (! $thePeacockData) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'thePeacock not found.',
                    'data' => null,
                ], 404);
            }

            // Return the thePeacock data as JSON response
            return response()->json([
                'status' => 'success',
                'message' => 'thePeacock data retrieved successfully.',
                'data' => $thePeacockData,
            ], 200);
        } catch (\Exception $e) {
            // Return error response in case of exception
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve thePeacock data.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function createThePeacock(Request $request)
    {
        $payload = $request->all();

        // Validation rules
        $validatorArray = [
            'title' => 'required|string|max:255',
            'img_src_file' => 'nullable|mimes:pdf|max:20000',
            'year' => 'required|integer', // Ensure year is an integer
            'status' => 'required|in:0,1', // Assuming status can be 'active' or 'inactive'
        ];

        $validator = Validator::make($payload, $validatorArray);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'validation_error',
                'message' => $validator->errors()->first(),
            ], 422);
        }

        try {
            // Set up initial data
            $formattedDate = null;
            if (! empty($payload['publish_date'])) {
                $date = $payload['publish_date'];
                $formattedDate = \DateTime::createFromFormat('D, d M Y H:i:s T', $date)->format('Y-m-d');
            }

            $data = [
                'title' => $payload['title'] ?? '',
                'year' => isset($payload['year']) && $payload['year'] !== '' ? (int) $payload['year'] : null, // Handle year as integer or null
                'status' => $payload['status'] ?? '0',
                // 'img_src' => '',
            ];

            // Handle image upload
            if ($request->hasFile('img_src_file')) {
                $file = $request->file('img_src_file');
                $destinationPath = 'images/thePeacock';
                $fileName = $file->getClientOriginalName();
                $fullFilePath = public_path("{$destinationPath}/{$fileName}");
                $extension = strtolower($request->file('img_src_file')->getClientOriginalExtension());
                $modifiedName = (rand(100000, 999999)) . '_' . time() . '.' . $extension;
                // Move file to the destination and set image path in data
                $file->move(public_path($destinationPath), $modifiedName);
                $data['img_src'] = "{$modifiedName}";
                $data['image_name'] = "{$fileName}";
            }

            // Create ThePeacock record
            $ThePeacock = ThePeacock::create($data);

            // Return success response
            return response()->json([
                'status' => 'success',
                'message' => 'ThePeacock created successfully.',
                'data' => $ThePeacock,
            ], 201);
        } catch (\Exception $e) {
            // Return error response in case of exception
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create ThePeacock.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function deleteThePeacock($id)
    {
        try {
            // Find the record by ID
            $thePeacock = ThePeacock::find($id);

            // Check if the record exists
            if (! $thePeacock) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'ThePeacock not found.',
                ], 404);
            }

            // Delete the image file if it exists
            if ($thePeacock->img_src) {
                $filePath = public_path('images/gallery_images/' . $thePeacock->img_src);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            // Delete the record
            $thePeacock->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'ThePeacock deleted successfully.',
            ], 200);
        } catch (\Exception $e) {
            // Return error response in case of exception
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete ThePeacock.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    // LatestUpdate
    public function latestUpdate()
    {
        try {
            // Step 1: Retrieve all LatestUpdates with specific fields
            $LatestUpdateList = LatestUpdate::all();
            // $LatestUpdateList = LatestUpdate::select('id', 'content', 'status')->get();

            // Step 2: Check if any LatestUpdates are found
            if ($LatestUpdateList->isEmpty()) {
                return $this->response('no_content', [
                    'message' => 'No LatestUpdates found.',
                    'data' => [],
                ], 204); // 204 status for no content
            }

            // Step 3: Return a success response with the retrieved LatestUpdate data
            return $this->response('success', [
                'message' => 'All LatestUpdates fetched successfully!',
                'data' => $LatestUpdateList,
            ], 200); // 200 status for success

        } catch (\Exception $e) {
            // Step 4: Handle any unexpected errors
            return $this->response('exception', [
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500); // 500 status for internal server error
        }
    }

    public function updatelatestUpdate(Request $request, $id)
    {
        // Retrieve all request data
        $payload = $request->all();

        // Define validation rules
        $validator = Validator::make($payload, [
            'title' => 'nullable|string',  // Ensure 'content' is a string if provided
            'link' => 'nullable|string',  // Ensure 'content' is a string if provided
            'content' => 'nullable|string',  // Ensure 'content' is a string if provided
            'status' => 'nullable|in:1,0',   // Ensure 'status' is either 1 or 0 if provided
        ]);

        // If validation fails, return an error response
        if ($validator->fails()) {
            return response()->json([
                'status' => 'validation_error',
                'message' => $validator->errors()->first(),
            ], 422);
        }

        try {
            // Find the LatestUpdate entry by ID or return a 404 error if not found
            $LatestUpdate = LatestUpdate::findOrFail($id);

            // Update only the fields provided in the request
            $LatestUpdate->update([
                'title' => $payload['title'] ?? $LatestUpdate->title,
                'link' => $payload['link'] ?? $LatestUpdate->link,
                'content' => $payload['content'] ?? $LatestUpdate->content,
                'status' => $payload['status'] ?? $LatestUpdate->status,
            ]);

            // Return a success response with the updated LatestUpdate data
            return response()->json([
                'status' => 'success',
                'message' => 'LatestUpdate updated successfully!',
                'data' => $LatestUpdate,
            ], 200);
        } catch (\Exception $e) {
            // Return an error response for any exceptions
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function latestUpdateDetails($id)
    {
        try {
            // Attempt to find the LatestUpdate entry by its ID
            $LatestUpdateDetails = LatestUpdate::find($id);

            // Check if LatestUpdateDetails exists
            if (! $LatestUpdateDetails) {
                return $this->response('not_found', [
                    'message' => 'LatestUpdate not found!',
                ]);
            }

            // Prepare a success response with the retrieved details
            $response = [
                'message' => 'LatestUpdate details fetched successfully!',
                'data' => $LatestUpdateDetails,
            ];

            return $this->response('success', $response);
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response
            $response = [
                'message' => 'An error occurred: ' . $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function latestUpdateCreate(Request $request)
    {
        // Step 1: Retrieve all data from the request
        $payload = $request->all();

        // Step 2: Define validation rules and custom messages (if any)
        $validator = Validator::make($payload, [
            'content' => 'required|string|max:255',  // 'content' is required, should be a string with a max length
            'status' => 'required|in:1,0',           // 'status' is required, must be 1 or 0
        ]);

        // Step 3: Check for validation errors
        if ($validator->fails()) {
            return $this->response('validation_error', [
                'message' => $validator->errors()->first(),
            ], 422); // 422 status for validation error
        }

        try {
            // Step 4: Create the LatestUpdate record in the database
            $LatestUpdate = LatestUpdate::create([
                'title' => $payload['title'],
                'link' => $payload['link'],
                'content' => $payload['content'],
                'status' => $payload['status'],
            ]);

            // Step 5: Return a success response with the created LatestUpdate data
            return $this->response('success', [
                'message' => 'LatestUpdate created successfully!',
                'data' => $LatestUpdate,  // Return the newly created LatestUpdate data
            ], 201); // 201 status for created

        } catch (\Exception $e) {
            // Step 6: Handle any unexpected errors
            return $this->response('exception', [
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500); // 500 status for internal server error
        }
    }

    public function latestUpdateDelete($id)
    {
        try {
            // Find the LatestUpdate by ID
            $LatestUpdate = LatestUpdate::find($id);

            if (! $LatestUpdate) {
                return response()->json(['status' => 'error', 'message' => 'LatestUpdate not found'], 404);
            }

            // Delete the LatestUpdate
            $LatestUpdate->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'LatestUpdate deleted successfully',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }

    // cureted section 2024
    public function curetedSection2024(Request $request)
    {
        try {
            $payload = $request->all();
            $curetedsectionData = curetedsection2024::where('international_cinema.award_year', 2024)->get();

            if ($curetedsectionData->isEmpty()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'No curetedsection updates found.',
                    'data' => [],
                ], 200);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'curetedsection updates retrieved successfully.',
                'data' => $curetedsectionData,
            ], 200);
        } catch (\Exception $e) {
            // Return error response in case of exception
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve curetedsection updates.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function updateCuretedsection2024(Request $request, $id)
    {
        $payload = $request->all();
        $validatorArray = [
            'curated_section_id' => 'required|string|max:255',
            // 'award_year' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            //  'award' => 'string|max:255',
            'directed_by' => 'required|string|max:255',
            'country_of_origin' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'year' => 'required|string|max:4', // assuming year is a 4-digit string
            'img_src_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
        ];
        $messagesArray = [];
        $validator = Validator::make($payload, $validatorArray, $messagesArray);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ], 422);
        }

        try {
            $curetedsection = curetedsection2024::find($id);

            if ($curetedsection) {
                // Retain existing image if no new file is uploaded
                $modifiedName = $curetedsection->img_src;
                $fileNameOriginal = $curetedsection->image_name;

                // Check if a new file is uploaded
                if ($request->hasFile('img_src_file')) {
                    $file = $request->file('img_src_file');
                    $destinationPath = 'images/cureted-section';
                    $fileNameOriginal = $file->getClientOriginalName();
                    $extension = strtolower($file->getClientOriginalExtension());
                    $modifiedName = rand(100000, 999999) . '_' . time() . '.' . $extension;
                    $file->move(public_path($destinationPath), $modifiedName);
                    $fileName = $modifiedName;
                }

                // Prepare data to update
                $data = [
                    'img_src' => $modifiedName,
                    'image_name' => $fileNameOriginal,
                    'curated_section_id' => $payload['curated_section_id'],
                    // 'award_year' => $payload['award_year'],
                    'title' => $payload['title'],
                    'award' => (! empty($payload['award']) ? $payload['award'] : ''),
                    'directed_by' => $payload['directed_by'],
                    'country_of_origin' => $payload['country_of_origin'],
                    'language' => $payload['language'],
                    'slug' => $payload['slug'],
                    'year' => $payload['year'],
                    //   'image' => $payload['img_src'] ?? '', // Assuming img_src is the file field, set default as empty if not provided
                    'status' => $payload['status'],
                ];

                // Update the cureted section record
                $curetedsection->update($data);

                return response()->json([
                    'status' => 'success',
                    'message' => 'Curated section updated successfully!',
                    'data' => $data,
                ], 200);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Record not found!',
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while updating the curated section.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function curetedsection2024ById($id)
    {
        try {
            $curetedsection2024details = curetedsection2024::find($id);

            $response = [
                'message' => 'Details fetched successfully.!',
                'data' => $curetedsection2024details,
            ];

            return $this->response('success', $response);
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function createCuretedsection2024(Request $request)
    {
        $payload = $request->all();

        // Validation rules
        $validatorArray = [
            'curated_section_id' => 'required|string|max:255',
            // 'award_year' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            // 'award' => 'string|max:255',
            'directed_by' => 'required|string|max:255',
            'country_of_origin' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'year' => 'required|string|max:4', // assuming year is a 4-digit string
            'img_src' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
        ];

        $validator = Validator::make($payload, $validatorArray);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'validation_error',
                'message' => $validator->errors()->first(),
            ], 422);
        }

        try {
            // Set up initial data
            // $date = $payload['date'];
            // $formattedDate = \DateTime::createFromFormat('D, d M Y H:i:s T', $date)->format('Y-m-d');

            // echo $formattedDate;
            $data = [
                'curated_section_id' => $payload['curated_section_id'],
                // 'award_year' => $payload['award_year'],
                'title' => $payload['title'],
                'award' => $payload['award'],
                'directed_by' => $payload['directed_by'],
                'country_of_origin' => $payload['country_of_origin'],
                'language' => $payload['language'],
                'slug' => $payload['slug'],
                'year' => $payload['year'],
                //   'image' => $payload['img_src'] ?? '', // Assuming img_src is the file field, set default as empty if not provided
                'status' => $payload['status'],
            ];

            // Handle image upload
            if ($request->hasFile('img_src_file')) {
                $file = $request->file('img_src_file');
                $destinationPath = 'images/cureted-section';
                $fileName = $file->getClientOriginalName();
                $fullFilePath = public_path("{$destinationPath}/{$fileName}");
                $extension = strtolower($request->file('img_src_file')->getClientOriginalExtension());
                $modifiedName = (rand(100000, 999999)) . '_' . time() . '.' . $extension;
                // Move file to the destination and set image path in data
                $file->move(public_path($destinationPath), $modifiedName);
                $data['img_src'] = "{$modifiedName}";
                $data['image_name'] = "{$fileName}";
            }

            // Create curetedsection2024 record
            $curetedsection2024 = curetedsection2024::create($data);

            // Return success response
            return response()->json([
                'status' => 'success',
                'message' => 'cureted section 2024 created successfully.',
                'data' => $curetedsection2024,
            ], 201);
        } catch (\Exception $e) {
            // Return error response in case of exception
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create cureted section 2024.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    // MasterClass
    public function getMasterClass()
    {
        try {
            // Fetch all MasterClass records from the database
            $MasterClassData = MasterClass::all();

            // Check if data exists
            if ($MasterClassData->isEmpty()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'No MasterClass updates found.',
                    'data' => [],
                ], 200);
            }

            // Return the MasterClass data as JSON response
            return response()->json([
                'status' => 'success',
                'message' => 'MasterClass updates retrieved successfully.',
                'data' => $MasterClassData,
            ], 200);
        } catch (\Exception $e) {
            // Return error response in case of exception
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve MasterClass updates.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function updateMasterClass(Request $request, $id)
    {
        $payload = $request->all();
        try {

            // Validate the request data (fields are now optional)
            $validator = Validator::make($payload, [
                'title' => 'nullable|string|max:255',
                'category' => 'nullable|string|max:255',
                'image' => 'nullable|string|max:255', // Assuming image is a URL or file path
                'date' => 'nullable|date',
                'status' => 'nullable|in:1,0', // Assuming status can be 'active' or 'inactive'      // 'status' is required, must be 1 or 0
            ]);

            if ($validator->fails()) {
                $output = [
                    'message' => $validator->errors()->first(),
                    'data' => $payload,
                ];

                return $this->response('validatorerrors', $output);
            }

            // Set up initial data
            $date = $payload['date'];
            $formattedDate = \DateTime::createFromFormat('D, d M Y H:i:s T', $date)->format('Y-m-d');
            // Find the MasterClass by ID
            $MasterClass = MasterClass::findOrFail($id);

            // Update the MasterClass with new data if provided
            if (isset($payload['title'])) {
                $MasterClass->title = $payload['title'];
            }
            if (isset($payload['category'])) {
                $MasterClass->category = $payload['category'];
            }
            if (isset($payload['image'])) {
                $MasterClass->image = $payload['image'];
            }
            if (isset($payload['date'])) {
                $MasterClass->date = $formattedDate;
            }
            if (isset($payload['status'])) {
                $MasterClass->status = $payload['status'];
            }

            // Save the changes to the database
            $MasterClass->save();

            // Return a success response
            return response()->json([
                'status' => 'success',
                'message' => 'MasterClass updated successfully.',
                'data' => $MasterClass,
            ], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Return validation error response
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error.',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // Return general error response
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update MasterClass.',
                'error' => $e->getMessage(),
                'payload' => $payload,
            ], 500);
        }
    }

    public function getMasterClassById($id)
    {
        try {
            // Fetch the MasterClass record by ID from the database
            $MasterClassData = MasterClass::find($id);

            // Check if the record exists
            if (! $MasterClassData) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'MasterClass not found.',
                    'data' => null,
                ], 404);
            }

            // Return the MasterClass data as JSON response
            return response()->json([
                'status' => 'success',
                'message' => 'MasterClass data retrieved successfully.',
                'data' => $MasterClassData,
            ], 200);
        } catch (\Exception $e) {
            // Return error response in case of exception
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve MasterClass data.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function createMasterClass(Request $request)
    {
        $payload = $request->all();

        // Validation rules
        $validatorArray = [
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'img_src_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
            'status' => 'required|boolean',
        ];

        $validator = Validator::make($payload, $validatorArray);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'validation_error',
                'message' => $validator->errors()->first(),
            ], 422);
        }

        try {
            // Set up initial data
            $date = $payload['date'];
            $formattedDate = \DateTime::createFromFormat('D, d M Y H:i:s T', $date)->format('Y-m-d');

            // echo $formattedDate;
            $data = [
                'title' => $payload['title'],
                'category' => $payload['category'],
                'date' => $formattedDate,
                'status' => $payload['status'],
                'image' => '',
            ];

            // Handle image upload
            if ($request->hasFile('img_src_file')) {
                $file = $request->file('img_src_file');
                $destinationPath = 'images/MasterClass_images';
                $fileName = $file->getClientOriginalName();
                $fullFilePath = public_path("{$destinationPath}/{$fileName}");
                $extension = strtolower($request->file('img_src_file')->getClientOriginalExtension());
                $modifiedName = (rand(100000, 999999)) . '_' . time() . '.' . $extension;
                // Move file to the destination and set image path in data
                $file->move(public_path($destinationPath), $modifiedName);
                $data['image'] = "{$modifiedName}";
                $data['image_name'] = "{$fileName}";
            }

            // Create MasterClass record
            $MasterClass = MasterClass::create($data);

            // Return success response
            return response()->json([
                'status' => 'success',
                'message' => 'MasterClass created successfully.',
                'data' => $MasterClass,
            ], 201);
        } catch (\Exception $e) {
            // Return error response in case of exception
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create MasterClass.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    // The PartnerSponsor
    public function thePartnerSponsor()
    {
        try {

            $thePartnerSponsorData = ThePartnerSponsor::get();
            if ($thePartnerSponsorData) {
                $response = [
                    'message' => 'Success!',
                    'data' => $thePartnerSponsorData,
                ];

                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'No records found !!',
                ];

                return $this->response('exception', $response);
            }
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function createPartnerSponsor(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'title' => ['required', 'unique:the_partner_sponsor,title'],
            'img_src' => 'required|max:2048', //|mimes:jpg,jpeg,png,PNG
        ];
        $messagesArray = [];
        $validator = Validator::make($payload, $validatorArray, $messagesArray);
        if ($validator->fails()) {
            $output = [
                'message' => $validator->errors()->first(),
            ];

            return $this->response('validatorerrors', $output);
        }

        try {

            if ($request->hasFile('img_src')) {

                $files = $request->file('img_src');
                foreach ($files as $file) {
                    $destinationPath = 'images/thePartnerSponsor';
                    $originalFilename = $file->getClientOriginalName();
                    $fullFilePath = public_path($destinationPath . '/' . $originalFilename);
                    if (File::exists($fullFilePath)) {
                        $response = [
                            'message' => "File {$originalFilename} already exists. Please upload a different image!",
                            'existing_file' => $originalFilename,
                        ];

                        return $this->response('conflict', $response);
                    }
                    $file->move(public_path($destinationPath), $originalFilename);
                    $data = [
                        'title' => $payload['title'], // Reuse the title for all images
                        'img_src' => $originalFilename,
                    ];
                    $partners = ThePartnerSponsor::create($data);
                    if ($partners) {
                        $records[] = $partners;
                    } else {
                        throw new \Exception("Failed to create record for {$originalFilename}");
                    }
                }
                // Response after all files are processed
                $response = [
                    'message' => 'Created successfully!',
                    'data' => $records,
                ];

                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'No files uploaded!',
                ];

                return $this->response('exception', $response);
            }
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function updatePartnerSponsor(Request $request, $id)
    {
        $payload = $request->all();
        $validatorArray = [
            'title' => '',
            'img_src' => 'mimes:jpg,jpeg,png|max:2048',
            'status' => 'in:1,0',
        ];
        $messagesArray = [];
        $validator = Validator::make($payload, $validatorArray, $messagesArray);
        if ($validator->fails()) {
            $output = [
                'message' => $validator->errors()->first(),
            ];

            return $this->response('validatorerrors', $output);
        }
        try {
            $sponsorsPartners = ThePartnerSponsor::find($id);
            if ($sponsorsPartners) {
                if ($request->hasFile('img_src')) {
                    $file = $request->file('img_src');
                    $destinationPath = 'images/thePartnerSponsor';
                    $originalFilename = $file->getClientOriginalName();
                    $fullFilePath = public_path($destinationPath . '/' . $originalFilename);

                    if (File::exists($fullFilePath)) {
                        File::delete($fullFilePath);
                        $file->move(public_path($destinationPath), $originalFilename);
                    } else {
                        $file->move(public_path($destinationPath), $originalFilename);
                    }
                    $data = [
                        'title' => isset($payload['title']) ? $payload['title'] : $sponsorsPartners->title,
                        'img_src' => $originalFilename,
                        'status' => isset($payload['status']) ? $payload['status'] : $sponsorsPartners->status,
                    ];
                    $updated = $sponsorsPartners->update($data);
                    if ($updated) {
                        $response = [
                            'message' => 'Updated successfully !!',
                            'data' => $data,
                        ];

                        return $this->response('success', $response);
                    } else {
                        $response = [
                            'message' => 'Not updated !!',
                        ];

                        return $this->response('exception', $response);
                    }
                } else {
                    $data = [
                        'title' => isset($payload['title']) ? $payload['title'] : $sponsorsPartners->title,
                        'status' => isset($payload['status']) ? $payload['status'] : $sponsorsPartners->status,
                    ];
                    $updated = $sponsorsPartners->update($data);
                    if ($updated) {
                        $response = [
                            'message' => 'Updated successfully !!',
                            'data' => $data,
                        ];

                        return $this->response('success', $response);
                    } else {
                        $response = [
                            'message' => 'Not updated !!',
                        ];

                        return $this->response('exception', $response);
                    }
                }
            } else {
                $response = [
                    'message' => 'Record not found !!',
                ];

                return $this->response('exception', $response);
            }
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function getPartnerSponsorById($id)
    {
        try {
            $sponsorsPartners = ThePartnerSponsor::find($id);
            if ($sponsorsPartners) {
                $response = [
                    'message' => 'Retrieved successfully !!',
                    'data' => $sponsorsPartners,
                ];

                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Record not found !!',
                ];

                return $this->response('exception', $response);
            }
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function deletePartnerSponsor($id)
    {
        try {
            $thePartnerSponsor = ThePartnerSponsor::find($id);
            if ($thePartnerSponsor) {
                if ($thePartnerSponsor->img_src) {
                    $filePath = public_path('images/thePartnerSponsor/' . $thePartnerSponsor->img_src);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                $thePartnerSponsor->delete();
                $response = [
                    'message' => 'Deleted successfully.!',
                ];

                return $this->response('exception', $response);
            } else {
                $response = [
                    'message' => 'Something went wrong.!',
                ];

                return $this->response('exception', $response);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete thePartnerSponsor.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function readCSV()
    {
        $csvFile = public_path('images/csv-read.csv');

        // Open the file in read mode
        if (($handle = fopen($csvFile, 'r')) !== false) {
            // Read and process each line
            $header = null;
            while (($row = fgetcsv($handle)) !== false) {
                if (! $header) {
                    $header = $row; // Read the header row

                    continue;
                }

                // Map CSV columns to variables
                $data = array_combine($header, $row);
                // echo '<pre>';
                // print_r($data);
                //exit();
                // Extract data for `international_cinema`
                $title = $row[1];
                $section = $row[0];
                $language = $row[5];
                $country = $row[3];
                $productionYear = $row[4];
                $director = $row[8];
                $awardYear = $row[29];
                $international_curated = \DB::table('international_curated_sections')
                    ->where('title', $section)
                    ->first();
                if (! $international_curated) {
                    continue;
                }
                // Insert or update `international_cinema`
                $cinema = \DB::table('international_cinema')
                    ->where('title', $title)
                    ->first();

                if ($cinema) {
                    // Update existing cinema
                    \DB::table('international_cinema')
                        ->where('id', $cinema->id)
                        ->update([
                            // 'section' => $international_curated->id,
                            'language' => $language,
                            'country_of_origin' => $country,
                            'year' => $productionYear,
                            'award_year' => $awardYear,
                            'directed_by' => $director,
                            'updated_at' => now(),
                            'status' => 1,
                        ]);
                    if (! $cinema->slug) {
                        \DB::table('international_cinema')
                            ->where('id', $cinema->id)
                            ->update([
                                'slug' => str_replace(' ', '-', $title),
                            ]);
                    }
                } else {
                    // Create new cinema
                    $cinemaId = \DB::table('international_cinema')->insertGetId([
                        'curated_section_id' => $international_curated->id,
                        'slug' => str_replace(' ', '-', $title),
                        'title' => $title,
                        'directed_by' => $director,
                        // 'section' => $section,
                        'language' => $language,
                        'country_of_origin' => $country,
                        'year' => $productionYear,
                        'award_year' => $awardYear,
                        //'image' => $title . ".jpg",
                        'created_at' => now(),
                        'updated_at' => now(),
                        'status' => 1,
                    ]);

                    $cinema = (object) ['id' => $cinemaId];
                }

                // Extract data for `international_cinema_basic_details`

                $producer = $row[10];
                $screenplay = $row[11];
                $dop = $row[12];
                $editor = $row[13];
                $cast = $row[14];
                $synopsis = $row[15];
                $trailerLink = $row[19];
                $director_bio = $row[9];
                $runtime = $row[6];
                $color = $row[7];
                $country = $row[11];
                $original_title = $row[2];
                $premiere = $row[16];

                $award = $row[17];
                $festival_history = $row[18];
                $link_trailer = $row[19];
                $tags = $row[20];
                $sales = $row[21];
                $instagram = $row[26];
                $twitter = $row[27];
                $facebook = $row[28];
                // Insert or update `international_cinema_basic_details`
                $basicDetails = \DB::table('international_cinema_basic_details')
                    ->where('cinema_id', $cinema->id)
                    ->first();

                if ($basicDetails) {
                    // Update existing basic details
                    \DB::table('international_cinema_basic_details')
                        ->where('id', $basicDetails->id)
                        ->update([

                            'director' => $director,
                            'producer' => $producer,
                            'screenplay' => $screenplay,
                            'dop' => $dop,
                            'editor' => $editor,
                            'cast' => $cast,
                            'synopsis' => $synopsis,
                            'trailer_link' => $trailerLink,
                            'other_details' => $runtime . ' | ' . $color . ' | ' . $country,
                            'original_title' => $original_title,
                            'director_bio' => $director_bio,
                            'premiere' => $premiere,
                            'award' => $award,
                            'festival_history' => $festival_history,
                            'link_trailer' => $link_trailer,
                            'tags' => $tags,
                            'sales' => $sales,
                            'instagram' => $instagram,
                            'twitter' => $twitter,
                            'facebook' => $facebook,
                            'updated_at' => now(),
                        ]);
                } else {
                    // Create new basic details
                    \DB::table('international_cinema_basic_details')->insert([
                        'cinema_id' => $cinema->id,
                        'director' => $director,
                        'producer' => $producer,
                        'screenplay' => $screenplay,
                        'dop' => $dop,
                        'editor' => $editor,
                        'cast' => $cast,
                        'synopsis' => $synopsis,
                        'trailer_link' => $trailerLink,
                        'other_details' => $runtime . ' | ' . $color . ' | ' . $country,
                        'original_title' => $original_title,
                        'director_bio' => $director_bio,
                        'premiere' => $premiere,
                        'award' => $award,
                        'festival_history' => $festival_history,
                        'link_trailer' => $link_trailer,
                        'tags' => $tags,
                        'sales' => $sales,
                        'instagram' => $instagram,
                        'twitter' => $twitter,
                        'facebook' => $facebook,
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]);
                }
                // print_r($title);
                //   exit('Data Done');
                // echo '<pre>';
                // print_r($data);
                // exit();
            }
            exit('Data Done');
            // Close the file
            fclose($handle);
        } else {
            echo 'Error: Could not open the file.';
        }
    }

    public function uploadInGalary(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'category_id'   =>  'required',
            'img_src'       =>  'required', //|mimes:jpg,jpeg,png,PNG
        ];
        $messagesArray = [];
        $validator = Validator::make($payload, $validatorArray, $messagesArray);
        if ($validator->fails()) {
            $output = [
                'message' => $validator->errors()->first(),
            ];

            return $this->response('validatorerrors', $output);
        }

        try {

            if ($request->hasFile('img_src')) {
                $files = $request->file('img_src');

                $records = [];
                foreach ($files as $file) {
                    $destinationPath    =   'images/gallery-2024';
                    $originalFilename   =   $file->getClientOriginalName();
                    $extension          =   $file->getClientOriginalExtension();
                    $hashedFilename     =   substr(md5($originalFilename . time()), 0, 20) . '.' . $extension;
                    $fullFilePath       =   public_path($destinationPath . '/' . $hashedFilename);
                    if (File::exists($fullFilePath)) {
                        $response = [
                            'message' => 'File with the same name already exists.',
                            'existing_file' => $hashedFilename,
                        ];
                        return $this->response('conflict', $response);
                    }
                    $file->move(public_path($destinationPath), $hashedFilename);
                    $data = [
                        'category_id' => $payload['category_id'], // Reuse the title for all images
                        'image' => $hashedFilename,
                        'year'  =>  2024,
                    ];
                    $partners = DB::table('mst_photos')->insert($data);

                    if ($partners) {
                        $records[] = $partners;
                    } else {
                        throw new \Exception("Failed to create record for {$hashedFilename}");
                    }
                }
                $response = [
                    'message' => 'Created successfully!',
                    'data' => $records,
                ];
                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'No files uploaded!',
                ];

                return $this->response('exception', $response);
            }
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }
}
