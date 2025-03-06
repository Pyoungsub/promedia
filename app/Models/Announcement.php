<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function previous()
    {
        return self::where('id', '<', $this->id)->orderBy('id', 'desc')->first();
    }
    public function next()
    {
        return self::where('id', '>', $this->id)->orderBy('id', 'asc')->first();
    }
    public function announcementFile()
    {
        return $this->hasOne(AnnouncementFile::class);
    }
    public function announcementModal()
    {
        return $this->hasOne(AnnouncementModal::class);
    }
}
