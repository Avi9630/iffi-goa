<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndianPanorama extends Model
{
    use HasFactory;
    protected $table = 'indian_panorama_cinema';
    protected $guarded = [];

    public function officialSelection()
    {
        return $this->belongsTo(OfficialSelection::class, 'official_selection_id');
    }
}
