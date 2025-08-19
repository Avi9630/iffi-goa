<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PanoramaCinema extends Model
{
    protected $table = 'panorma_cinema';
    protected $guarded = [];

    public function accessibleFilm()
    {
        return $this->belongsTo(IndianCinema::class, 'indian_cinema_id');
    }
}
