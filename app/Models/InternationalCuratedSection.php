<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternationalCuratedSection extends Model
{
    use HasFactory;
    protected $table    =   'international_curated_sections';
    protected $guarded  =   [];
}
