<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoaTouristPlace extends Model
{
    protected $table = 'goa_tourist_places';
    protected $guarded = [];

    public function unescoHeritage()
    {
        return $this->belongsTo(UnescoHeritageGoa::class, 'unesco_heritage_goa_id');
    }
}
