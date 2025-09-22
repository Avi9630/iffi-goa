<?php

namespace App\Services;

use Google\Cloud\Storage\StorageClient;
use Intervention\Image\Facades\Image;
use GuzzleHttp\Client;

class COMMONService
{
    public function dates2025()
    {
        $dates = ['2025-11-20', '2025-11-21', '2025-11-22', '2025-11-23', '2025-11-24', '2025-11-25', '2025-11-26', '2025-11-27', '2025-11-28'];
        return $dates;
    }

    public function dates2024()
    {
        $dates = ['2024-11-20', '2024-11-21', '2024-11-22', '2024-11-23', '2024-11-24', '2024-11-25', '2024-11-26', '2024-11-27', '2024-11-28'];
        return $dates;
    }

    public function dates2023()
    {
        $dates = ['2023-11-20', '2023-11-21', '2023-11-22', '2023-11-23', '2023-11-24', '2023-11-25', '2023-11-26', '2023-11-27', '2023-11-28'];
        return $dates;
    }
}
