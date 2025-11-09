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
            17 => 'rising-stars',
            18 => 'mission-life',
            19 => 'BFI@IFFI',
            20 => 'country-focus-australia',
            21 => 'accolades',
            22 => 'from-the-consulate',
            23 => 'opening-film',
            24 => 'closing-film',
            26 => 'best-web-series',
            27 => 'international-jury-films',
            28 => 'special-presentations',
            30 => 'accessible-india-accessible-films',
            31 => 'panorama-feature-jury-recommends',
            32 => 'special-showcase',
            33 => 'nfdc-showcase-premieres',
            34 => 'nfai-classics',
            35 => 'prasar-bharti-ott',
            36 => 'prasar-bharti-films',
            37 => 'country-focus-japan',
            38 => 'partner-country-spain',
            39 => 'mid-fest',
            40 => 'spotlight-australia',
        ];
        return $cssClasses[$data];
    }
}
