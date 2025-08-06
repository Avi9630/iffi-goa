<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;

class ConvertToWEBP extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:convert-to-w-e-b-p';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command is for convert image to WEBp format';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $folderPath = public_path('/images/indian-panorama-cinema/');

        if (!file_exists($folderPath)) {
            $this->error("Directory not found: {$folderPath}");
            return 1;
        }

        try {
            $manager = new ImageManager(new Driver());
            $files = glob($folderPath . '*.{jpg,jpeg,png,avif}', GLOB_BRACE);
            if (empty($files)) {
                $this->info("No image files found in: {$folderPath}");
                return 0;
            }
            foreach ($files as $filePath) {
                $this->info('Processing: ' . basename($filePath));
                $img = $manager->read($filePath);
                // Create the new webp directory
                $outputDir = $folderPath . 'webp/';
                if (!file_exists($outputDir)) {
                    mkdir($outputDir, 0755, true);
                }
                $filenameWithoutExt = pathinfo($filePath, PATHINFO_FILENAME);
                $webpPath = $outputDir . $filenameWithoutExt . '.webp';
                // dd($webpPath);
                $img->toWebp(75)->save($webpPath);
                $this->info("Converted to: {$webpPath}");
            }
        } catch (\Exception $e) {
            $this->error('Conversion failed: ' . $e->getMessage());
        }

        return 0;
        // try {
        //     $manager = new ImageManager(new Driver());
        //     $img = $manager->read($imagePath); // In v3, use `read` instead of `make`
        //     dd($img);

        //     $webpPath = preg_replace('/\.\w+$/', '.webp', $imagePath);
        //     $img->toWebp(75)->save($webpPath);

        //     $this->info("Image converted to: {$webpPath}");
        // } catch (\Exception $e) {
        //     $this->error('Conversion failed: ' . $e->getMessage());
        // }

        // return 0;
    }
}
