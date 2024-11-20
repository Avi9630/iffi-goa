<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Traits\RESPONSETrait;
use Illuminate\Http\Request;
use Google\Cloud\Storage\StorageClient;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use DB;

class GalleryController extends Controller
{
    use RESPONSETrait;

    public function __construct()
    {
        $this->projectId    =   'iffi-goa-429607';
        $this->bucketName   =   'iffi-goa-public-bucket-0001';
        $this->keyFilePath  =   storage_path('app/keys/service-account.json');
    }

    public function uploadGallery(Request $request)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {

            $projectId = 'iffi-goa-429607'; // Replace with your GCP project ID
            $bucketName = 'iffi-goa-public-bucket-0001'; // Replace with your GCS bucket name
            $keyFilePath = storage_path('app/keys/service-account.json');
            // $keyFilePath = __DIR__ . '/service-account.json';
            // dd($keyFilePath);
            $fileTmpPath = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            // dd($fileName);
            try {
                // Initialize Guzzle HTTP Client with SSL verification disabled
                $guzzleClient = new Client([
                    'verify' => false, // This should disable SSL verification
                    'curl' => [
                        CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_SSL_VERIFYHOST => false,
                        CURLOPT_CAINFO => 'C:\php\extras\ssl\cacert.pem' // Path to cacert.pem file
                    ]
                ]);
                // Initialize Google Cloud Storage Client
                $storage = new StorageClient([
                    'projectId' => $projectId,
                    'keyFilePath' => $keyFilePath,
                    'httpClient' => $guzzleClient
                ]);

                // Get the bucket
                $bucket = $storage->bucket($bucketName);

                // Upload the file to the GCS bucket
                $object = $bucket->upload(
                    fopen($fileTmpPath, 'r'),
                    ['name' => 'uploads/' . $fileName] // Save inside 'uploads' folder in GCS
                );

                // Get the public URL (optional)
                $publicUrl = sprintf('https://storage.googleapis.com/%s/uploads/%s', $bucketName, $fileName);

                echo "File uploaded successfully!<br>";
                echo "File URL: <a href='$publicUrl' target='_blank'>$publicUrl</a>";
            } catch (Exception $e) {
                echo 'Error uploading file: ' . $e->getMessage();
            }
        } else {
            echo 'No file uploaded.';
        }
    }

    public function upload(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'category_id'   =>  'required',
            'img_caption'   =>  'required',
            'video_url'     =>  'required_without:image',
            'image'         =>  'required_without:video_url|file|mimes:jpg,jpeg,png|max:100048',
            'title'         =>  '',
            'ceremony'      =>  '',
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
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $destinationPath    =   'images/gallery-2024';
                $tempPath           =   $file->getRealPath();
                $originalFilename   =   $file->getClientOriginalName();
                $extension          =   $file->getClientOriginalExtension();
                $hashedFilename     =   substr(md5($originalFilename . time()), 0, 20) . '.' . $extension;
                $fullFilePath       =   public_path($destinationPath . '/' . $hashedFilename);
                if (File::exists($fullFilePath)) {
                    $response = [
                        'message' => 'File with the same name already exists !! Please upload again !!',
                        'existing_file' => $hashedFilename,
                    ];
                    return $this->response('conflict', $response);
                }
                //This is for GOOGLE CLOUD STORAGE
                $guzzleClient = new Client([
                    'verify' => false,
                    'curl' => [
                        CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_SSL_VERIFYHOST => false,
                        CURLOPT_CAINFO => 'C:\php\extras\ssl\cacert.pem'
                    ]
                ]);
                $storage = new StorageClient([
                    'projectId'     =>  $this->projectId,
                    'keyFilePath'   =>  $this->keyFilePath,
                    'httpClient'    =>  $guzzleClient
                ]);
                $bucket = $storage->bucket($this->bucketName);
                $bucket->upload(
                    fopen($tempPath, 'r'),
                    ['name' => 'uploads/' . $originalFilename]
                );
                $publicUrl = sprintf('https://storage.googleapis.com/%s/uploads/%s', $this->bucketName, $originalFilename);
                $data = [
                    'category_id'   =>  $payload['category_id'],
                    'img_caption'   =>  isset($payload['img_caption']) ? $payload['img_caption'] : NULL,
                    'image'         =>  $originalFilename,
                    'img_url'       =>  $publicUrl,
                    'title'         =>  isset($payload['title']) ? $payload['title'] : NULL,
                    'ceremony'      =>  isset($payload['ceremony']) ? $payload['ceremony'] : NULL,
                    'year'          =>  2024,
                ];
                $partners = DB::table('mst_photos')->insert($data);
                if ($partners) {
                    // $lastInsertedId = $partners->insertGetId($data);
                    $response = [
                        'message'   =>  'File uploaded successfully!!',
                        // 'data'      =>  DB::table('mst_photos')
                        //     ->select('id', 'category_id', 'img_caption', 'image', 'img_url', 'video_url')
                        //     ->find($lastInsertedId)
                    ];
                    return $this->response('success', $response);
                } else {
                    $response = [
                        'message'   =>  'Something went wrong !!',
                    ];
                    return $this->response('exception', $response);
                }
            } else {

                $data = [
                    'category_id'   =>  $payload['category_id'],
                    'img_caption'   =>  isset($payload['img_caption']) ? $payload['img_caption'] : NULL,
                    'video_url'     =>  $payload['video_url'],
                    'title'         =>  isset($payload['title']) ? $payload['title'] : NULL,
                    'ceremony'      =>  isset($payload['ceremony']) ? $payload['ceremony'] : NULL,
                    'year'          =>  2024,
                ];
                $partners = DB::table('mst_photos')->insert($data);
                if ($partners) {
                    // $lastInsertedId = DB::table('mst_photos')->insertGetId($data);
                    $response = [
                        'message'   =>  'Video uploaded successfully!!',
                        // 'data'      =>  DB::table('mst_photos')
                        //     ->select('id', 'category_id', 'img_caption', 'image', 'img_url', 'video_url')
                        //     ->find($lastInsertedId)
                    ];
                    return $this->response('success', $response);
                } else {
                    $response = [
                        'message'   =>  'Something went wrong !!',
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

    public function allPhoto()
    {
        try {
            $allPhotos = DB::table('mst_photos')
                ->where(['year' => 2024])
                ->orderBy('id', 'DESC')->get();
            if (!empty($allPhotos)) {
                $response = [
                    'message'   => 'All photos fetched !!',
                    'data'      =>  $allPhotos
                ];
                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Not found category !!',
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

    public function photoById(Request $request, $id)
    {
        try {
            $photoById = DB::table('mst_photos')
                ->where(['id' => $id, 'status' => 1, 'year' => 2024])
                ->orderBy('id', 'DESC')->first();
            if (!empty($photoById)) {
                $response = [
                    'message'   => 'Photo details fetched !!',
                    'data'      =>  $photoById
                ];
                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Not found category !!',
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

    public function activeInactive(Request $request, $id)
    {
        $payload = $request->all();
        $validatorArray = [
            'category_id'   =>  'required',
            'img_caption'   =>  '',
            'video_url'     =>  '',
            'image'         =>  'file|mimes:jpg,jpeg,png|max:100048',
            'title'         =>  '',
            'ceremony'      =>  '',
            'status'        =>  'in:0,1',
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
            $photoToUpdate = DB::table('mst_photos')
                ->where(['id' => $id, 'year' => 2024])
                ->orderBy('id', 'DESC')->first();

            if (!empty($photoToUpdate)) {
                if ($request->hasFile('image')) {
                    $file = $request->file('image');
                    $tempPath           =   $file->getRealPath();
                    $originalFilename   =   $file->getClientOriginalName();
                    $extension          =   $file->getClientOriginalExtension();

                    $guzzleClient = new Client([
                        'verify' => false,
                        'curl' => [
                            CURLOPT_SSL_VERIFYPEER => false,
                            CURLOPT_SSL_VERIFYHOST => false,
                            CURLOPT_CAINFO => 'C:\php\extras\ssl\cacert.pem'
                        ]
                    ]);

                    $storage = new StorageClient([
                        'projectId'     =>  $this->projectId,
                        'keyFilePath'   =>  $this->keyFilePath,
                        'httpClient'    =>  $guzzleClient
                    ]);
                    $bucket = $storage->bucket($this->bucketName);
                    $bucket->upload(
                        fopen($tempPath, 'r'),
                        ['name' => 'uploads/' . $originalFilename]
                    );
                    $publicUrl = sprintf('https://storage.googleapis.com/%s/uploads/%s', $this->bucketName, $originalFilename);
                    $data = [
                        'category_id'   =>  $payload['category_id'],
                        'img_caption'   =>  isset($payload['img_caption']) ? $payload['img_caption'] : $photoToUpdate->img_caption,
                        'image'         =>  $originalFilename,
                        'img_url'       =>  $publicUrl,
                        'title'         =>  isset($payload['title']) ? $payload['title'] : $photoToUpdate->title,
                        'ceremony'      =>  isset($payload['ceremony']) ? $payload['ceremony'] : $photoToUpdate->ceremony,
                        'year'          =>  2024,
                        'status'        =>  isset($payload['status']) ? $payload['status'] : $photoToUpdate->status,
                    ];
                    $partners = DB::table('mst_photos')->where('id', $id)->update($data);
                    if ($partners) {
                        // $lastInsertedId = $partners->insertGetId($data);
                        $response = [
                            'message'   =>  'File uploaded successfully!!',
                            // 'data'      =>  DB::table('mst_photos')
                            //     ->select('id', 'category_id', 'img_caption', 'image', 'img_url', 'video_url')
                            //     ->find($lastInsertedId)
                        ];
                        return $this->response('success', $response);
                    } else {
                        $response = [
                            'message'   =>  'Something went wrong !!',
                        ];
                        return $this->response('exception', $response);
                    }
                } else {

                    $data = [
                        'category_id'   =>  $payload['category_id'],
                        'video_url'     =>  isset($payload['video_url']) ? $payload['video_url'] : $photoToUpdate->video_url,
                        'title'         =>  isset($payload['title']) ? $photoToUpdate['title'] : $photoToUpdate->title,
                        'ceremony'      =>  isset($payload['ceremony']) ? $photoToUpdate['ceremony'] : $photoToUpdate->ceremony,
                        'year'          =>  2024,
                        'status'        =>  isset($payload['status']) ? $payload['status'] : $photoToUpdate->status,
                    ];

                    $mst_photos = DB::table('mst_photos')->where('id', $id)->update($data);
                    if ($mst_photos) {
                        $response = [
                            'message'   =>  'Video uploaded successfully!!',
                        ];
                        return $this->response('success', $response);
                    } else {
                        $response = [
                            'message'   =>  'Something went wrong !!',
                        ];
                        return $this->response('exception', $response);
                    }
                }
            } else {
                $response = [
                    'message'   =>  'Record not fond !!',
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

    public function photoCategory()
    {
        try {
            $categories = DB::table('mst_photos_category')->select('id', 'category')->get();
            if (!empty($categories)) {
                $response = [
                    'message'   => 'Category fetched !!',
                    'data'      =>  $categories
                ];
                return $this->response('success', $response);
            } else {
                $response = [
                    'message' => 'Not found category !!',
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
// 