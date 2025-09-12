<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $table = 'speakers';

    protected $guarded = [];

    public function masterClass()
    {
        return $this->belongsTo(MasterClass::class, 'master_class_id');
    }

    public function masterTopic()
    {
        return $this->belongsTo(MasterClassTopic::class, 'topic_id');
    }
}
