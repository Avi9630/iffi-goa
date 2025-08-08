<?php

namespace App\Services;

use Google\Cloud\Storage\StorageClient;
use Intervention\Image\Facades\Image;
use GuzzleHttp\Client;

class WEBPService
{
    // protected $projectId;
    // protected $keyFilePath;
    // protected $bucketName;
    // protected $publicUrlFormat;

    // public function __construct()
    // {
    //     $this->projectId = config('services.gcs.project_id');
    //     $this->keyFilePath = config('services.gcs.key_file');
    //     $this->bucketName = config('services.gcs.bucket');
    //     $this->publicUrlFormat = config('services.gcs.public_url_format');
    // }

    public function convertToWebp($path)
    {
        $img = Image::make(storage_path("app/{$path}"));
        $webpPath = preg_replace('/\.\w+$/', '.webp', $path);

        $img->encode('webp', 75)->save(storage_path("app/{$webpPath}"));

        return $webpPath;
    }

    public function upload($file, string $destinationPath): string
    {
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

        $bucket->upload(fopen($file->getRealPath(), 'r'), ['name' => $destinationPath]);

        return sprintf($this->publicUrlFormat, $this->bucketName, $destinationPath);

        $bucket->upload(fopen($tempPath, 'r'), ['name' => 'newsUpdate/' . $originalFilename]);
        $publicUrl = sprintf($this->gcsApi, $this->bucketName, $originalFilename);
    }

    public function deleteImageFromGCS($filePath)
    {
        $guzzleClient = new \GuzzleHttp\Client([
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
        $object = $bucket->object($filePath);

        if ($object->exists()) {
            $object->delete();
            return true;
        }
        return false;
    }

    public function listImagesFromGCS($folderPath = 'uploads/newsUpdate/')
    {
        $guzzleClient = new \GuzzleHttp\Client([
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
        $objects = $bucket->objects([
            'prefix' => $folderPath,
        ]);
        $imageUrls = [];
        foreach ($objects as $object) {
            $imageUrls[] = sprintf($this->publicUrlFormat, $this->bucketName, $object->name());
        }
        return $imageUrls;
    }
}
