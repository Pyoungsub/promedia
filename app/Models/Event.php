<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function event_photos()
    {
        return $this->hasMany(EventPhoto::class);
    }
    public function first_event_photo()
    {
        return $this->hasOne(EventPhoto::class)->oldest();
    }
}
