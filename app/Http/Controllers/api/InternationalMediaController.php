<?php

namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\InternationalMedia;
use App\Http\Traits\RESPONSETrait;
use Illuminate\Http\Request;

class InternationalMediaController extends Controller
{
    use RESPONSETrait;

    public function getAll()
    {
        try {
            $getAll = InternationalMedia::get();
            if ($getAll) {
                $response = [
                    'message'   =>  'Records fetced successfully.!!',
                    'data'      =>  $getAll
                ];
                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Records not found.!!'
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

    public function create(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'title' =>  'required|string',
            'urls'  =>  'required|string',
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
            $data = [
                'title' => $payload['title'],
                'urls' => $payload['urls']
            ];
            $create = InternationalMedia::create($data);
            if ($create) {
                $response = [
                    'message'   =>  'Created successfully.!!',
                    'data'      =>  InternationalMedia::orderBy('id', 'desc')->first(),
                ];
                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Something went wrong to create.!!'
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

    public function update(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'id'        =>  'required|numeric',
            'title'     =>  '',
            'urls'      =>  '',
            'status'    =>  'in:0,1',
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
            $fetchByid = InternationalMedia::find($payload['id']);
            if ($fetchByid) {
                $data = [
                    'title'     =>  isset($payload['title']) ? $payload['title'] : $fetchByid->title,
                    'urls'      =>  isset($payload['urls']) ? $payload['urls'] : $fetchByid->urls,
                    'status'    =>  isset($payload['status']) ? $payload['status'] : $fetchByid->status
                ];
                $update = $fetchByid->update($data);
                if ($update) {
                    $response = [
                        'message'   =>  'Updated successfully.!!',
                        'data'      =>  $fetchByid,
                    ];
                    return $this->response('success', $response);
                } else {
                    $response = [
                        'message' => 'Something went wrong to create.!!'
                    ];
                    return $this->response('exception', $response);
                }
            } else {
                $response = [
                    'message' => 'Records not found.!!'
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

    public function delete(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'id'        =>  'required|numeric',
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
            $fetchByid = InternationalMedia::find($payload['id']);
            if ($fetchByid) {
                $delete = $fetchByid->delete();
                if ($delete) {
                    $response = [
                        'message'   =>  'Deleted successfully.!!',
                        'data'      =>  $fetchByid,
                    ];
                    return $this->response('success', $response);
                } else {
                    $response = [
                        'message' => 'Something went wrong to create.!!'
                    ];
                    return $this->response('exception', $response);
                }
            } else {
                $response = [
                    'message' => 'Records not found.!!'
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

    public function fetchById(Request $request, $id)
    {
        try {
            $getById = InternationalMedia::find($id);
            if ($getById) {
                $response = [
                    'message'   =>  'Records fetced successfully.!!',
                    'data'      =>  $getById
                ];
                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Records not found.!!'
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
