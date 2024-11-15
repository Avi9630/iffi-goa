<?php

namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Traits\RESPONSETrait;
use Illuminate\Http\Request;
use App\Models\InternationalCinema;
use App\Models\InternationalCuratedSection;

class InternationalCinemaController extends Controller
{
    use RESPONSETrait;

    public function getCuratedSection(Request $request)
    {
        try {
            $data   =   InternationalCuratedSection::all();

            if ($data) {
                $response = [
                    'message' => 'Details fetched successfully.!',
                    'data' => $data,
                ];
                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Record not found.!',
                    'data' => $data,
                ];
                return $this->response('success', $response);
            }
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];
            return $this->response('exception', $response);
        }
    }

    public function internationCinemaList(Request $request)
    {
        try {
            $data   =   InternationalCinema::where(['year' => 2024])->get();
            if ($data) {
                $response = [
                    'message' => 'Success!',
                    'data' => $data,
                ];
                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Record Not Found.!',
                    'data' => $data,
                ];
                return $this->response('response', $response);
            }
        } catch (\Exception $e) {
            $response = [
                'message' => $e->getMessage(),
            ];
            return $this->response('exception', $response);
        }
    }

    public function internationCinemaCreate(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'curated_section_id'    =>  'required|string|max:255',
            'title'                 =>  'required|string|max:255',
            'award'                 =>  'string|max:255',
            'directed_by'           =>  'required|string|max:255',
            'country_of_origin'     =>  'required|string|max:255',
            'language'              =>  'required|string|max:255',
            'slug'                  =>  'required|string|max:255',
            'year'                  =>  'required|string|max:4',
            'img_src'               =>  'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status'                =>  'required|boolean',
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
                $destinationPath    =   'images/cureted-section';
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
                    'curated_section_id'    =>  $payload['curated_section_id'],
                    'title'                 =>  $payload['title'],
                    'award'                 =>  $payload['award'],
                    'directed_by'           =>  $payload['directed_by'],
                    'country_of_origin'     =>  $payload['country_of_origin'],
                    'language'              =>  $payload['language'],
                    'slug'                  =>  $payload['slug'],
                    'year'                  =>  $payload['year'],
                    'status'                =>  $payload['status'],
                ];
                InternationalCinema::create($data);
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

    public function internationCinemaUpdate(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'id'                    =>  'required|numeric',
            'curated_section_id'    =>  'required|string|max:255',
            'title'                 =>  'required|string|max:255',
            'award'                 =>  'string|max:255',
            'directed_by'           =>  'required|string|max:255',
            'country_of_origin'     =>  'required|string|max:255',
            'language'              =>  'required|string|max:255',
            'slug'                  =>  'required|string|max:255',
            'year'                  =>  'required|string|max:4',
            'img_src_file'          =>  'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status'                =>  'required|boolean',
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
            $internationalCinema = InternationalCinema::find($payload['id']);
            if ($internationalCinema) {
                if ($request->hasFile('img_src_file')) {
                    $file               =   $request->file('img_src_file');
                    $destinationPath    =   'images/cureted-section';
                    $originalFilename   =   $file->getClientOriginalName();
                    $extension          =   $file->getClientOriginalExtension();
                    $hashedFilename     =   substr(md5($originalFilename . time()), 0, 20) . '.' . $extension;
                    $fullFilePath       =   public_path($destinationPath . '/' . $hashedFilename);

                    if (File::exists($fullFilePath)) {
                        $response = [
                            'message' => 'File with the same name already exists. Please reupload file!!',
                            'existing_file' => $hashedFilename,
                        ];
                        return $this->response('conflict', $response);
                    }

                    $file->move(public_path($destinationPath), $hashedFilename);
                    $data = [
                        'img_src'               =>  $hashedFilename,
                        'image_name'            =>  $hashedFilename,
                        'curated_section_id'    =>  isset($payload['curated_section_id']) ? $payload['curated_section_id'] : $internationalCinema['curated_section_id'],
                        'title'                 =>  isset($payload['title']) ? $payload['title'] : $internationalCinema['title'],
                        'award'                 =>  isset($payload['award']) ? $payload['award'] : $internationalCinema['award'],
                        'directed_by'           =>  isset($payload['directed_by']) ? $payload['directed_by'] : $internationalCinema['directed_by'],
                        'country_of_origin'     =>  isset($payload['country_of_origin']) ? $payload['country_of_origin'] : $internationalCinema['country_of_origin'],
                        'language'              =>  isset($payload['language']) ? $payload['language'] : $internationalCinema['language'],
                        'slug'                  =>  isset($payload['slug']) ? $payload['slug'] : $internationalCinema['slug'],
                        'year'                  =>  isset($payload['year']) ? $payload['year'] : $internationalCinema['year'],
                        'status'                =>  isset($payload['status']) ? $payload['status'] : $internationalCinema['status'],
                    ];
                    $internationalCinema->update($data);
                    $response = [
                        'message' => 'Updated successfully.!',
                        'data' => $internationalCinema,
                    ];
                    return $this->response('success', $response);
                } else {
                    $data = [
                        'img_src'               =>  isset($payload['img_src']) ? $payload['img_src'] : $internationalCinema['img_src'],
                        'image_name'            =>  isset($payload['image_name']) ? $payload['image_name'] : $internationalCinema['image_name'],
                        'curated_section_id'    =>  isset($payload['curated_section_id']) ? $payload['curated_section_id'] : $internationalCinema['curated_section_id'],
                        'title'                 =>  isset($payload['title']) ? $payload['title'] : $internationalCinema['title'],
                        'award'                 =>  isset($payload['award']) ? $payload['award'] : $internationalCinema['award'],
                        'directed_by'           =>  isset($payload['directed_by']) ? $payload['directed_by'] : $internationalCinema['directed_by'],
                        'country_of_origin'     =>  isset($payload['country_of_origin']) ? $payload['country_of_origin'] : $internationalCinema['country_of_origin'],
                        'language'              =>  isset($payload['language']) ? $payload['language'] : $internationalCinema['language'],
                        'slug'                  =>  isset($payload['slug']) ? $payload['slug'] : $internationalCinema['slug'],
                        'year'                  =>  isset($payload['year']) ? $payload['year'] : $internationalCinema['year'],
                        'status'                =>  isset($payload['status']) ? $payload['status'] : $internationalCinema['status'],
                    ];
                    $internationalCinema->update($data);
                    $response = [
                        'message' => 'Updated successfully.!',
                        'data' => $internationalCinema,
                    ];
                    return $this->response('success', $response);
                }
            } else {
                $response = [
                    'message' => 'Record not found!!',
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

    public function getById(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'id'    =>  'required',
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
            $internationalCinema = InternationalCinema::find($payload['id']);
            if ($internationalCinema) {
                $response = [
                    'message'   =>  'Success!!',
                    'data'      =>  $internationalCinema,
                ];
                return $this->response('success', $response);
            } else {
                $response = [
                    'message'   =>  'Record not found!!',
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


    public function curetedSection2024(Request $request)
    {
        try {
            $payload = $request->all();
            $curetedsectionData = curetedsection2024::where('international_cinema.year', 2024)->get();

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
}
