<?php

namespace App\Http\Controllers;

use App\Http\Traits\RESPONSETrait;
use App\Models\Gallery;
use App\Models\NewsUpdate;
// use App\Models\PressRelese;
use App\Models\ThePeacock;
use App\Models\Ticker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            if ($request->hasFile('img_src_file')) {
                $file = $request->file('img_src_file');
                $destinationPath = 'images/news-update';
                $fileName = time().'_'.$file->getClientOriginalName(); // Adding timestamp to prevent name collision
                $file->move(public_path($destinationPath), $fileName);
            }

            // Clean the 'pop_up_content' field before saving it
            $popUpContent = isset($payload['pop_up_content']) ? $payload['pop_up_content'] : null;
            $popUpContent = $this->cleanPopUpContent($popUpContent);

            // Prepare data for new entry
            $data = [
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

                // Check if there's a new file to upload
                if ($request->hasFile('img_src_file')) {
                    $file = $request->file('img_src_file');
                    $destinationPath = 'images/news-update';
                    $fileName = $file->getClientOriginalName();
                    $file->move(public_path($destinationPath), $fileName);
                }

                // Clean the 'pop_up_content' field before saving it
                $popUpContent = isset($payload['pop_up_content']) ? $payload['pop_up_content'] : $newsUpdate->pop_up_content;
                $popUpContent = $this->cleanPopUpContent($popUpContent);

                // Prepare data to update
                $data = [
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

    /**
     * Clean the 'pop_up_content' by removing unnecessary empty <p> tags.
     */
    private function cleanPopUpContent($content)
    {
        // Decode HTML entities to get raw HTML
        $content = html_entity_decode($content);

        // Remove any empty <p> tags
        $content = preg_replace('/<p>\s*<\/p>/', '', $content);

        // Optional: Trim leading/trailing spaces or any other cleaning logic
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
                'message' => 'An error occurred: '.$e->getMessage(),
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
                'message' => 'An error occurred: '.$e->getMessage(),
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
                'message' => 'An error occurred: '.$e->getMessage(),
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
                'message' => 'An error occurred: '.$e->getMessage(),
            ], 500);
        }
    }

    // PressRelese
    // public function pressReleseList()
    // {
    //     try {
    //         // Step 1: Retrieve all tickers with specific fields
    //         $pressReleseList = PressRelese::select('id', 'content', 'status')->get();

    //         // Step 2: Check if any tickers are found
    //         if ($pressReleseList->isEmpty()) {
    //             return $this->response('no_content', [
    //                 'message' => 'No Press ReleseList found.',
    //                 'data' => [],
    //             ], 204); // 204 status for no content
    //         }

    //         // Step 3: Return a success response with the retrieved ticker data
    //         return $this->response('success', [
    //             'message' => 'All tickers fetched successfully!',
    //             'data' => $pressReleseList,
    //         ], 200); // 200 status for success

    //     } catch (\Exception $e) {
    //         // Step 4: Handle any unexpected errors
    //         return $this->response('exception', [
    //             'message' => 'An error occurred: '.$e->getMessage(),
    //         ], 500); // 500 status for internal server error
    //     }
    // }

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
                $modifiedName = (rand(100000, 999999)).'_'.time().'.'.$extension;
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

        $payload = $request->all();
        try {
            // Validate the request data (fields are now optional)
            $validator = Validator::make($payload, [
                'title' => 'nullable|string|max:255',
                'img_src' => 'nullable|string|max:255', // Assuming image is a URL or file path
                'year' => 'nullable',
                'status' => 'nullable|in:0,1', // Assuming status can be 'active' or 'inactive'
                'link' => 'nullable|string|max:255',
                'publish_date' => 'nullable',  // 'status' is required, must be 1 or 0
            ]);

            if ($validator->fails()) {
                $output = [
                    'message' => $validator->errors()->first(),
                    'data' => $payload,
                ];

                return $this->response('validatorerrors', $output);

            }
            $thePeacock = ThePeacock::findOrFail($id);

            // Handle image upload
            if ($request->hasFile('img_src_file')) {
                $file = $request->file('img_src_file');
                $destinationPath = 'images/thePeacock';
                $fileName = $file->getClientOriginalName();
                $fullFilePath = public_path("{$destinationPath}/{$fileName}");
                $extension = strtolower($request->file('img_src_file')->getClientOriginalExtension());
                $modifiedName = (rand(100000, 999999)).'_'.time().'.'.$extension;
                // Move file to the destination and set image path in data
                $file->move(public_path($destinationPath), $modifiedName);
                $thePeacock->img_src = "{$modifiedName}";
                $thePeacock->image_name = "{$fileName}";
            }

            // Find the thePeacock by ID

            // Update the thePeacock with new data if provided
            if (isset($validated['title'])) {
                $thePeacock->title = $validated['title'];
            }
            if (isset($validated['image'])) {
                $thePeacock->image = $validated['image'];
            }
            if (isset($validated['year'])) {
                $thePeacock->year = $validated['year'];
            }
            if (isset($validated['status'])) {
                $thePeacock->status = $validated['status'];
            }
            if (isset($validated['link'])) {
                $thePeacock->link = $validated['link'];
            }
            if (isset($validated['publish_date'])) {
                $thePeacock->publish_date = $validated['publish_date'];
            }

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
            'img_src' => 'nullable|string|max:255',
            'year' => 'required|integer', // Ensure year is an integer
            'status' => 'required|in:0,1', // Assuming status can be 'active' or 'inactive'
            'link' => 'required|string|max:255', // Corrected spelling here
            'publish_date' => 'nullable|date',  // Corrected validation rule for date
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
                'link' => $payload['link'] ?? '',
                'publish_date' => $formattedDate,
                'img_src' => '',
            ];

            // Handle image upload
            if ($request->hasFile('img_src_file')) {
                $file = $request->file('img_src_file');
                $destinationPath = 'images/gallery_images';
                $extension = strtolower($file->getClientOriginalExtension());
                $modifiedName = rand(100000, 999999).'_'.time().'.'.$extension;

                // Move file to the destination and set image path in data
                $file->move(public_path($destinationPath), $modifiedName);
                $data['img_src'] = $modifiedName;
                $data['image_name'] = $file->getClientOriginalName();
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
                $filePath = public_path('images/gallery_images/'.$thePeacock->img_src);
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

    // The Peacock
    public function CuretedSection2024()
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
                'message' => 'An error occurred: '.$e->getMessage(),
            ], 500); // 500 status for internal server error
        }
    }
}
