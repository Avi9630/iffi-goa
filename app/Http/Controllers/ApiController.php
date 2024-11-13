<?php

namespace App\Http\Controllers;

use App\Http\Traits\RESPONSETrait;
use App\Models\NewsUpdate;
use App\Models\Ticker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    use RESPONSETrait;

    //Ticker
    public function tickerList()
    {
        try {
            $tickerList = Ticker::select('id', 'content', 'status')->where('status', 1)->get();
            $response = [
                'message' => 'Details fetched successfully.!',
                'data' => $tickerList,
            ];

            return $this->response('success', $response);
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function createTicker(Request $request)
    {
        $payload = $request->all();
        $payload = $request->all();
        $validatorArray = [
            'content' => 'required',
            'status' => 'required|in:1,0',
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
            Ticker::create($payload);
            $response = [
                'message' => 'Ticker created successfully.!',
                'data' => $payload,
            ];

            return $this->response('success', $response);
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function updateTicker(Request $request)
    {
        $payload = $request->all();
        $payload = $request->all();
        $validatorArray = [
            'id' => 'required|numeric',
            'content' => '',
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
            $getTicker = Ticker::where('id', $payload['id'])->first();
            if (! is_null($getTicker)) {

                $getTicker->update([
                    'content' => isset($payload['content']) ? $payload['content'] : $getTicker['content'],
                    'status' => isset($payload['status']) ? $payload['status'] : $getTicker['status'],
                ]);
                $response = [
                    'message' => 'Ticker updated successfully.!',
                    'data' => $getTicker,
                ];

                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Ticker not found.!',
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

    public function deleteTicker(Request $request)
    {
        $payload = $request->all();
        $payload = $request->all();
        $validatorArray = [
            'id' => 'required|numeric',
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
            $getTicker = Ticker::where('id', $payload['id'])->first();
            if (! is_null($getTicker)) {

                $getTicker->delete();
                $response = [
                    'message' => 'Ticker deleted successfully.!',
                ];

                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Ticker not found.!',
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

    //newsUpdate

    public function newsUpdateList()
    {
        try {
            $newsUpdateList = NewsUpdate::all();
            // $newsUpdateList = NewsUpdate::where('id')->get();
            $response = [
                'message' => 'Details fetched successfully.!',
                'data' => $newsUpdateList,
            ];

            return $this->response('success', $response);
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function createNewsUpdate(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'title' => 'required',
            'description' => 'required',
            'img_src' => 'file|mimes:jpg,jpeg,png|max:2048',
            'link' => '',
            'link_title' => '',
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
                $file = $request->file('img_src');
                $destinationPath = 'images/news-update';
                $fileName = $file->getClientOriginalName();
                $fullFilePath = public_path($destinationPath . '/' . $fileName);
                if (File::exists($fullFilePath)) {
                    $response = [
                        'message' => 'File with the same name already exists.',
                        'existing_file' => $fileName,
                    ];

                    return $this->response('conflict', $response);
                }
                $file->move(public_path($destinationPath), $fileName);
                $data = [
                    'title' => $payload['title'],
                    'description' => $payload['description'],
                    'img_src' => $fileName,
                    'link' => $payload['link'],
                    'link_title' => $payload['link_title'],
                ];
                NewsUpdate::create($data);
                $response = [
                    'message' => 'Created successfully.!',
                    'data' => $data,
                ];

                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'File not uploaded.!',
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

    public function updateNewsUpdate(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'id' => 'required|numeric',
            'title' => '',
            'description' => '',
            'img_src' => 'file|mimes:jpg,jpeg,png|max:2048',
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
            $newsUpdate = NewsUpdate::find($payload['id']);
            if ($newsUpdate) {
                if ($request->hasFile('img_src')) {
                    $file = $request->file('img_src');
                    $destinationPath = 'images/news-update';
                    $fileName = $file->getClientOriginalName();
                    $fullFilePath = public_path($destinationPath . '/' . $fileName);
                    if (File::exists($fullFilePath)) {
                        $response = [
                            'message' => 'File with the same name already exists.',
                            'existing_file' => $fileName,
                        ];
                        return $this->response('conflict', $response);
                    }
                    $file->move(public_path($destinationPath), $fileName);
                    $data = [
                        'title' => isset($payload['title']) ? $payload['title'] : '',
                        'description' => isset($payload['description']) ? $payload['description'] : '',
                        'img_src' => $fileName,
                        'link' => isset($payload['link']) ? $payload['link'] : '',
                        'link_title' => isset($payload['link_title']) ? $payload['link_title'] : '',
                        'status' => isset($payload['status']) ? $payload['status'] : $newsUpdate['status'],
                    ];
                    $newsUpdate->update($data);
                    $response = [
                        'message' => 'Updated successfully.!',
                        'data' => $data,
                    ];
                    return $this->response('success', $response);
                } else {
                    $data = [
                        'title' => isset($payload['title']) ? $payload['title'] : '',
                        'description' => isset($payload['description']) ? $payload['description'] : '',
                        'img_src' => $newsUpdate['img_src'],
                        'link' => isset($payload['link']) ? $payload['link'] : '',
                        'link_title' => isset($payload['link_title']) ? $payload['link_title'] : '',
                        'status' => isset($payload['status']) ? $payload['status'] : $newsUpdate['status'],
                    ];
                    $newsUpdate->update($data);
                    $response = [
                        'message' => 'Updated successfully.!',
                        'data' => $data,
                    ];

                    return $this->response('success', $response);
                }
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

    public function deleteNewsUpdate(Request $request)
    {
        $payload = $request->all();
        $payload = $request->all();
        $validatorArray = [
            'id' => 'required|numeric',
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
            $newsUpdate = NewsUpdate::find($payload['id']);
            if (! is_null($newsUpdate)) {

                $newsUpdate->delete();
                $response = [
                    'message' => 'Deleted successfully!',
                ];

                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Records not found.!',
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

    //FAQS
    public function faqsList()
    {
        try {
            $newsUpdateList = NewsUpdate::where('status', 1)->get();
            $response = [
                'message' => 'Details fetched successfully.!',
                'data' => $newsUpdateList,
            ];

            return $this->response('success', $response);
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function createFaqs(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'title' => 'required',
            'description' => 'required',
            'img_src' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'link' => 'required',
            'link_title' => 'required',
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
                $file = $request->file('img_src');
                $destinationPath = 'images/desktop-image';
                $fileName = $file->getClientOriginalName();
                $fullFilePath = public_path($destinationPath . '/' . $fileName);
                if (File::exists($fullFilePath)) {
                    $response = [
                        'message' => 'File with the same name already exists.',
                        'existing_file' => $fileName,
                    ];

                    return $this->response('conflict', $response);
                }
                $file->move(public_path($destinationPath), $fileName);
                $data = [
                    'title' => $payload['title'],
                    'description' => $payload['description'],
                    'img_src' => $fileName,
                    'link' => $payload['link'],
                    'link_title' => $payload['link_title'],
                ];
                NewsUpdate::create($data);
                $response = [
                    'message' => 'Created successfully.!',
                    'data' => $data,
                ];

                return $this->response('success', $response);
            } else {
                $data = [
                    'title' => isset($payload['title']) ? $payload['title'] : '',
                    'description' => isset($payload['description']) ? $payload['description'] : '',
                    'link' => isset($payload['link']) ? $payload['link'] : '',
                    'link_title' => isset($payload['link_title']) ? $payload['link_title'] : '',
                ];
                $stored = NewsUpdate::create($data);
                if ($stored) {
                    $response = [
                        'message' => 'Not created.!',
                    ];

                    return $this->response('success', $response);
                } else {

                    $response = [
                        'message' => 'Something went wrong!',
                    ];

                    return $this->response('exception', $response);
                }
            }
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function updateFaqs(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'id' => 'required|numeric',
            'title' => '',
            'description' => '',
            'img_src' => 'file|mimes:jpg,jpeg,png|max:2048',
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
            $newsUpdate = NewsUpdate::find($payload['id']);
            if ($newsUpdate) {
                if ($request->hasFile('img_src')) {
                    $file = $request->file('img_src');
                    $destinationPath = 'images/desktop-image';
                    // $fileName = time() . '_' . $file->getClientOriginalName();
                    $fileName = $file->getClientOriginalName();
                    $fullFilePath = public_path($destinationPath . '/' . $fileName);
                    if (File::exists($fullFilePath)) {
                        $response = [
                            'message' => 'File with the same name already exists.',
                            'existing_file' => $fileName,
                        ];

                        return $this->response('conflict', $response);
                    }
                    $file->move(public_path($destinationPath), $fileName);
                    $data = [
                        'title' => isset($payload['title']) ? $payload['title'] : $newsUpdate['title'],
                        'description' => isset($payload['description']) ? $payload['description'] : $newsUpdate['description'],
                        'img_src' => $fileName,
                        'link' => isset($payload['link']) ? $payload['link'] : $newsUpdate['link'],
                        'link_title' => isset($payload['link_title']) ? $payload['link_title'] : $newsUpdate['link_title'],
                        'status' => isset($payload['status']) ? $payload['status'] : $newsUpdate['status'],
                    ];
                    $newsUpdate->update($data);
                    $response = [
                        'message' => 'Updated successfully.!',
                        'data' => $data,
                    ];

                    return $this->response('success', $response);
                } else {
                    $data = [
                        'title' => isset($payload['title']) ? $payload['title'] : $newsUpdate['title'],
                        'description' => isset($payload['description']) ? $payload['description'] : $newsUpdate['description'],
                        'img_src' => $newsUpdate['img_src'],
                        'link' => isset($payload['link']) ? $payload['link'] : $newsUpdate['link'],
                        'link_title' => isset($payload['link_title']) ? $payload['link_title'] : $newsUpdate['link_title'],
                        'status' => isset($payload['status']) ? $payload['status'] : $newsUpdate['status'],
                    ];
                    $newsUpdate->update($data);
                    $response = [
                        'message' => 'Updated successfully.!',
                        'data' => $data,
                    ];

                    return $this->response('success', $response);
                }
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

    public function deleteFaqs(Request $request)
    {
        $payload = $request->all();
        $payload = $request->all();
        $validatorArray = [
            'id' => 'required|numeric',
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
            $newsUpdate = NewsUpdate::find($payload['id']);
            if (! is_null($newsUpdate)) {

                $newsUpdate->delete();
                $response = [
                    'message' => 'Deleted successfully!',
                ];

                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Records not found.!',
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
