<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterClass extends Model
{
    use HasFactory;

    protected $table = 'master_classes';

    protected $guarded = [];

    // Define the one-to-many relationship with the Speaker model
    public function speakers()
    {
        return $this->hasMany(Speaker::class, 'master_class_id');
    }
}
