<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table    =   'mst_photos';
    protected $guarded  =   [];

    public function category()
    {
        return $this->belongsTo(PhotoCategory::class, 'category_id');
    }

    static function dateFormate($date)
    {
        if ($date) {
            $date = new \DateTime($date);
            $uploaded_date = $date->format('Y-m-d');
        } else {
            $uploaded_date = $date;
        }
        return $uploaded_date;
    }
}
