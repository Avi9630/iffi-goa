<?php

namespace App\Http\Traits;

use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;

trait UICLASSTrait
{
    public function headerClass($data)
    {
        $cssClasses  = [
            1 => 'InternationalCompetition',
            3 => 'coverage-banner',
            4 => 'unesco-banner',
            8 => 'animation',
            9 => 'integrated',
            10 => 'macabrebg',
            11 => 'UNICEF',
            13 => 'Award-banner',
            14 => 'docu_montage page-header',
            15 => 'worldCinema',
            16 => 'restored-classic',
            26 => 'best-web-series',
            30 => 'accessible-india-accessible-films',
            31 => 'panorama-feature-jury-recommends',
            32 => 'special-showcase',
            33 => 'nfdc-showcase-premieres',
            34 => 'nfai-classics',
            35 => 'prasar-bharti-ott',
            36 => 'prasar-bharti-films',
        ];
        return $cssClasses[$data];
    }
}
