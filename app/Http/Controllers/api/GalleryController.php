<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Traits\RESPONSETrait;
use App\Models\Photo;
use App\Models\PhotoCategory;
use Google\Cloud\Storage\StorageClient;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    use RESPONSETrait;

    public function __construct()
    {
        $this->projectId = env('GOOGLE_CLOUD_PROJECT_ID');
        $this->bucketName = env('GOOGLE_CLOUD_STORAGE_BUCKET');
        $this->keyFilePath = storage_path('app/keys/'.env('GOOGLE_APPLICATION_CREDENTIALS'));
        $this->gcsApi = env('GOOGLE_CLOUD_STORAGE_API_URI');
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
                        CURLOPT_CAINFO => 'C:\php\extras\ssl\cacert.pem', // Path to cacert.pem file
                    ],
                ]);
                // Initialize Google Cloud Storage Client
                $storage = new StorageClient([
                    'projectId' => $projectId,
                    'keyFilePath' => $keyFilePath,
                    'httpClient' => $guzzleClient,
                ]);

                // Get the bucket
                $bucket = $storage->bucket($bucketName);

                // Upload the file to the GCS bucket
                $object = $bucket->upload(
                    fopen($fileTmpPath, 'r'),
                    ['name' => 'uploads/'.$fileName] // Save inside 'uploads' folder in GCS
                );

                // Get the public URL (optional)
                $publicUrl = sprintf('https://storage.googleapis.com/%s/uploads/%s', $bucketName, $fileName);

                echo 'File uploaded successfully!<br>';
                echo "File URL: <a href='$publicUrl' target='_blank'>$publicUrl</a>";
            } catch (Exception $e) {
                echo 'Error uploading file: '.$e->getMessage();
            }
        } else {
            echo 'No file uploaded.';
        }
    }

    public function upload(Request $request)
    {
        $payload = $request->all();
        $validatorArray = [
            'category_id' => 'required_without:video_url|nullable',
            'img_caption' => 'required',
            'video_url' => 'required_without:image|url',
            'image' => 'required_without:video_url|file|mimes:jpg,jpeg,png|max:100048',
        ];
        $messagesArray = [
            'img_caption.required' => 'Camption is required !!',
            'category_id.required_without' => 'Category is required, when video url is not present !!',
        ];
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
                $tempPath = $file->getRealPath();
                $originalFilename = $file->getClientOriginalName();
                //This is for GOOGLE CLOUD STORAGE
                $guzzleClient = new Client([
                    'verify' => false,
                    'curl' => [
                        CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_SSL_VERIFYHOST => false,
                        CURLOPT_CAINFO => 'C:\php\extras\ssl\cacert.pem',
                    ],
                ]);
                $storage = new StorageClient([
                    'projectId' => $this->projectId,
                    'keyFilePath' => $this->keyFilePath,
                    'httpClient' => $guzzleClient,
                ]);
                $bucket = $storage->bucket($this->bucketName);
                $bucket->upload(fopen($tempPath, 'r'), ['name' => 'uploads/'.$originalFilename]);
                $publicUrl = sprintf($this->gcsApi, $this->bucketName, $originalFilename);
                $data = [
                    'category_id' => $payload['category_id'],
                    'img_caption' => isset($payload['img_caption']) ? $payload['img_caption'] : null,
                    'image' => $originalFilename,
                    'img_url' => $publicUrl,
                    'year' => 2024,
                ];
                $photo = Photo::create($data);
                if ($photo) {
                    $response = [
                        'message' => 'File uploaded successfully!!',
                        'data' => $photo->latest()->first(),
                    ];

                    return $this->response('success', $response);
                } else {
                    $response = [
                        'message' => 'Something went wrong !!',
                    ];

                    return $this->response('exception', $response);
                }
            } else {

                $data = [
                    'img_caption' => $payload['img_caption'],
                    'video_url' => $payload['video_url'],
                    'year' => 2024,
                ];
                $photo = Photo::create($data);
                if ($photo) {
                    $response = [
                        'message' => 'Video uploaded successfully!!',
                        'data' => $photo->latest()->first(),
                    ];

                    return $this->response('success', $response);
                } else {
                    $response = [
                        'message' => 'Something went wrong !!',
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
            $allPhotos = Photo::select('id', 'category_id', 'img_caption', 'image', 'img_url', 'video_url', 'status', 'year', 'created_at', 'updated_at', 'title', 'ceremony')->where(['year' => 2024])->orderBy('id', 'DESC')->get();
            if (! empty($allPhotos)) {
                $response = [
                    'message' => 'All photos fetched !!',
                    'data' => $allPhotos,
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
            $photoById = Photo::where(['id' => $id, 'year' => 2024])->first();
            if (! empty($photoById)) {
                $response = [
                    'message' => 'Photo details fetched !!',
                    'data' => $photoById,
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

    public function activeInactive(Request $request, $id)
    {
        $payload = $request->all();

        $validatorArray = [
            'category_id' => '',
            'img_caption' => '',
            'video_url' => '',
            'image' => 'file|mimes:jpg,jpeg,png|max:100048',
            'status' => 'in:0,1',
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
            $photoToUpdate = Photo::where(['year' => 2024])->find($id);
            if (! empty($photoToUpdate)) {
                if ($request->hasFile('image')) {
                    $file = $request->file('image');
                    $tempPath = $file->getRealPath();
                    $originalFilename = $file->getClientOriginalName();
                    $guzzleClient = new Client([
                        'verify' => false,
                        'curl' => [
                            CURLOPT_SSL_VERIFYPEER => false,
                            CURLOPT_SSL_VERIFYHOST => false,
                            CURLOPT_CAINFO => 'C:\php\extras\ssl\cacert.pem',
                        ],
                    ]);
                    $storage = new StorageClient([
                        'projectId' => $this->projectId,
                        'keyFilePath' => $this->keyFilePath,
                        'httpClient' => $guzzleClient,
                    ]);
                    $bucket = $storage->bucket($this->bucketName);
                    $bucket->upload(fopen($tempPath, 'r'), ['name' => 'uploads/'.$originalFilename]);
                    $publicUrl = sprintf($this->gcsApi, $this->bucketName, $originalFilename);
                    $data = [
                        'category_id' => isset($payload['category_id']) ? $payload['category_id'] : $photoToUpdate->category_id,
                        'img_caption' => isset($payload['img_caption']) ? $payload['img_caption'] : $photoToUpdate->img_caption,
                        'image' => $originalFilename,
                        'img_url' => $publicUrl,
                        'status' => isset($payload['status']) ? $payload['status'] : $photoToUpdate->status,
                    ];

                    $photo = Photo::where('id', $id)->update($data);
                    if ($photo) {
                        $response = [
                            'message' => 'File uploaded successfully!!',
                            'data' => Photo::find($id),
                        ];

                        return $this->response('success', $response);
                    } else {
                        $response = [
                            'message' => 'Something went wrong !!',
                        ];

                        return $this->response('exception', $response);
                    }
                } else {
                    $data = [
                        'category_id' => isset($payload['category_id']) ? $payload['category_id'] : $photoToUpdate->category_id,
                        'video_url' => isset($payload['video_url']) ? $payload['video_url'] : $photoToUpdate->video_url,
                        'status' => isset($payload['status']) ? $payload['status'] : $photoToUpdate->status,
                    ];
                    $photo = Photo::where('id', $id)->update($data);
                    if ($photo) {
                        $response = [
                            'message' => 'Data updated successfully !!',
                            'data' => Photo::find($id),
                        ];

                        return $this->response('success', $response);
                    } else {
                        $response = [
                            'message' => 'Something went wrong !!',
                        ];

                        return $this->response('exception', $response);
                    }
                }
            } else {
                $response = [
                    'message' => 'Records not found !!',
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
            $categories = PhotoCategory::select('id', 'category')->get();
            if (! empty($categories)) {
                $response = [
                    'message' => 'Category fetched !!',
                    'data' => $categories,
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

    public function deleteGalleryPhoto($id)
    {
        try {
            $getPhoto = Photo::find($id);
            if ($getPhoto) {
                $getPhoto->delete();
                $response = [
                    'message' => 'Deleted successfully',
                ];

                return $this->response('exception', $response);
            } else {
                $response = [
                    'message' => 'Nothing to updated !!',
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
