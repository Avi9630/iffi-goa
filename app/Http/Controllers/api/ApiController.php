<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Traits\RESPONSETrait;
use App\Models\NewsUpdate;
use App\Models\Ticker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use DB;
// use Illuminate\Container\Attributes\DB as AttributesDB;

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

    public function addPressRelease(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'title'  =>  'required',
            'file'   =>  'required|file|mimes:pdf|max:10240',
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
            if ($request->hasFile('file')) {
                $file               =   $request->file('file');
                $destinationPath    =   'press_release';
                $originalFilename   =   $file->getClientOriginalName();
                $fullFilePath       =   public_path($destinationPath . '/' . $originalFilename);
                if (File::exists($fullFilePath)) {
                    $response = [
                        'message' => 'File with the same name already exists !! Please re-upload file!!',
                        'existing_file' => $originalFilename,
                    ];
                    return $this->response('conflict', $response);
                }
                $file->move(public_path($destinationPath), $originalFilename);
                $data = [
                    'title'         =>  $payload['title'],
                    'publish_date'  =>  date('Y-m-d'),
                    'img_src'       =>  $originalFilename,
                    'link'          =>  'https://www.iffigoa.org/public/press_release/' . $originalFilename,
                ];
                $created = DB::table('mst_press_release')->insert($data);
                if ($created) {
                    $response = [
                        'message'   =>  'Press release successfully.!',
                        'data'      =>  $data,
                    ];
                    return $this->response('success', $response);
                } else {
                    $response = [
                        'message' => 'Press release not created !!',
                    ];
                    return $this->response('exception', $response);
                }
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

    public function updatePressRelease(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'id'    =>  'required|numeric',
            'title' =>  '',
            'file'  =>  'file|mimes:pdf|max:10240',
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
            $pressRelease = DB::table('mst_press_release')->select('*')->where(['id' => $payload['id']])->first();
            if ($pressRelease) {
                if ($request->hasFile('file')) {
                    $file               =   $request->file('file');
                    $destinationPath    =   'press_release';
                    $originalFilename   =   $file->getClientOriginalName();
                    $fullFilePath       =   public_path($destinationPath . '/' . $originalFilename);
                    if (File::exists($fullFilePath)) {
                        File::delete($fullFilePath);
                        $file->move(public_path($destinationPath), $originalFilename);
                    } else {
                        $file->move(public_path($destinationPath), $originalFilename);
                    }
                    $data = [
                        'title'         =>  isset($payload['title']) ? $payload['title'] : $pressRelease->title,
                        'img_src'       =>  $originalFilename,
                        'link'          =>  'https://www.iffigoa.org/public/press_release/' . $originalFilename,
                    ];
                    $updated = DB::table('mst_press_release')->where(['id' => $payload['id']])->update($data);
                    if ($updated) {
                        $response = [
                            'message'   =>  'Press release updated successfully.!',
                            'data'      =>  $data,
                        ];
                        return $this->response('success', $response);
                    } else {
                        $response = [
                            'message' => 'Press release not updated !!',
                        ];
                        return $this->response('exception', $response);
                    }
                } else {
                    $data = [
                        'title' =>  isset($payload['title']) ? $payload['title'] : $pressRelease->title,
                    ];
                    $updated = DB::table('mst_press_release')->where(['id' => $payload['id']])->update($data);
                    if ($updated) {
                        $response = [
                            'message'   =>  'Press release updated successfully.!'
                        ];
                        return $this->response('success', $response);
                    } else {
                        $response = [
                            'message' => 'Nothing to updated !!',
                        ];
                        return $this->response('success', $response);
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

    public function csv(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'file' => 'required|mimes:csv,txt|max:2048',
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
            $file = $request->file('file')->getRealPath();
            $handle = fopen($file, 'r');
            $header = fgetcsv($handle);

            while ($row = fgetcsv($handle)) {
                $data = array_combine($header, $row);
                DB::table('international_cinema')->insert([
                    'curated_section_id' => $data['curated_section_id'],
                    'title'         =>  $data['title'],
                    'slug'          =>  $data['slug'],
                    'award'         =>  $data['award'],
                    'award2'        =>  $data['award2'],
                    'directed_by'   =>  $data['directed_by'],
                    'created_by'    =>  $data['created_by'],
                ]);
            }
            fclose($handle);
            $response = [
                'message' => 'CSV uploaded successfully...',
            ];
            return $this->response('success', $response);
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function allProgrammes()
    {
        try {
            $datas = DB::table('iffi_festival_programmes')->where(['status' => 1])->get();
            $response = [
                'message' => 'All feativall program...',
                "data" => $datas,
            ];
            return $this->response('success', $response);
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }
}
