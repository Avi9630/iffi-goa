<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Traits\RESPONSETrait;
use App\Models\InternationalCinema;
use App\Models\InternationalCinemaBasicDetail;
use App\Models\InternationalCuratedSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class InternationalCinemaController extends Controller
{
    use RESPONSETrait;

    public function getCuratedSection(Request $request)
    {
        try {
            $data = InternationalCuratedSection::all();

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
            $data = InternationalCinema::where(['year' => 2024])->get();
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
            'curated_section_id' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'award' => 'string|max:255',
            'directed_by' => 'required|string|max:255',
            'country_of_origin' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'year' => 'required|string|max:4',
            'img_src_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10050',
            'status' => 'required|boolean',
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

            if ($request->hasFile('img_src_file')) {
                $file = $request->file('img_src_file');
                $destinationPath = 'images/cureted-section';
                $originalFilename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $hashedFilename = substr(md5($originalFilename.time()), 0, 20).'.'.$extension;
                $fullFilePath = public_path($destinationPath.'/'.$hashedFilename);
                if (File::exists($fullFilePath)) {
                    $response = [
                        'message' => 'File with the same name already exists.',
                        'existing_file' => $hashedFilename,
                    ];

                    return $this->response('conflict', $response);
                }
                $file->move(public_path($destinationPath), $hashedFilename);
                $data = [
                    'curated_section_id' => $payload['curated_section_id'],
                    'title' => $payload['title'],
                    'award' => $payload['award'],
                    'directed_by' => $payload['directed_by'],
                    'country_of_origin' => $payload['country_of_origin'],
                    'language' => $payload['language'],
                    'slug' => $payload['slug'],
                    'year' => $payload['year'],
                    'status' => $payload['status'],
                    'img_src' => $hashedFilename,
                    'image_name' => $hashedFilename,

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

    public function internationCinemaUpdate(Request $request, $id)
    {

        $payload = $request->all();
        $validatorArray = [
            // 'id' => 'required|numeric',
            'curated_section_id' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'award' => 'string|max:255',
            'directed_by' => 'required|string|max:255',
            'country_of_origin' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'year' => 'required|string|max:4',
            'img_src_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
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
            // $internationalCinema = InternationalCinema::find($payload['id']);
            $internationalCinema = InternationalCinema::find($id);
            if ($internationalCinema) {
                if ($request->hasFile('img_src_file')) {
                    $file = $request->file('img_src_file');
                    $destinationPath = 'images/cureted-section';
                    $originalFilename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $hashedFilename = substr(md5($originalFilename.time()), 0, 20).'.'.$extension;
                    $fullFilePath = public_path($destinationPath.'/'.$hashedFilename);

                    if (File::exists($fullFilePath)) {
                        $response = [
                            'message' => 'File with the same name already exists. Please reupload file!!',
                            'existing_file' => $hashedFilename,
                        ];

                        return $this->response('conflict', $response);
                    }

                    $file->move(public_path($destinationPath), $hashedFilename);
                    $data = [
                        'img_src' => $hashedFilename,
                        'image_name' => $hashedFilename,
                        'curated_section_id' => isset($payload['curated_section_id']) ? $payload['curated_section_id'] : $internationalCinema['curated_section_id'],
                        'title' => isset($payload['title']) ? $payload['title'] : $internationalCinema['title'],
                        'award' => isset($payload['award']) ? $payload['award'] : $internationalCinema['award'],
                        'directed_by' => isset($payload['directed_by']) ? $payload['directed_by'] : $internationalCinema['directed_by'],
                        'country_of_origin' => isset($payload['country_of_origin']) ? $payload['country_of_origin'] : $internationalCinema['country_of_origin'],
                        'language' => isset($payload['language']) ? $payload['language'] : $internationalCinema['language'],
                        'slug' => isset($payload['slug']) ? $payload['slug'] : $internationalCinema['slug'],
                        'year' => isset($payload['year']) ? $payload['year'] : $internationalCinema['year'],
                        'status' => isset($payload['status']) ? $payload['status'] : $internationalCinema['status'],
                    ];
                    $internationalCinema->update($data);
                    $response = [
                        'message' => 'Updated successfully.!',
                        'data' => $internationalCinema,
                    ];

                    return $this->response('success', $response);
                } else {
                    $data = [
                        'img_src' => isset($payload['img_src']) ? $payload['img_src'] : $internationalCinema['img_src'],
                        'image_name' => isset($payload['image_name']) ? $payload['image_name'] : $internationalCinema['image_name'],
                        'curated_section_id' => isset($payload['curated_section_id']) ? $payload['curated_section_id'] : $internationalCinema['curated_section_id'],
                        'title' => isset($payload['title']) ? $payload['title'] : $internationalCinema['title'],
                        'award' => isset($payload['award']) ? $payload['award'] : $internationalCinema['award'],
                        'directed_by' => isset($payload['directed_by']) ? $payload['directed_by'] : $internationalCinema['directed_by'],
                        'country_of_origin' => isset($payload['country_of_origin']) ? $payload['country_of_origin'] : $internationalCinema['country_of_origin'],
                        'language' => isset($payload['language']) ? $payload['language'] : $internationalCinema['language'],
                        'slug' => isset($payload['slug']) ? $payload['slug'] : $internationalCinema['slug'],
                        'year' => isset($payload['year']) ? $payload['year'] : $internationalCinema['year'],
                        'status' => isset($payload['status']) ? $payload['status'] : $internationalCinema['status'],
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

    public function getById(Request $request, $id)
    {
        $payload = $request->all();
        // $validatorArray = [
        //     'id' => 'required',
        // ];
        // $messagesArray = [];
        // $validator = Validator::make($payload, $validatorArray, $messagesArray);
        // if ($validator->fails()) {
        //     $output = [
        //         'message' => $validator->errors()->first(),
        //     ];

        //     return $this->response('validatorerrors', $output);
        // }
        try {
            $internationalCinema = InternationalCinema::find($id);
            if ($internationalCinema) {
                $response = [
                    'message' => 'Success!!',
                    'data' => $internationalCinema,
                ];

                return $this->response('success', $response);
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

    public function createBasicDetail(Request $request, $id)
    {
        $payload = $request->all();

        $validatorArray = [
            'director' => '',
            'producer' => '',
            'screenplay' => '',
            'editor' => '',
            'cast' => '',
            'dop' => '',
            'other_details' => '',
            'synopsis' => '',
            'producer_bio' => '',
            'sales_agent' => '',
            'award' => '',
            'writer' => '',
            'trailer_link' => '',
            'official_selection' => '',
            'best_film_award' => '',
            'director_and_producer' => '',
            'original_title' => '',
            'co_produced' => '',
            'festivals' => '',
            'drama' => '',
            'history' => '',
            'nomination' => '',
            'status' => 'boolean',
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

            $getBasicBasicDetails = InternationalCinemaBasicDetail::where(['cinema_id' => $id])->first();
            if ($getBasicBasicDetails) {
                $dataToUpdate = [
                    'director' => isset($payload['director']) ? $payload['director'] : $getBasicBasicDetails['director'],
                    'producer' => isset($payload['producer']) ? $payload['producer'] : $getBasicBasicDetails['producer'],
                    'screenplay' => isset($payload['screenplay']) ? $payload['screenplay'] : $getBasicBasicDetails['screenplay'],
                    'editor' => isset($payload['editor']) ? $payload['editor'] : $getBasicBasicDetails['editor'],
                    'cast' => isset($payload['cast']) ? $payload['cast'] : $getBasicBasicDetails['cast'],
                    'dop' => isset($payload['dop']) ? $payload['dop'] : $getBasicBasicDetails['dop'],
                    'other_details' => isset($payload['other_details']) ? $payload['other_details'] : $getBasicBasicDetails['other_details'],
                    'synopsis' => isset($payload['synopsis']) ? $payload['synopsis'] : $getBasicBasicDetails['synopsis'],
                    'producer_bio' => isset($payload['producer_bio']) ? $payload['producer_bio'] : $getBasicBasicDetails['producer_bio'],
                    'sales_agent' => isset($payload['sales_agent']) ? $payload['sales_agent'] : $getBasicBasicDetails['sales_agent'],
                    'award' => isset($payload['award']) ? $payload['award'] : $getBasicBasicDetails['award'],
                    'writer' => isset($payload['writer']) ? $payload['writer'] : $getBasicBasicDetails['writer'],
                    'trailer_link' => isset($payload['trailer_link']) ? $payload['trailer_link'] : $getBasicBasicDetails['trailer_link'],
                    'official_selection' => isset($payload['official_selection']) ? $payload['official_selection'] : $getBasicBasicDetails['official_selection'],
                    'best_film_award' => isset($payload['best_film_award']) ? $payload['best_film_award'] : $getBasicBasicDetails['best_film_award'],
                    'director_and_producer' => isset($payload['director_and_producer']) ? $payload['director_and_producer'] : $getBasicBasicDetails['director_and_producer'],
                    'original_title' => isset($payload['original_title']) ? $payload['original_title'] : $getBasicBasicDetails['original_title'],
                    'co_produced' => isset($payload['co_produced']) ? $payload['co_produced'] : $getBasicBasicDetails['co_produced'],
                    'festivals' => isset($payload['festivals']) ? $payload['festivals'] : $getBasicBasicDetails['festivals'],
                    'drama' => isset($payload['drama']) ? $payload['drama'] : $getBasicBasicDetails['drama'],
                    'history' => isset($payload['history']) ? $payload['history'] : $getBasicBasicDetails['history'],
                    'nomination' => isset($payload['nomination']) ? $payload['nomination'] : $getBasicBasicDetails['nomination'],
                    'status' => isset($payload['status']) ? $payload['status'] : $getBasicBasicDetails['status'],
                    'created_by' => 1,
                    'updated_by' => 1,
                ];
                $updateBasicDetails = $getBasicBasicDetails->update($dataToUpdate);
                if ($updateBasicDetails) {
                    $response = [
                        'message' => 'Basic Details updated successfully!!',
                        'data' => $getBasicBasicDetails,
                    ];

                    return $this->response('Basic details updated successfully!!', $response);
                } else {
                    $response = [
                        'message' => 'Something went wrong to update basic details!! Please verify your data below!!',
                        'data' => $dataToUpdate,
                    ];

                    return $this->response('exception', $response);
                }
            } else {

                $dataToCreate = [
                    'cinema_id' => $id,
                    'director' => isset($payload['director']) ? $payload['director'] : '',
                    'producer' => isset($payload['producer']) ? $payload['producer'] : '',
                    'screenplay' => isset($payload['screenplay']) ? $payload['screenplay'] : '',
                    'editor' => isset($payload['editor']) ? $payload['editor'] : '',
                    'cast' => isset($payload['cast']) ? $payload['cast'] : '',
                    'dop' => isset($payload['dop']) ? $payload['dop'] : '',
                    'other_details' => isset($payload['other_details']) ? $payload['other_details'] : '',
                    'synopsis' => isset($payload['synopsis']) ? $payload['synopsis'] : '',
                    'producer_bio' => isset($payload['producer_bio']) ? $payload['producer_bio'] : '',
                    'sales_agent' => isset($payload['sales_agent']) ? $payload['sales_agent'] : '',
                    'award' => isset($payload['award']) ? $payload['award'] : '',
                    'writer' => isset($payload['writer']) ? $payload['writer'] : '',
                    'trailer_link' => isset($payload['trailer_link']) ? $payload['trailer_link'] : '',
                    'official_selection' => isset($payload['official_selection']) ? $payload['official_selection'] : '',
                    'best_film_award' => isset($payload['best_film_award']) ? $payload['best_film_award'] : '',
                    'director_and_producer' => isset($payload['director_and_producer']) ? $payload['director_and_producer'] : '',
                    'original_title' => isset($payload['original_title']) ? $payload['original_title'] : '',
                    'co_produced' => isset($payload['co_produced']) ? $payload['co_produced'] : '',
                    'festivals' => isset($payload['festivals']) ? $payload['festivals'] : '',
                    'drama' => isset($payload['drama']) ? $payload['drama'] : '',
                    'history' => isset($payload['history']) ? $payload['history'] : '',
                    'nomination' => isset($payload['nomination']) ? $payload['nomination'] : '',
                    'created_by' => 1,
                ];
                $createBasicDetails = InternationalCinemaBasicDetail::create($dataToCreate);
                if ($createBasicDetails) {
                    $response = [
                        'message' => 'Basic Details created successfully!!',
                        'data' => $createBasicDetails,
                    ];

                    return $this->response('Basic details updated successfully!!', $response);
                } else {
                    $response = [
                        'message' => 'Something went wrong to create basic details!!',
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
}
