<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Traits\RESPONSETrait;
use App\Models\IndianPanorama;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\NewsUpdate;
use App\Models\Ticker;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;

class IndianPanoramaController extends Controller
{
    use RESPONSETrait;

    public function indianPanoramaList($year)
    {
        try {
            $indianPanorama = IndianPanorama::where(['year' => $year])->get();
            // $newsUpdateList = NewsUpdate::where('id')->get();
            $response = [
                'message' => 'Details fetched successfully.!',
                'data' => $indianPanorama,
            ];
            return $this->response('success', $response);
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];

            return $this->response('exception', $response);
        }
    }

    public function createIndianPanorama(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'official_selection_id' =>  'required',
            'title'                 =>  'required',
            'slug'                  =>  'required',
            'directed_by'           =>  'required',
            'country_of_origin'     =>  '',
            'language'              =>  'required',
            'img_src'               =>  'file|mimes:jpg,jpeg,png|max:10240',
            'year'                  =>  'required',
            'created_by'            =>  '',
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
                $file               =   $request->file('img_src');
                $destinationPath    =   'images/indian-panorama-cinema';
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
                    'official_selection_id' =>  $payload['official_selection_id'],
                    'title'                 =>  $payload['title'],
                    'slug'                  =>  $payload['slug'],
                    'directed_by'           =>  $payload['directed_by'],
                    'country_of_origin'     =>  $payload['country_of_origin'],
                    'language'              =>  $payload['language'],
                    'img_src'               =>  $hashedFilename,
                    'year'                  =>  $payload['year'],
                    'created_by'            =>  1,
                ];

                IndianPanorama::create($data);
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

    public function updateIndianPanorama(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'id'                    => 'required|numeric',
            'official_selection_id' =>  'numeric',
            'title'                 =>  '',
            'slug'                  =>  '',
            'directed_by'           =>  '',
            'country_of_origin'     =>  '',
            'language'              =>  '',
            'img_src'               =>  'file|mimes:jpg,jpeg,png|max:10240',
            'year'                  =>  '',
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
            $indianPanorama = IndianPanorama::find($payload['id']);
            if ($indianPanorama) {
                if ($request->hasFile('img_src')) {

                    $file               =   $request->file('img_src');
                    $destinationPath    =   'images/indian-panorama-cinema';
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
                        'official_selection_id' =>  isset($payload['official_selection_id']) ? $payload['official_selection_id'] : $indianPanorama['official_selection_id'],
                        'title'                 =>  isset($payload['title']) ? $payload['title'] : $indianPanorama['title'],
                        'slug'                  =>  isset($payload['slug']) ? $payload['slug'] : $indianPanorama['slug'],
                        'directed_by'           =>  isset($payload['directed_by']) ? $payload['directed_by'] : $indianPanorama['directed_by'],
                        'country_of_origin'     =>  isset($payload['country_of_origin']) ? $payload['country_of_origin'] : $indianPanorama['country_of_origin'],
                        'language'              =>  isset($payload['language']) ? $payload['language'] : $indianPanorama['language'],
                        'img_src'               =>  $hashedFilename,
                        'year'                  =>  isset($payload['year']) ? $payload['year'] : $indianPanorama['year'],
                    ];
                    $indianPanorama->update($data);
                    $response = [
                        'message' => 'Updated successfully.!',
                        'data' => $data,
                    ];
                    return $this->response('success', $response);
                } else {
                    $data = [
                        'official_selection_id' =>  isset($payload['official_selection_id']) ? $payload['official_selection_id'] : $indianPanorama['official_selection_id'],
                        'title'                 =>  isset($payload['title']) ? $payload['title'] : $indianPanorama['title'],
                        'slug'                  =>  isset($payload['slug']) ? $payload['slug'] : $indianPanorama['slug'],
                        'directed_by'           =>  isset($payload['directed_by']) ? $payload['directed_by'] : $indianPanorama['directed_by'],
                        'country_of_origin'     =>  isset($payload['country_of_origin']) ? $payload['country_of_origin'] : $indianPanorama['country_of_origin'],
                        'language'              =>  isset($payload['language']) ? $payload['language'] : $indianPanorama['language'],
                        'img_src'               =>  $indianPanorama['img_src'],
                        'year'                  =>  isset($payload['year']) ? $payload['year'] : $indianPanorama['year'],
                    ];
                    $indianPanorama->update($data);
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

    public function deleteIndianPanorama(Request $request)
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
            $newsUpdate = IndianPanorama::find($payload['id']);
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
