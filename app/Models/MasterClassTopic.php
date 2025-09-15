<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterClassTopic extends Model
{
    protected $table = 'master_class_topics';
    protected $guarded = [];

    public function masterClass()
    {
        return $this->hasOne(MasterClass::class, 'topic_id');
    }

    public function speakers()
    {
        return $this->hasMany(Speaker::class, 'topic_id');
    }

    // public function moderators()
    // {
    //     return $this->hasMany(Moderator::class, 'topic_id');
    // }

    public function masterDate()
    {
        return $this->belongsTo(MasterDate::class, 'master_date_id');
    }

    public function moderators()
    {
        return $this->hasOne(Moderator::class, 'topic_id');
    }

    public function moderator()
    {
        return $this->hasOne(Moderator::class, 'topic_id');
    }
}
